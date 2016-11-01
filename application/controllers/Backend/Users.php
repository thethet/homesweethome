<?php
/**
* 
*/
class Users extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Backend/Users_Model');
		ob_start();
	}

	function index()
	{
		if (!isLogin()) {
            redirect('admin');
        }

		$this->load->model('Users_Model');

		$data['usersList'] = $this->Users_Model->getUsersList();

		$data['main_content'] = 'admin/users/users';
		$this->load->view('layouts/admin_template', $data);
	}
	
	
	public function role_check()
    {
        echo $this->input->post('role');
        if ($this->input->post('role') == 0)  {
	        $this->form_validation->set_message('role_check', 'Please choose your role.');
	        return FALSE;
	    }
	    else {
	        return TRUE;
	    }
    }

	function addUser()
	{
		$check='';
		$this->session->set_flashdata('alert_text', '');
		if (!isLogin()) {
            redirect('admin');
        }

		if ($this->input->post()) {
			$this->load->library('form_validation');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('display_username', 'Display Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('role', 'Role', 'required|callback_role_check');

			if ($this->form_validation->run() == FALSE)
			{
				//$data['alert']['error'] = validation_errors();
				//$this->session->set_flashdata('alert_text', validation_errors());
			}else{
			
				$check = self::check_user($this->input->post('username'));
				
				//echo $check; exit();
				if($check===0){
					$this->load->model('Users_Model');
					$this->Users_Model->createUser();
					redirect('admin/users');
				}else if($check ===1){
					$this->session->set_flashdata('alert_text', '<span style="color:#BE3D39;">Username is Already Exist</span>');
				}

			}
		}

		$data['main_content'] = 'admin/users/add_user';

		$this->load->view('layouts/admin_template',$data);
	}


	function usersList()
	{
		if (!isLogin()) {
            redirect('admin');
        }

		// $this->load->model('Users_Model');

		// $data['usersList'] = $this->Users_Model->getUsersList();

		// $data['main_content'] = 'admin/users';
		// $this->load->view('layouts/admin_template', $data);

	}
	
	function editUser($id=0)
	{
		$check='';
		if (!isLogin()) {
            redirect('admin');
        }
        
		if ($this->input->post()) {
			
			$check = self::check_edituser($id,$this->input->post('username'));
			
			//echo $check;exit();
			
			if($check===0){
			
			$this->load->model('Users_Model');
			$data['user_data'] = $this->Users_Model->edit($id);
			$this->session->set_flashdata('alert_text', 'Successfully update !');
			
			//}else if($check ===1){
			}else{
				$this->session->set_flashdata('alert_text', '<span style="color:#BE3D39;">Username is Already Exist</span>');
			}
		}
		$result = $this->db->where('id', $id)
                            ->get('maid_users')->first_row('array');

        $data['user_data'] = $result;


		$data['main_content'] = 'admin/users/edit_user';
		$this->load->view('layouts/admin_template', $data);
	}


	function deleteUser($id=0)
	{
		if (!isLogin()) {
            redirect('admin');
        }


        $this->load->model('Users_Model');
        $this->Users_Model->delete($id);

		redirect('admin/users');

	}


	function viewProfile()
	{
    	if (!isLogin()) {
            redirect('admin');
        }

        $id = $this->session->userdata('id');

    	if ($this->input->post()) {
			$this->load->model('Users_Model');
			$data['profile_data'] = $this->Users_Model->editProfile($id);
			$this->session->set_flashdata('alert_text', 'Successfully update !');
		}		

		$result = $this->db->where('id', $id)
                            ->get('maid_users')->first_row('array');

        $data['profile_data'] = $result;
        //echo $this->db->queries[1];

		$data['main_content'] = 'admin/users/profile';
		$this->load->view('layouts/admin_template', $data);
	}
	 public function check_user($uname){
        
        $this -> db -> select("id");
        $this -> db -> from("maid_users");
        $this -> db -> where(array("username" => $uname));
        
        $query = $this -> db -> get();
        
        return $query -> num_rows();
        
    }
	public function check_edituser($id,$uname){
	
		$sql = "SELECT id FROM maid_users WHERE '$uname' IN (SELECT username FROM maid_users WHERE id IN (SELECT id FROM maid_users WHERE id !=". $id ."))";
		$query = $this->db->query($sql);
		return $query -> num_rows();
		
	
	}



}// End Class
?>