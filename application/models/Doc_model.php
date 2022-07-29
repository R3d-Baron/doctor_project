<?php  
Class Doc_model extends CI_Model{

// ========================== DOCTOR START =============================================

	function doc_saverecords($data){ //doctor_insert
	
		$query=$this->db->insert('doctor_info',$data);
		
		if($query){
			return true;
		} else {
			return false;
		}
	}


	function displayrecords_doctor(){ //doctor_display

		$this->db->select('*');
		$this->db->from('doctor_info');
		$query=$this->db->get();

		if($query->num_rows()>0){
			return $query->result_array();
		} else{
			return false;
		}
	}

	function doc_login($email,$password){
	
		$q = $this->db->where([
			'd_email'=>$email,
			'd_password'=>$password
		])->get('doctor_info');

		return $q;
	}

	public function updaterecords_doctor($data,$userid){ //doctor_update

		$this->db->where("d_id",$userid);
		
		if($this->db->update('doctor_info',$data)){
			return true;
		} else{
			return false;
		}
	}

	function deleterecords_doctor($userid){ //doctor_delete

		$this->db->where("d_id",$userid);
		$query=$this->db->delete('doctor_info');
		if($query){
			return true;
		} else{
			return false;
		}
		
	}

// ========================== DOCTOR END =================================================

// ============================= ADMIN START =========================================

	function displayrecords_admin(){ // admin display -> both patient and doctor

		$this->db->select('*');
		$this->db->from('doctor_info');
		$query=$this->db->get();

		if($query->num_rows()>0){
			return $query->result_array();
		} else{
			return false;
		}
	}

	function displayrecordsByID_doctor($userid){ // doctor_display admin POV
	
		$this->db->select('*');
		$this->db->from('doctor_info');
		$this->db->where("d_id",$userid);
		$query=$this->db->get();
		
		if($query->num_rows()>0){
			return $query->result_array();
		} else{
			return false;
		}
	}

	// patient_display admin POV ADD here

	function displayrecordsByID_patient($userid){ // patient_display admin POV
	
		$this->db->select('*');
		$this->db->from('patient_info');
		$this->db->where("p_id",$userid);
		$query=$this->db->get();
		
		if($query->num_rows()>0){
			return $query->result_array();
		} else{
			return false;
		}
	}



	//

// ============================= ADMIN END=============================================



	
// ============================ PATIENT START ========================================
//Start of patient_info...........................................................

	function patient_saverecords($data){ // patient_insert data
		
		$query=$this->db->insert('patient_info',$data);
		
		if($query){
			return true;
		} else{
			return false;
		}
	}

	function patient_login($email,$password){ // patient logIN

		$q = $this->db->where([
			'p_email'=>$email,
			'p_password'=>$password
		])->get('patient_info');

		return $q;
	}

	function displayrecords_patient(){ // patient_display

		$this->db->select('*');
		$this->db->from('patient_info');
		$query=$this->db->get();
		
		if($query->num_rows()>0){
			return $query->result_array();
		} else{
			return false;
		}
	}

	function displayrecordsByID($userid){ // patient_display after logIN in dashboard

		$this->db->select('*');
		$this->db->from('patient_info');
		$this->db->where("p_id",$userid);
		$query=$this->db->get();
		
		if($query->num_rows()>0){
			return $query->result_array();
		} else{
			return false;
		}
	}

//End of patient_info..................................................................




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