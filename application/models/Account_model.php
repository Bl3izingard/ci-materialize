<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

class Account_model extends CI_Model
{

	public function __construct()
	{
		$this->load->database ();
	}
	
	public function insert_user(array $user, $prooffile)
	{
		try {
			$user["Password"] = password_hash ( $user["Password"], PASSWORD_BCRYPT );
			
			//Inscription de l'utilisateur
			$this->db->trans_start();
			$this->db->insert ( 'User', $user );
			
			$data = array(
					"Document" => file_get_contents($prooffile["full_path"]),
					"IdUser" => $this->db->insert_id()
			);
			
			$this->db->insert('StudentProof', $data);
			$this->db->trans_complete();
			
			unlink($prooffile["full_path"]);
		}
		catch (Exception $ex)
		{
			return false;
		}
		
		
		return true;
		
	}

	public function update_infos_user($data, $id)
	{
		return $this->db->update ( "User", $data, "id = " . $id );
	}

	public function update_password_user($password, $id)
	{
		$data = array (
				"password" => password_hash($password, PASSWORD_BCRYPT)
		);
		return $this->db->update ( "User", $data, "id = " . $id );
	}

	public function check_credential($email, $password)
	{
		$user = $this->get_user_by_email ( $email );
		
		if ($user->num_rows ())
		{
			$row = $user->row ();
			
			if (password_verify ( $password, $row->Password ))
			{
				return $row;
			}
		}
		
		return false;
	}

	public function get_user_by_login(string $login)
	{
		$user = $this->db->get_where ( "V_User", array (
				"Login" => $login 
		), 1 );
		
		return $user;
	}

	public function get_user_by_email(string $email)
	{
		$user = $this->db->get_where ( "V_User", array (
				"Email" => $email
		), 1 );
		
		return $user;
	}
	
	public function get_user_by_id(int $id)
	{
		$user = $this->db->get_where ( "V_User", array (
				"id" => $id 
		), 1 );
		
		return $user;
	}
	
	public function get_countries()
	{
		$data = $this->db->get ( "Country" );
		
		$list = array ();
		
		foreach ( $data->result () as $row )
		{
			$list [$row->Id] = $row->en_EN;
		}
		
		return $list;
	}
}