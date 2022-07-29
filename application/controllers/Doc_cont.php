<?php

class Doc_cont extends CI_Controller{


	// ============================ CONSTRUCTOR ================================
	public function __construct()
	{
		parent::__construct(); // default constructor
		$this->load->model('Doc_model'); // Model import
		$this->load->library('session');
		// $this->load->helper('url'); // Loading url helper
	}
	// ============================ CONSTRUCTOR =================================






	// ========================= LOAD THE FIRST PAGE =======================
	function index(){
		// this is where the whole system starts, run this function to start
		$this->load->view('doc_front_view');
		
	}
	// ============================ LOAD THE FIRST PAGE ====================








	// ======================== DOCTOR STARTS ===============================

	// Doctor signUP STARTS here...CHECKED - WORKING....Edited by : Arnab (04-07-2022)..

	public function savedata_doctor()
	{
		// $this->load->view('doc_front_view');
		// $this->load->view('patient_signup');
		// $this->load->view('doc_signin');

		$this->load->view('doctor/doc_signup');

		// $this->load->view('doc_admin_display');

		if ($this->input->post('submit')) {
			$d_name = $this->input->post('d_name');
			$d_email = $this->input->post('d_email');
			$d_password = $this->input->post('d_password');
			$d_mobile = $this->input->post('d_mobile');
			$d_alt_mobile = $this->input->post('d_alt_mobile');
			$d_address = $this->input->post('d_address');
			$d_special = $this->input->post('d_special');
			$d_sex = $this->input->post('d_sex');
			$d_language = implode(",", $this->input->post('d_language'));

			$img1 = $_FILES['d_image']['name'];
			$new_img1 = rand(1111, 9988) . '_' . time() . '_' . $img1;
			$d_upload_path1 = 'upload/doctor/d_upload_image/' . $new_img1;
			$d_source_path1 = $_FILES['d_image']['tmp_name'];

			move_uploaded_file($d_source_path1, $d_upload_path1);

			$img2 = $_FILES['d_aadhar']['name'];
			$new_img2 = rand(1111, 9988) . '_' . time() . '_' . $img2;
			$d_upload_path2 = 'upload/doctor/d_upload_aadhar/' . $new_img2;
			$d_source_path2 = $_FILES['d_aadhar']['tmp_name'];

			move_uploaded_file($d_source_path2, $d_upload_path2);

			$img3 = $_FILES['d_pan']['name'];
			$new_img3 = rand(1111, 9988) . '_' . time() . '_' . $img3;
			$d_upload_path3 = 'upload/doctor/d_upload_pan/' . $new_img3;
			$d_source_path3 = $_FILES['d_pan']['tmp_name'];

			move_uploaded_file($d_source_path3, $d_upload_path3);

			$img4 = $_FILES['d_reg_cer']['name'];
			$new_img4 = rand(1111, 9988) . '_' . time() . '_' . $img4;
			$d_upload_path4 = 'upload/doctor/d_upload_reg_cer/' . $new_img4;
			$d_source_path4 = $_FILES['d_reg_cer']['tmp_name'];

			move_uploaded_file($d_source_path4, $d_upload_path4);

			$data = array('d_name' => $d_name, 'd_email' => $d_email, 'd_password' => $d_password, 'd_mobile' => $d_mobile, 'd_alt_mobile' => $d_alt_mobile, 'd_address' => $d_address, 'd_special' => $d_special, 'd_sex' => $d_sex, 'd_language' => $d_language, 'd_image' => $d_upload_path1, 'd_aadhar' => $d_upload_path2, 'd_pan' => $d_upload_path3, 'd_reg_cer' => $d_upload_path4);

			$result = $this->Doc_model->doc_saverecords($data);
			if ($result == true) {
				redirect('Doc_cont/login_doctor');
			} else {
				echo "Data Not Inserted";
			}
		}
	} // SCOPE of " public function savedata_doctor() " CLOSES here........

	// Doctor signUP ENDS here..........................................

	// Doctor Login STARTS here..........EDITED by Arnab on 08-07-2022 ..........

	public function login_doctor(){
	
		$this->load->view('doctor/doc_signin');

		$email = $this->input->post('doc_email');
		$password = $this->input->post('doc_password');

		if ($email != null && $password != null) {
			$user = $this->Doc_model->doc_login($email,$password);

			if ($user->num_rows()>0) {
				$d = $user->result_array();
				$this->session->set_userdata('userdata',$d[0]);

				return redirect('Doc_cont/dispdata_doctor');
			} else {
				echo '<p>Wrong User Name Or Password <br> Try Again</p>';
			}
		}
		
	} // logout function is at the end of controller page

	// doctor login ENDS here.............................................

	// Doctor display STARTS here..........................................

	public function dispdata_doctor(){
	
		$result['data'] = $this->Doc_model->displayrecords_doctor();

		if ($result) {
			$this->load->view('doctor/dashboard_doc', $result);
		} else {
			echo "failed to display";
		}
	} // SCOPE of " public function dispdata_doctor() " CLOSES here........ 

	// Doctor display ENDS here...............................................










	// ADD ALL DOCTOR RELATED FUNCTIONS ABOVE THIS LINE---------------------------
	// ========================= DOCTOR ENDS ==================================












	// ========================= PATIENT STARTS ==========================

	// Patient signUP STARTS here..Edited by - Koustav then Arnab (04-07-2022)..~ OK ~..


	public function display_doctor_patient_pov(){
	
		$result['data'] = $this->Doc_model->displayrecords_doctor();

		if ($result) {
			$this->load->view('doctor/doc_doctor_display', $result);
		} else {
			echo "failed to display";
		}
	}

	public function savedata_patient(){
	
		// $this->load->view('doc_front_view');
		$this->load->view('patient/patient_signup');
		// $this->load->view('patient_signup');
		// $this->load->view('doc_signin');

		if ($this->input->post('submit')) {
			$p_name = $this->input->post('p_name');
			$p_email = $this->input->post('p_email');
			$p_password = $this->input->post('p_password');
			$p_mobile = $this->input->post('p_mobile');
			$p_problem = $this->input->post('p_problem');
			$p_address = $this->input->post('p_address');
			$p_special = $this->input->post('p_special');
			$p_sex = $this->input->post('p_sex');
			$p_age = $this->input->post('p_age');


			$data = array('p_name' => $p_name, 'p_email' => $p_email, 'p_password' => $p_password, 'p_mobile' => $p_mobile, 'p_problem' => $p_problem, 'p_address' => $p_address, 'p_special' => $p_special, 'p_sex' => $p_sex, 'p_age' => $p_age);

			$result = $this->Doc_model->patient_saverecords($data);

			if ($result == true) {
				redirect('Doc_cont/dispdata_patient');
			} else {
				echo "Data Not Inserted";
			}
		}
	}

	// Patient signUP ENDS here.........................................

	// Patient signIN STARTS here.......................................

	public function login_patient(){
	
		$this->load->view('patient/patient_login');

		$email = $this->input->post('patient_email');
		$password = $this->input->post('patient_password');

		if ($email != null && $password != null) {
			$user = $this->Doc_model->patient_login($email,$password);

			if ($user->num_rows()>0) {
				$p = $user->result_array();
				$this->session->set_userdata('userdata',$p[0]);

				return redirect('Doc_cont/display_patient_dashboard');
			} else {
				echo '<p>Wrong User Name Or Password <br> Try Again</p>';
			}
		}
		
	} // logout function is at the end of controller page

	// Patient signIN ENDS here.......................................


	// Patient display STARTS here.....................................

	public function dispdata_patient(){ // after signUP patient gets redirected here to see if they have successfully registered or not.
	
		$result['data'] = $this->Doc_model->displayrecords_patient();

		if ($result) {
			$this->load->view('patient/doc_patient_display', $result);
		} else {
			echo "failed to display";
		}
	}  

	public function display_patient_dashboard(){ // after logIN patient gets redirected here to view dashboard through this function

		$result['data'] = $this->Doc_model->displayrecords_patient();

		if ($result) {
			$this->load->view('patient/dashboard_patient', $result);
		} else {
			echo "failed to display";
		}
	}

	// Patient display ENDS here......................................

	public function book_appointment(){ // patient books appointment through this function

		$result['data'] = $this->Doc_model->displayrecords_doctor();

		if ($result) {
			$this->load->view('patient/book_appointment', $result);
		} else {
			echo "failed to display";
		}

	}







	// ADD ALL PATIENT RELATED FUNCTIONS ABOVE THIS LINE-----------------
	// =================== PATIENT ENDS =================================









	// ======================= ADMIN STARTS ==============================

	// ADMIN display STARTS here...CHECKED - WORKING....Edited by : Arnab (04-07-2022)..

	// This setion will have both the 
	// [ (doctor-display) + (patient-display) ]-table database reflection on the same page 
	// along with edit and delete buttons, which admin can view, edit and delete

	// It has unanimously been decided that admin won't need the use of session().....

	// Display table of DOCTOR STARTS here..........................
	public function dispdata_admin()
	{
		$result['data'] = $this->Doc_model->displayrecords_admin();

		if ($result) {
			$this->load->view('admin/doc_admin_display', $result);
		} else {
			echo "failed to display";
		}
		// Display table of DOCTOR ENDS here............................


		// Display table of PATIENT STARTS here.........................


		// Display table of PATIENT ENDS here.........................


	} // SCOPE of " public function dispdata_admin() " CLOSES here........

	// ADMIN display ENDS here...........................................


	//Edit table of DOCTOR_ADMIN-POV STARTS HERE......................................


	public function updatedata_admin()
	{
		$d_id = $this->input->get('d_id');
		$result['data'] = $this->Doc_model->doc_displayrecordsById($d_id);
		if ($result) {
			$this->load->view('doctor/doc_edit', $result);
		}
		if ($this->input->post('update'))   //update is from submit name
		{
			$d_name = $this->input->post('d_name');
			$d_email = $this->input->post('d_email');
			$d_password = $this->input->post('d_password');
			$d_mobile = $this->input->post('d_mobile');
			$d_alt_mobile = $this->input->post('d_alt_mobile');
			$d_address = $this->input->post('d_address');
			$d_special = $this->input->post('d_special');
			$d_sex = $this->input->post('d_sex');
			$d_language = implode(",", $this->input->post('d_language'));

			$img1 = $_FILES['d_image']['name'];
			$new_img1 = rand(1111, 9988) . '_' . time() . '_' . $img1;
			$d_upload_path1 = 'upload/doctor/d_upload_image/' . $new_img1;
			$d_source_path1 = $_FILES['d_image']['tmp_name'];

			move_uploaded_file($d_source_path1, $d_upload_path1);

			$img2 = $_FILES['d_aadhar']['name'];
			$new_img2 = rand(1111, 9988) . '_' . time() . '_' . $img2;
			$d_upload_path2 = 'upload/doctor/d_upload_aadhar/' . $new_img2;
			$d_source_path2 = $_FILES['d_aadhar']['tmp_name'];

			move_uploaded_file($d_source_path2, $d_upload_path2);

			$img3 = $_FILES['d_pan']['name'];
			$new_img3 = rand(1111, 9988) . '_' . time() . '_' . $img3;
			$d_upload_path3 = 'upload/doctor/d_upload_pan/' . $new_img3;
			$d_source_path3 = $_FILES['d_pan']['tmp_name'];

			move_uploaded_file($d_source_path3, $d_upload_path3);

			$img4 = $_FILES['d_reg_cer']['name'];
			$new_img4 = rand(1111, 9988) . '_' . time() . '_' . $img4;
			$d_upload_path4 = 'upload/doctor/d_upload_reg_cer/' . $new_img4;
			$d_source_path4 = $_FILES['d_reg_cer']['tmp_name'];

			move_uploaded_file($d_source_path4, $d_upload_path4);

			$data = array('d_name' => $d_name, 'd_email' => $d_email, 'd_password' => $d_password, 'd_mobile' => $d_mobile, 'd_alt_mobile' => $d_alt_mobile, 'd_address' => $d_address, 'd_special' => $d_special, 'd_sex' => $d_sex, 'd_language' => $d_language, 'd_image' => $d_upload_path1, 'd_aadhar' => $d_upload_path2, 'd_pan' => $d_upload_path3, 'd_reg_cer' => $d_upload_path4);


			$result = $this->Doc_model->doc_updaterecords($data, $d_id);
			if ($result == true) {
				redirect('Doc_cont/dispdata_doctor'); //Change dispdata
			} else {
				echo "Data Not Updated";
			}
		}
	} // scope of public function updatedata_admin() ENDS HERE ............


	// ....................	LOGOUT WORKING ...... DO NOT TAMPER ............

	public function logout(){ // common logOUT function to be used by all users

		$this->session->unset_userdata('userdata');

		return redirect('Doc_cont/index');
	}

	// ...................	LOGOUT WORKING ....... DO NOT TAMPER ..........







	// ADD ALL PATIENT RELATED FUNCTIONS from ADMIN POV ABOVE THIS LINE--------
	// ========================== ADMIN ENDS =================================






} // Closure tag of class Doc_cont ; DO NOT DELETE / EDIT / TAMPER...all the controller functions should be inside this curly-brace..................................
