<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class StudentProof_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database ();
	}
	
	public function get_all_studentproof_by_user_id($userId)
	{
		$sp = $this->db->get_where ("StudentProof", array(
				"IdUser" => $userId
		));
		
		return $sp->result();
	}

	public function get_current_studentproof_infos_by_user_id($userId)
	{
		$sp = $this->db->get_where ( "StudentProof", array (
				"IdUser" => $userId 
		), 1 );
		
		return $sp;
	}

	public function get_current_studentproof_status_by_user_id($userId)
	{
		$studentproof = $this->get_current_studentproof_infos_by_user_id ( $userId );
		
		if ($studentproof->num_rows () == 0)
		{
			// Aucun certificat étudiant n'a été téléchargé
			return 1;
		}
		else
		{
			$studentproof = $studentproof->row();
			
			if ($studentproof->Validity == NULL)
			{
				// En cours de validation
				return 2;
			}
			else if (! $studentproof->Validity)
			{
				// N'est pas confome
				return 3;
			}
			else
			{
				if (! empty ( $studentproof->EndValidity ))
				{
					$endValidity = new DateTime ( $studentproof->EndValidity );
					$today = new DateTime ( "Now" );
					
					if ($endValidity < $today)
					{
						// A expiré
						return 4;
					}
				}
			}
		}
		
		//Valide
		return 0;
	}
	
	public function insert_foolproof($prooffile, $userId)
	{
		$data = array(
				"Document" => file_get_contents($prooffile["full_path"]),
				"IdUser" => $userId
		);
		
		$this->db->insert('StudentProof', $data);
	}
}