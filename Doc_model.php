<?php  
Class Doc_model extends CI_Model
{
	function saverecords($data) // doctor_insert
	{
		$query=$this->db->insert('doctor_info',$data);
		if($query)
		{
			return true;
		}
		else
		{
			return false;
		}
	}


	function displayrecords_doctor() // doctor display
	{
		$this->db->select('*');
		$this->db->from('doctor_info');
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}


	function displayrecords_admin() // admin display -> both patient and doctor
	{
		$this->db->select('*');
		$this->db->from('doctor_info');
		$query=$this->db->get();
		if($query->num_rows()>0)
		{
			return $query->result_array();
		}
		else
		{
			return false;
		}
	}


// 	function displayrecordsByID($userid)//doctor_display
// 	{
// 		$this->db->select('*');
// 		$this->db->from('doctor_info');
// 		$this->db->where("d_id",$userid);
// 		$query=$this->db->get();
// 		if($query->num_rows()>0)
// 		{
// 			return $query->result_array();
// 		}
// 		else
// 		{
// 			return false;
// 		}
// 	}


// 	function deleterecords($userid)//doctor_delete
// 	{
// 		$this->db->where("d_id",$userid);
// 		$query=$this->db->delete('doctor_info');
// 		if($query)
// 		{
// 			return true;
// 		}
// 		else
// 		{
// 			return false;
// 		}
		
// 	}


// 	function updaterecords($data,$userid)//doctor_update
// 	{	
// 		$this->db->where("d_id",$userid);
		
// 		if($this->db->update('doctor_info',$data))
// 		{
// 			return true;
// 		}
// 		else
// 		{
// 			return false;
// 		}
// 	}

// //End of Doctor_info

// //Start of patient_info

// function saverecords($data)//patient_insert
// 	{
// 		$query=$this->db->insert('doctor_info',$data);
// 		if($query)
// 		{
// 			return true;
// 		}
// 		else
// 		{
// 			return false;
// 		}
// 	}


// 	function displayrecords()//patient_display
// 	{
// 		$this->db->select('*');
// 		$this->db->from('doctor_info');
// 		$query=$this->db->get();
// 		if($query->num_rows()>0)
// 		{
// 			return $query->result_array();
// 		}
// 		else
// 		{
// 			return false;
// 		}
// 	}


// 	function displayrecordsByID($userid)//patient_display
// 	{
// 		$this->db->select('*');
// 		$this->db->from('doctor_info');
// 		$this->db->where("p_id",$userid);
// 		$query=$this->db->get();
// 		if($query->num_rows()>0)
// 		{
// 			return $query->result_array();
// 		}
// 		else
// 		{
// 			return false;
// 		}
// 	}


// 	function deleterecords($userid)//patient_delete
// 	{
// 		$this->db->where("p_id",$userid);
// 		$query=$this->db->delete('doctor_info');
// 		if($query)
// 		{
// 			return true;
// 		}
// 		else
// 		{
// 			return false;
// 		}
		
// 	}


// 	function updaterecords($data,$userid)//patient_update
// 	{	
// 		$this->db->where("p_id",$userid);
		
// 		if($this->db->update('doctor_info',$data))
// 		{
// 			return true;
// 		}
// 		else
// 		{
// 			return false;
// 		}
// 	}



}
?>