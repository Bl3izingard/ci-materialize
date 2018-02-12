<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array (
		'account/signup' => array (
				array (
						'field' => 'login',
						'label' => 'Login',
						'rules' => 'trim|required' ),
				array (
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'trim|required|min_length[8]' ),
				array (
						'field' => 'password_confirm',
						'label' => 'Password Confirmation',
						'rules' => 'trim|required|matches[password]' ),
				array (
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'trim|required|valid_email' ) ),
		'account/signin' => array (
				array (
						'field' => 'login',
						'label' => 'Login',
						'rules' => 'trim|required' ),
				array (
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'trim|required|min_length[8]' ) )
);