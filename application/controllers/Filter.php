<?php
	/**
	* 
	*/
	class Filter extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library("pagination");
			$this->load->model('Frontend/Filter_Model');
			$this->load->model('Backend/Maids_Model');
			$this->load->model('Backend/Agegroup_Model');
			 $this->load->model('Backend/Type_Model');
		}


		function index()
		{
			$nationality = array();
			$typemaids = array();
			$age = array();
			
			$url="";
			
			
			if(isset($_GET['nationality']) && !empty($_GET['nationality'])){
			 $apinationality = implode(",",$_GET['nationality']);
			 $apinationality='&nationality='.$apinationality;
			}else{
			 $apinationality='';
			}
			if(isset($_GET['type']) && !empty($_GET['type'])){
			 $apitype = implode(",",$_GET['type']);
			 $apitype='&type='.$apitype;
			}else{
			 $apitype = '';
			}
			if(isset($_GET['age'])){
			 if($_GET['age'][0]){ 
			 $allrangeage = $_GET['age'][0];
			 $allrangeage  = explode("-",$allrangeage);
			 $firstage = $allrangeage[0];
			 $secondage = $allrangeage[1];
			 $apiage='&ageFrom='.$firstage.'&ageTo='.$secondage;
			 }else{
			  $apiage = '';
			 }
			}else{
			  $apiage = '';
			}
			 if(isset($_GET['nationality']) && $_GET['nationality']!==""){
		        $key['nat_key'] = $this->input->get('nationality');
		        foreach($key['nat_key'] as $na){
		        	$url.="&nationality[]=".$na;
		        }
		    }
			if(isset($_GET['type']) && $_GET['type']!==""){
				 $key['type'] = $this->input->get('type');
		        foreach($key['type'] as $na){
		        	$url.="&type[]=".$na;
		        }
			}
			if(isset($_GET['age']) && $_GET['age']!==""){
				 $key['age'] = $this->input->get('age');
		        foreach($key['age'] as $na){
		        	$url.="&age[]=".$na;
		        }
			}
						
			if(isset($_GET['nationality'])){
				$nationality = $this->input->get('nationality');
			}
			
			
			if(isset($_GET['type'])){
				$typemaids = $this->input->get('type');
			}
			if(isset($_GET['age'])){
				$age = $this->input->get('age');
			}
			
			if(isset($_GET['per_page'])){
				if($_GET['per_page']){
					
					$offset = $_GET['per_page'];
				}
			}else{
				$offset = 0;
			}
			
			/*--- From API ---*/
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, "http://188.166.228.34/api/v1/maids?api_token=9NHeLhoNI5s5oJrGJJfPOvIgFAuwo2C5rLr01dHBIsRn2Fu4".$apinationality.$apitype.$apiage."&per_page=6&page=$offset");
			curl_setopt($curl, CURLOPT_HEADER, 0);  
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
			$result = curl_exec($curl);
			curl_close($curl);
			$result = json_decode($result,true);
			
			
			$config = array();
			$config["base_url"] = base_url() . "maid/search_result?".$url;
			$config["total_rows"] = $result?$result['meta']['pagination']['total']:1;
			$config["per_page"] = 6;
			$config["uri_segment"] = 2;
	        $config['use_page_numbers'] = TRUE;
		   // $config['display_pages'] = FALSE;
			$config['first_link'] = FALSE;
			$config['last_link'] = FALSE;
			$config['page_query_string'] = TRUE;
			
			$config['cur_tag_open'] = '&nbsp;<a class="current">';
			$config['cur_tag_close'] = '</a>';
			
			$config['next_link'] = 'Next';
			$config['prev_link'] = 'Previous';
			$config['first_link'] = 'First';
			$config['last_link'] = 'Last';
				
	
			$this->pagination->initialize($config);
			$data["links"] = $this->pagination->create_links();
			
			
			
			$data["filter_result"] = $result['data'];
				
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
			
			//for checkbox
			$data['nationality'] = $nationality ;
			$data['checktypes'] =$typemaids;
			$data['ages'] = $age;
					
			$data['main_content'] = 'filter';
			$this->load->view('layouts/template',$data);
		}
	}


?>