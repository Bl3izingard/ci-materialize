<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

$config = array (
		'account/signup' => array (
				array (
						'field' => 'login',
						'label' => 'Login',
						'rules' => 'trim|no_space|strtolower|required|min_length[3]|max_length[30]|is_unique[user.login]' 
				),
				array (
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'trim|required|min_length[8]|max_length[30]' 
				),
				array (
						'field' => 'password_confirm',
						'label' => 'Password Confirmation',
						'rules' => 'trim|required|matches[password]' 
				),
				array (
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'trim|no_space|strtolower|required|valid_email|max_length[50]|is_unique[user.email]' 
				) 
		),
		'account/signin' => array (
				array (
						'field' => 'login',
						'label' => 'Login',
						'rules' => 'trim|strtolower|required' 
				),
				array (
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'trim' 
				) 
		),
		'account/edit/infos' => array (
				array (
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'trim|no_space|strtolower|required|valid_email|max_length[50]|is_unique[user.email]' 
				) 
		),
		'account/edit/password' => array (
				array (
						'field' => 'old_password',
						'label' => 'Old Password',
						'rules' => 'trim|required|matches_password[user.password]' 
				),
				array (
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'trim|required|min_length[8]|max_length[30]' 
				),
				array (
						'field' => 'password_confirm',
						'label' => 'Password Confirmation',
						'rules' => 'trim|required|matches[password]' 
				) 
		) 
);
