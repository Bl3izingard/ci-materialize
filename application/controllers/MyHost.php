<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MyHost extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct ();
		
		if (! $this->toolbox->is_logged ())
		{
			redirect ( '/signin' );
		}
		else
		{
			redirect('/subscribe');
		}
	}
	
	public function index()
	{
		
	}
}