<?php
	if (!defined('BASEPATH')) exit ('No direct script access allowed');

	/**
	* 
	*/
	class Users_Model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}


		function createUser()
		{
			$data = array(
					'username' => $this->input->post('username'),
					'password' => crypt($this->input->post('password'), SALT),
					'display_name' => $this->input->post('display_username'),
					'role' => $this->input->post('role')
					);

			$this->db->insert('maid_users', $data);

		}


		function getUsersList()
		{
			//$query = $this->db->get('maid_users');
			$sql = sprintf("select * from maid_users order by id DESC");
			$query = $this->db->query($sql);
			
			$userslist = array();

			foreach ($query->result() as $row) {
	            $usersList[] = array(
	            	'id' => $row->id,
	  				'username' => $row->username,
	  				'display_name' => $row->display_name,
	  				'role' => $row->role
	            );
			}
			return $usersList;
		}


		function edit($id = 0)
		{
		
            if($this->input->post('password')){
	            $user_data = array(
	            	'username' => $this->input->post('username'),
	            	'display_name' => $this->input->post('display_name'),
	            	'password' => crypt($this->input->post('password'), SALT),
	            	'role' => $this->input->post('role')
	            );
	        }else{
	        	$user_data = array(
	            	'username' => $this->input->post('username'),
	            	'display_name' => $this->input->post('display_name'),
	            	'role' => $this->input->post('role')
	            );
	        }

            $this->db->where('id', $id)
            		 ->update('maid_users', $user_data);

		}


		function editProfile($id = 0)
		{
		
            if($this->input->post('password')){
	            $user_data = array(
	            	'username' => $this->input->post('username'),
	            	'display_name' => $this->input->post('display_name'),
	            	'password' => crypt($this->input->post('password'), SALT),
	            	'role' => $this->input->post('role')
	            );
	        }else{
	        	$user_data = array(
	            	'username' => $this->input->post('username'),
	            	'display_name' => $this->input->post('display_name'),
	            	'role' => $this->input->post('role')
	            );
	        }

            $this->db->where('id', $id)
            		 ->update('maid_users', $user_data);

		}


		function delete($id = 0)
		{
			$this->db->where('id', $id)
					 ->delete('maid_users');
		}



	}//End Class
?>