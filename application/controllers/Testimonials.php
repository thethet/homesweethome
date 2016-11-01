<?php
	/**
	* 
	*/
	class Testimonials extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->library("pagination");
			$this->load->Model('Pages_Model');
			$this->load->Model('Frontend/Contactus_Model');
		}


		function index()
		{
			/* pagination */
        	$config = array();
	        $config["base_url"] = base_url() . "testimonials";
	        $config["total_rows"] = $this->Contactus_Model->record_count();
	        $config["per_page"] = 2;
	        $config["uri_segment"] = 2;
	       // $config['use_page_numbers'] = TRUE;
		    $config['display_pages'] = FALSE;
			$config['first_link'] = FALSE;
			$config['last_link'] = FALSE;
	     	//$choice = $config["total_rows"] / $config["per_page"];
    		//$config["num_links"] = round($choice);
			//$config['page_query_string'] = TRUE;

    		//config for bootstrap pagination class integration
	        $config['full_tag_open'] = '<ul class="pager">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = false;
	        $config['last_link'] = false;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        // $config['prev_link'] = '&laquo';
	        $config['prev_link'] = 'Previous';
	        $config['prev_tag_open'] = '<li class="previous">';
	        $config['prev_tag_close'] = '</li>';
	        // $config['next_link'] = '&raquo';
	        $config['next_link'] = 'Next';
	        $config['next_tag_open'] = '<li class="next">';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';


	        $this->pagination->initialize($config);

	     /*  $page_no = ($this->uri->segment(2)) ? $this->uri->segment(2) : 0;
	        if (empty($page_no))
            $page_no = 1;
        	$offset = ($page_no*$config['per_page']);*/
			if($this->uri->segment(2)){
			$page = ($this->uri->segment(2)) ;
			}
			else{
			$page = 0;
			}
			$offset = $page;

	        $param['limit'] = $config['per_page'];
        	$param['start'] = $offset;
	        $data["links"] = $this->pagination->create_links();
        	/**************************************/
			 $data['testimonials'] = $this->Contactus_Model->gettestipagination($param);
			//$data['testimonials'] = $this->Contactus_Model->get_all_testi();
			$data['main_content'] = 'testimonials';
			$this->load->view('layouts/template', $data);
		}

	}// End Class
?>
