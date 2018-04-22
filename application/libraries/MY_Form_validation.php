<?php

class MY_Form_validation extends CI_Form_validation
{

	public function __construct($rules = array())
	{
		parent::__construct ( $rules );
	}

	/* function à déplacer */
	public function no_space($str)
	{
		return str_ireplace ( " ", "", $str );
	}

	public function matches_password($str, $field)
	{
		sscanf ( $field, '%[^.].%[^.]', $table, $field );
		
		return isset ( $this->CI->db ) ? (password_verify ( $str, $this->CI->db->get_where ( "user", array (
				"id" => $this->CI->session->get_userdata ( "user" ) ["user"]->id 
		), 1 )->row ()->password)) : FALSE;
	}
}