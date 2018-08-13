<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscribe extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct ();
		
		if (! $this->toolbox->is_logged ())
		{
			redirect ( '/signin' );
		}
	}
	
	public function index()
	{
		$this->plan();
	}
	
	public function plan()
	{
		$data["title_page"] = "Choose a plan";
		
		$this->load->view ( 'template/head', $data );
		$this->load->view ( 'template/header' );
		$this->load->view ( 'subscribe/plan', $data );
		$this->load->view ( 'template/footer' );
	}
}