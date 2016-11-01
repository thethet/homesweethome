<?php
	/**
	* 
	*/
	class Filter_Model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function maid_filter($nationality=array(),$typemaids=array(),$age=array(),$limit,$start){
		
			if($nationality == null and $typemaids == null and $age == null)
			{
				$sql = "SELECT * FROM maid_maids order by maid_id DESC LIMIT ".$limit." OFFSET ".$start;
				$query = $this->db->query($sql);
				return $query->result_array();	
			}else if($nationality AND $typemaids AND $age){
					$age =implode(",",$age);
					$age = str_replace('-',',',$age);
					$age = explode("," , $age);
					$min =(min($age));
					$max =(max($age));
				
					
					$sql = "SELECT * FROM maid_maids where maid_from IN ('".implode("','",array_values($nationality))."') 
							and maid_type IN ('".implode("','",array_values($typemaids))."') 
							AND  maid_age BETWEEN '$min' AND '$max'
							order by maid_id DESC LIMIT  ".$limit." OFFSET ".$start;
					$query = $this->db->query($sql);
					return $query->result_array();
			}else if($nationality AND $typemaids AND $age == null){		
					
					$sql = "SELECT * FROM maid_maids where maid_from IN ('".implode("','",array_values($nationality))."') 
							and maid_type IN ('".implode("','",array_values($typemaids))."')
							order by maid_id DESC LIMIT ".$limit." OFFSET ".$start;
					$query = $this->db->query($sql);
					return $query->result_array();
			}else if($nationality AND $typemaids == null AND $age){
			
				$age =implode(",",$age);
					$age = str_replace('-',',',$age);
					$age = explode("," , $age);
					$min =(min($age));
					$max =(max($age));
				
					
					$sql = "SELECT * FROM maid_maids where maid_from IN ('".implode("','",array_values($nationality))."') 
							AND  maid_age BETWEEN '$min' AND '$max'
							order by maid_id DESC LIMIT  ".$limit." OFFSET ".$start;
					$query = $this->db->query($sql);
					return $query->result_array();
			}else if($nationality and $typemaids == null and $age == null){
				
				$sql = "SELECT * FROM maid_maids where maid_from IN ('".implode("','",array_values($nationality))."') 
									order by maid_id DESC LIMIT  ".$limit." OFFSET ".$start;
					$query = $this->db->query($sql);
					return $query->result_array();
			
			}else if($nationality == null and $typemaids and $age){
				$age =implode(",",$age);
					$age = str_replace('-',',',$age);
					$age = explode("," , $age);
					$min =(min($age));
					$max =(max($age));
				
					
					$sql = "SELECT * FROM maid_maids where maid_type IN ('".implode("','",array_values($typemaids))."') 
							AND  maid_age BETWEEN '$min' AND '$max'
							order by maid_id DESC LIMIT  ".$limit." OFFSET ".$start;
					$query = $this->db->query($sql);
					return $query->result_array();
			}else if($nationality == null and $typemaids and $age == null){
				$sql = "SELECT * FROM maid_maids where maid_type IN ('".implode("','",array_values($typemaids))."') 
							order by maid_id DESC LIMIT  ".$limit." OFFSET ".$start;
					$query = $this->db->query($sql);
					return $query->result_array();
			}else if($nationality == null and $typemaids==null and $age){
				$age =implode(",",$age);
					$age = str_replace('-',',',$age);
					$age = explode("," , $age);
					$min =(min($age));
					$max =(max($age));
				
					
					$sql = "SELECT * FROM maid_maids where maid_age BETWEEN '$min' AND '$max'
							order by maid_id DESC LIMIT  ".$limit." OFFSET ".$start;
					$query = $this->db->query($sql);
					return $query->result_array();
			}
		}
		function filter_maid_count($nationality=array(),$typemaids=array(),$age=array()){
			if($nationality == null and $typemaids == null and $age == null)
			{
				$sql = "SELECT count(*) as 'count_row' FROM maid_maids";
				$query = $this->db->query($sql);
				if($query->result_array())
				{
					$result = $query->result_array();
					$result = array_shift($result);
					$count_row = $result['count_row'];			
				}else{
					$count_row = "";
				}	
				return $count_row;	
			//return $query->num_rows();
			}else if($nationality AND $typemaids AND $age){		
			
					$age =implode(",",$age);
					$age = str_replace('-',',',$age);
					$age = explode("," , $age);
					$min =(min($age));
					$max =(max($age));
				
					
					$sql = "SELECT count(*) as 'count_row' FROM maid_maids where maid_from IN ('".implode("','",array_values($nationality))."') 
							and maid_type IN ('".implode("','",array_values($typemaids))."') 
							AND  maid_age BETWEEN '$min' AND '$max'
							order by maid_id DESC";
					$query = $this->db->query($sql);
					if($query->result_array())
					{
						$result = $query->result_array();
						$result = array_shift($result);
						$count_row = $result['count_row'];			
					}else{
						$count_row = "";
					}	
					return $count_row;
			}else if($nationality AND $typemaids AND $age == null){		
					
					$sql = "SELECT count(*) as 'count_row' FROM maid_maids where maid_from IN ('".implode("','",array_values($nationality))."') 
							and maid_type IN ('".implode("','",array_values($typemaids))."')
							order by maid_id DESC";
					$query = $this->db->query($sql);
					if($query->result_array())
					{
						$result = $query->result_array();
						$result = array_shift($result);
						$count_row = $result['count_row'];			
					}else{
						$count_row = "";
					}	
					return $count_row;
			}else if($nationality AND $typemaids == null AND $age){
			
				$age =implode(",",$age);
					$age = str_replace('-',',',$age);
					$age = explode("," , $age);
					$min =(min($age));
					$max =(max($age));
				
					
					$sql = "SELECT count(*) as 'count_row' FROM maid_maids where maid_from IN ('".implode("','",array_values($nationality))."') 
							AND  maid_age BETWEEN '$min' AND '$max'
							order by maid_id DESC";
					$query = $this->db->query($sql);
					if($query->result_array())
					{
						$result = $query->result_array();
						$result = array_shift($result);
						$count_row = $result['count_row'];			
					}else{
						$count_row = "";
					}	
					return $count_row;
			}else if($nationality and $typemaids==null and $age==null){
			
			
					$sql = "SELECT count(*) as 'count_row' FROM maid_maids where maid_from IN ('".implode("','",array_values($nationality))."') 
							order by maid_id DESC";
							
							//echo $sql;exit();
					$query = $this->db->query($sql);
					if($query->result_array())
					{
						$result = $query->result_array();
						$result = array_shift($result);
						$count_row = $result['count_row'];			
					}else{
						$count_row = "";
					}	
					return $count_row;
					
			}else if($nationality == null and $typemaids and $age){
				$age =implode(",",$age);
					$age = str_replace('-',',',$age);
					$age = explode("," , $age);
					$min =(min($age));
					$max =(max($age));
				
					
					$sql = "SELECT count(*) as 'count_row' FROM maid_maids where maid_type IN ('".implode("','",array_values($typemaids))."') 
							AND  maid_age BETWEEN '$min' AND '$max'
							order by maid_id DESC";
					$query = $this->db->query($sql);
				if($query->result_array())
				{
					$result = $query->result_array();
					$result = array_shift($result);
					$count_row = $result['count_row'];			
				}else{
					$count_row = "";
				}	
				return $count_row;
			}else if($nationality == null and $typemaids and $age == null){
				$sql = "SELECT count(*) as 'count_row' FROM maid_maids where maid_type IN ('".implode("','",array_values($typemaids))."') 
							order by maid_id DESC";
					$query = $this->db->query($sql);
					if($query->result_array())
					{
						$result = $query->result_array();
						$result = array_shift($result);
						$count_row = $result['count_row'];			
					}else{
						$count_row = "";
					}	
					return $count_row;
			}else if($nationality == null and $typemaids==null and $age){
				$age =implode(",",$age);
					$age = str_replace('-',',',$age);
					$age = explode("," , $age);
					$min =(min($age));
					$max =(max($age));
				
					
					$sql = "SELECT count(*) as 'count_row' FROM maid_maids where maid_age BETWEEN '$min' AND '$max'
							order by maid_id DESC";
					$query = $this->db->query($sql);
					if($query->result_array())
					{
						$result = $query->result_array();
						$result = array_shift($result);
						$count_row = $result['count_row'];			
					}else{
						$count_row = "";
					}	
					return $count_row;
				
			}
		}
		 public function tester($limit, $start) {
			$this->db->limit($limit, $start);
			
			//$sql = "select * from maid_maids";
			//$query =$this->db->query($sql);
			$query = $this->db->get("maid_maids");
			//$query = $this->db->where(page_parent,'our_events')
			//$query = $this->db->get_where('maid_pages',array('page_parent'=>'our_events'));

			if ($query->num_rows() > 0) {
				foreach ($query->result() as $row) {
					$data[] = $row;
				}
				return $data;
			}
			return false;
		}
		function testcount()
		{
			//return $this->db->count_all("Country");
			$recordcount='';
			$sql ="select count(*) as record from maid_maids";
			$query = $this->db->query($sql);
			if($query->result_array())
			{
				$result =$query->result_array();
				$result = array_shift($result);
				$recordcount = $result['record'];		
			}
			return $recordcount;
		}


	}// End class


?>