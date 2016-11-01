<?php
	/**
	* 
	*/
	class Pages extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->Model('Pages_Model');
			$this->load->Model('Frontend/Contactus_Model');
			$this->load->Model('Backend/Maids_Model');
		}


		function index()
		{
			/*--- From API ---*/
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, "http://188.166.228.34/api/v1/maids?api_token=9NHeLhoNI5s5oJrGJJfPOvIgFAuwo2C5rLr01dHBIsRn2Fu4&per_page=6&page=0");
			curl_setopt($curl, CURLOPT_HEADER, 0);  
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
			$result = curl_exec($curl);
			curl_close($curl);
			$result = json_decode($result,true);
			$data['maids'] = $result['data'];
			//$data['maids'] = $this->Pages_Model->get_home_maids();
			$data['main_content'] = 'home';
			$this->load->view('layouts/template', $data);
		}
		function mailsend(){
			$data['returnname'] = '';
			if($this->input->post()){
				$data['returnname'] = $this->Pages_Model->mailsend();
			}
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, "http://188.166.228.34/api/v1/maids?api_token=9NHeLhoNI5s5oJrGJJfPOvIgFAuwo2C5rLr01dHBIsRn2Fu4&per_page=6&page=0");
			curl_setopt($curl, CURLOPT_HEADER, 0);  
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
			$result = curl_exec($curl);
			curl_close($curl);
			$result = json_decode($result,true);
			$data['maids'] = $result['data'];
			$data['main_content'] = 'home';
			$this->load->view('layouts/template', $data);
		}

	}// End Class
?>
