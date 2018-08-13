<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class StudentProof extends CI_Controller
{

	public function __construct()
	{
		parent::__construct ();
		
		if (! $this->toolbox->is_logged ())
		{
			redirect ( '/signin' );
		}
		
		$this->load->model ( "studentproof_model" );
		$this->load->helper ( "form" );
		$this->load->library ( 'form_validation' );
	}

	public function index()
	{
		status ();
	}

	public function status($toast = NULL)
	{
		$footer ["extra_js"] = "init_foolproof.js";
		
		$data ["title_page"] = "Student Proof Status";
		
		$data ["user"] = $this->session->get_userdata ( "user" ) ["user"];
		
		$studentproof = $this->studentproof_model->get_all_studentproof_by_user_id ( $data ["user"]->Id );
		
		/*
		 * Prépare Studentproof Table Date
		 */
		foreach ( $studentproof as $key => $proof )
		{
			$formatedProof ["Document"] = $proof->Document;
			$formatedProof ["EndValidity"] = $proof->EndValidity;
			$formatedProof ["Comment"] = $proof->Comment;
			$formatedProof ["Id"] = $proof->Id;
			
			if (empty ( $proof->Validity ))
			{
				$formatedProof ["ValidityText"] = "Your document is under verification.";
			}
			else if (! $proof->Validity)
			{
				$formatedProof ["ValidityText"] = "Your document is not valid.";
			}
			else
			{
				if (! empty ( $studentproof->EndValidity ))
				{
					$formatedProof ["ValidityText"] = "Your document is valid.";
					$endValidity = new DateTime ( $studentproof->EndValidity );
					$today = new DateTime ( "Now" );
					
					if ($endValidity < $today)
					{
						// A expiré
						$formatedProof ["Comment"] = "Your document has expired.";
					}
				}
			}
			$data ["studentproof"] [$key] = ( object ) $formatedProof;
		}
		

		$this->load->view ( 'template/head', $data );
		$this->load->view ( 'template/header' );
		$this->load->view ( 'studentproof/status', $data );
		$this->load->view ( 'template/footer', $footer );
	}
	
	public function add()
	{
		$config ['upload_path'] = 'C:/Git/mfh/upload/';
		$config ['allowed_types'] = 'jpg';
		$config ['max_size'] = '256';
		$config ['max_width'] = '1024';
		$config ['max_height'] = '1200';
		$config ['encrypt_name'] = true;
		$config ['file_ext_tolower'] = true;
		
		$this->load->library ( 'upload', $config );
		
		$upload_result = $this->upload->do_upload ( 'prooffile' );
		
		if(! $upload_result)
		{
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode(array(
					'error' => true, 
					'message' => $this->upload->display_errors ( '', '' ))));
		}
		else
		{
			$prooffile = $this->upload->data ();
			$this->studentproof_model->insert_foolproof($prooffile, $this->session->get_userdata ( "user" ) ["user"]->Id);
			
			$this->output
			->set_content_type('application/json')
			->set_output(json_encode(array(
					'error' => false)));
		}
	}
}
?>