<?php
	/**
	* 
	*/
	class Maiddetail extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			 $this->load->model('Frontend/Searchmaids_Model');
			 $this->load->model('Backend/Agegroup_Model');
			  $this->load->model('Backend/Maids_Model');
		}


		function maidDetail($id=0)
		{   
		    $curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, "http://188.166.228.34/api/v1/maids/$id?api_token=9NHeLhoNI5s5oJrGJJfPOvIgFAuwo2C5rLr01dHBIsRn2Fu4");
			curl_setopt($curl, CURLOPT_HEADER, 0);  
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
			$result = curl_exec($curl);
			curl_close($curl);
			$result = json_decode($result,true);
			
			$data['maidDetailData']=$result['data'];
		    $data['maidInfoDetailData'] = $this->Searchmaids_Model->getMaidInfoDetailData($id);

		    
		    $data['ageList'] = $this->Agegroup_Model->getAgeList();
		    

		    $curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, "http://188.166.228.34/api/v1/countries?api_token=9NHeLhoNI5s5oJrGJJfPOvIgFAuwo2C5rLr01dHBIsRn2Fu4&display=y");
			curl_setopt($curl, CURLOPT_HEADER, 0);  
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); 
			$countries = curl_exec($curl);
			curl_close($curl);
			$countries = json_decode($countries,true);
			
		   if($countries){
		    $data['countriesList'] = $countries['data'];
			}

		  
			
			$data['main_content'] = 'maiddetail';
			$this->load->view('layouts/template', $data);
		}


	}// End Class


?>