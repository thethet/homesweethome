<?php 
	if (!defined('BASEPATH')) exit ('No direct script access allowed');

	/**
	* 
	*/
	class Contactus_Model extends CI_Model
	{
		
		function __construct()
		{
			# code...
		}
		public function get_all_testi(){
			$sql = sprintf("select * from maid_testimonials");
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		public function record_count(){
			 return $this->db->count_all("maid_testimonials");
		}
		public function gettestipagination($param){
			$limit = $param['limit'];
			$offset = $param['start'];
			$sql = sprintf("select * from maid_testimonials ORDER BY testi_id DESC limit %d offset %d",$limit,$offset);
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		
		
	}//End Class



?>