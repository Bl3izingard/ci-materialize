<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

$config = array (
		'account/signup' => array (
				array (
						'field' => 'login',
						'label' => 'Login',
						'rules' => 'trim|no_space|strtolower|required|min_length[3]|max_length[30]|is_unique[User.Login]' 
				),
				array (
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'trim|no_space|strtolower|required|valid_email|max_length[255]|is_unique[User.Email]'
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
						'field' => 'firstname',
						'label' => 'Firstname',
						'rules' => 'trim|no_space|strtoupper|required|max_length[30]'
				),
				array (
						'field' => 'lastname',
						'label' => 'Lastname',
						'rules' => 'trim|no_space|strtoupper|required|max_length[50]'
				),
				array (
						'field' => 'street',
						'label' => 'Street',
						'rules' => 'trim|strtoupper|required|max_length[255]'
				),
				array (
						'field' => 'city',
						'label' => 'City',
						'rules' => 'trim|no_space|strtoupper|required|max_length[50]'
				),
				array (
						'field' => 'zipcode',
						'label' => 'ZipCode',
						'rules' => 'trim|no_space|strtolower|max_length[10]'
				),
				array (
						'field' => 'country',
						'label' => 'Contry',
						'rules' => 'required'
				),
				array (
						'field' => 'tos',
						'label' => 'Term of service',
						'rules' => 'required'
				)
		),
		'account/signin' => array (
				array (
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'trim|no_space|strtolower|required|valid_email' 
				),
				array (
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'trim' 
				) 
		),
		'account/edit/infos' => array (
								array (
						'field' => 'street',
						'label' => 'Street',
						'rules' => 'trim|strtoupper|required|max_length[255]'
				),
				array (
						'field' => 'city',
						'label' => 'City',
						'rules' => 'trim|no_space|strtoupper|required|max_length[50]'
				),
				array (
						'field' => 'zipcode',
						'label' => 'ZipCode',
						'rules' => 'trim|no_space|strtolower|required|max_length[10]'
				),
				array (
						'field' => 'country',
						'label' => 'Contry',
						'rules' => 'required'
				)
		),
		'account/edit/password' => array (
				array (
						'field' => 'old_password',
						'label' => 'Old Password',
						'rules' => 'trim|required|matches_password[User.Password]' 
				),
				array (
						'field' => 'password',
						'label' => 'Password',
						'rules' => 'trim|required|min_length[8]|max_length[30]' 
				),
				array (
						'field' => 'password_confirm',
						'label' => 'Password Confirmation',
						'rules' => 'trim|required|matches[Password]' 
				)
		),
		'account/edit/email' => array (
				array (
						'field' => 'email',
						'label' => 'Email',
						'rules' => 'trim|no_space|strtolower|required|valid_email|max_length[255]|is_unique[User.Email]'
				))
);
