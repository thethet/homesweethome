<?php
	/**
	* 
	*/
	class Searchmaids extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library("pagination");
			$this->load->model('Frontend/Searchmaids_Model');
			$this->load->model('Backend/Agegroup_Model');
			$this->load->model('Backend/Maids_Model');
		}

		function index()
		{
			if(isset($_GET['per_page'])){
				if($_GET['per_page']){
					
					$offset = $_GET['per_page'];
				}
			}else{
				$offset = 0;
			}
			/*--- From API ---*/
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, "http://188.166.228.34/api/v1/maids?api_token=9NHeLhoNI5s5oJrGJJfPOvIgFAuwo2C5rLr01dHBIsRn2Fu4&per_page=6&page=$offset");
			curl_setopt($curl, CURLOPT_HEADER, 0);  
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
			$result = curl_exec($curl);
			curl_close($curl);
			$result = json_decode($result);
			
        	/* pagination */
        	$config = array();
	        $config["base_url"] = base_url() . "searchmaids?";
	        $config["total_rows"] = $result?$result->meta->pagination->total:1;
	        $config["per_page"] = 6;
	        $config["uri_segment"] = 2;
	        $config['use_page_numbers'] = TRUE;	
			$config['page_query_string'] = TRUE;
		   // $config['display_pages'] = FALSE;
			$config['cur_tag_open'] = '&nbsp;<a class="current">';
			$config['cur_tag_close'] = '</a>';
			
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Previous';
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
			


	        $this->pagination->initialize($config);
	        $data["links"] = $this->pagination->create_links();
        	/**************************************/
		    //$data['ageList'] = $this->Agegroup_Model->getAgeList();

		   
		    $curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, "http://188.166.228.34/api/v1/countries?api_token=9NHeLhoNI5s5oJrGJJfPOvIgFAuwo2C5rLr01dHBIsRn2Fu4");
			curl_setopt($curl, CURLOPT_HEADER, 0);  
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
			$countries = curl_exec($curl);
			curl_close($curl);
			$countries = json_decode($countries,true);
			
		   if($countries){
		    $data['countriesList'] = $countries['data'];
			}

		    $data['maidtypelist'] = $this->Maids_Model->getmaidtypes();			
			if($result){
		    foreach($result->data as $key=>$value):
				$data['searchmaidsList'][$key] = $value;
			endforeach;
			}
			$data['main_content'] = 'searchmaids';
			$this->load->view('layouts/template', $data);
		}


	}// End Class


?>