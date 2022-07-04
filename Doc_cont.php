<?php
class Doc_cont extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct(); // default constructor
		$this->load->model('Doc_model'); // Model import
		// $this->load->helper('url'); // Loading url helper
	}
	

// Doctor signUP STARTS here.....CHECKED - WORKING....Edited by : Arnab (04-07-2022)........

	public function savedata_doctor()
	{
		// $this->load->view('doc_front_view');
		// $this->load->view('patient_signup');
		// $this->load->view('doc_signin');

		$this->load->view('doc_signup');
		// $this->load->view('doc_admin_display');

		if($this->input->post('submit'))
		{
			$d_name=$this->input->post('d_name');
			$d_email=$this->input->post('d_email');
			$d_password=$this->input->post('d_password');
			$d_mobile=$this->input->post('d_mobile');
			$d_alt_mobile=$this->input->post('d_alt_mobile');
			$d_address=$this->input->post('d_address');
			$d_special=$this->input->post('d_special');
			$d_sex=$this->input->post('d_sex');
			$d_language=implode(",", $this->input->post('d_language'));
			
			$img1=$_FILES['d_image']['name'];
			$new_img1=rand(1111,9988).'_'.time().'_'.$img1;
			$d_upload_path1='upload/doctor/d_upload_image/'.$new_img1;
			$d_source_path1=$_FILES['d_image']['tmp_name'];

			move_uploaded_file($d_source_path1, $d_upload_path1);

			$img2=$_FILES['d_aadhar']['name'];
			$new_img2=rand(1111,9988).'_'.time().'_'.$img2;
			$d_upload_path2='upload/doctor/d_upload_aadhar/'.$new_img2;
			$d_source_path2=$_FILES['d_aadhar']['tmp_name'];

			move_uploaded_file($d_source_path2, $d_upload_path2);

			$img3=$_FILES['d_pan']['name'];
			$new_img3=rand(1111,9988).'_'.time().'_'.$img3;
			$d_upload_path3='upload/doctor/d_upload_pan/'.$new_img3;
			$d_source_path3=$_FILES['d_pan']['tmp_name'];

			move_uploaded_file($d_source_path3, $d_upload_path3);

			$img4=$_FILES['d_reg_cer']['name'];
			$new_img4=rand(1111,9988).'_'.time().'_'.$img4;
			$d_upload_path4='upload/doctor/d_upload_reg_cer/'.$new_img4;
			$d_source_path4=$_FILES['d_reg_cer']['tmp_name'];			
			
			move_uploaded_file($d_source_path4, $d_upload_path4);
			
				$data=array('d_name'=>$d_name,'d_email'=>$d_email,'d_password'=>$d_password,'d_mobile'=>$d_mobile,'d_alt_mobile'=>$d_alt_mobile,'d_address'=>$d_address,'d_special'=>$d_special,'d_sex'=>$d_sex,'d_language'=>$d_language,'d_image'=>$d_upload_path1,'d_aadhar'=>$d_upload_path2,'d_pan'=>$d_upload_path3,'d_reg_cer'=>$d_upload_path4);

			$result=$this->Doc_model->saverecords($data);
			if ($result==true) 
			{
				redirect('Doc_cont/dispdata_doctor');
			}
			else
			{
				echo "Data Not Inserted";
			}
		}
	} // SCOPE of " public function savedata_doctor() " CLOSES here........

// Doctor signUP ENDS here..................................................................


// Doctor display STARTS here...............................................................

	public function dispdata_doctor()
	{
		$result['data']=$this->Doc_model->displayrecords_doctor();
		
		if($result)
		{
			$this->load->view('doc_doctor_display',$result);
		}
		else
		{
			echo "failed to display";
		}
	} // SCOPE of " public function dispdata_doctor() " CLOSES here........ 

// Doctor display ENDS here...............................................................


// Patient signUP STARTS here.....Edited by - Koustav then Arnab (04-07-2022)..~ OK ~..

	public function savedata_patient()
	{
		// $this->load->view('doc_front_view');
		$this->load->view('patient_signup');
		// $this->load->view('patient_signup');
		// $this->load->view('doc_signin');

		if($this->input->post('submit'))
		{
			$p_name=$this->input->post('p_name');
			$p_email=$this->input->post('p_email');
			$p_password=$this->input->post('p_password');
			$p_mobile=$this->input->post('p_mobile');
			$p_problem=$this->input->post('p_problem');
			$p_address=$this->input->post('p_address');
			$p_special=$this->input->post('p_special');
			$p_sex=$this->input->post('p_sex');
			$p_age=$this->input->post('p_age');
			
			
			$data=array('p_name'=>$p_name,'p_email'=>$p_email,'p_password'=>$p_password,'p_mobile'=>$p_mobile,'p_problem'=>$p_problem,'p_address'=>$p_address,'p_special'=>$p_special,'p_sex'=>$p_sex,'p_age'=>$p_age);

			$result=$this->Doc_model->saverecords($data);
			
			if ($result==true) 
			{
				redirect('Doc_cont/dispdata');
			}
			else
			{
				echo "Data Not Inserted";
			}
		}
	}

// Patient signUP ENDS here..................................................................



// ADMIN display STARTS here......CHECKED - WORKING....Edited by : Arnab (04-07-2022)........

// This setion will have both the 
// [ (doctor-display) + (patient-display) ]-table database reflection on the same page 
// along with edit and delete buttons, which admin can view, edit and delete

// It has unanimously been decided that admin won't need the use of session()...............

	// Display table of DOCTOR STARTS here..........................
	public function dispdata_admin()
	{
		$result['data']=$this->Doc_model->displayrecords_admin();
		
		if($result)
		{
			$this->load->view('doc_admin_display',$result);
		}
		else
		{
			echo "failed to display";
		}
	// Display table of DOCTOR ENDS here............................

	// Display table of PATIENT STARTS here.........................


	// Display table of PATIENT STARTS here.........................

	} // SCOPE of " public function dispdata_admin() " CLOSES here........

// ADMIN display ENDS here.................................................................
	







} // Closure tag of class Doc_cont ; DO NOT DELETE / EDIT / TAMPER...all the controller functions should be inside this curly-brace.........................................................


?>

