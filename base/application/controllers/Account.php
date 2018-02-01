<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Account extends CI_Controller {

	public function index()
	{
	    signin();
	}
	
	public function signin()
	{
	    $this->load->view('head');
	    $this->load->view('header');
	    $this->load->view('signin');
	    $this->load->view('footer');
	}
	
	public function signout()
	{
	    $this->load->view('head');
	    $this->load->view('header');
	    $this->load->view('signout');
	    $this->load->view('footer');
	}
	
	public function signup()
	{
	    $this->load->view('head');
	    $this->load->view('header');
	    $this->load->view('signup');
	    $this->load->view('footer');
	}
}
?>