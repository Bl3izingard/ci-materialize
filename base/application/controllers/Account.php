<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Account extends CI_Controller {

	public function index()
	{
	    signin();
	}
	
	public function signin()
	{
	    $this->load->view('template/head');
	    $this->load->view('template/header');
	    $this->load->view('account/signin');
	    $this->load->view('template/footer');
	}
	
	public function success()
	{
	    $this->load->view('template/head');
	    $this->load->view('template/header');
	    $this->load->view('account/success');
	    $this->load->view('template/footer');
	}
	
	public function signout()
	{
	    $this->load->view('template/head');
	    $this->load->view('template/header');
	    $this->load->view('account/signout');
	    $this->load->view('template/footer');
	}
	
	public function signup()
	{
	    $this->load->view('template/head');
	    $this->load->view('template/header');
	    $this->load->view('account/signup');
	    $this->load->view('template/footer');
	}
}
?>