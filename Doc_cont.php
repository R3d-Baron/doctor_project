<?php
class Doc_cont extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct(); //default constructor
		$this->load->database(); //manual database connection
		$this->load->helper('url'); //Loading url helper

		// $this->load->model(''); //Model import
	}
	

	public function savedata()
	{
		$this->load->view('doc_front_view');
		
	}

	// public function login()
	// {
	// 	$this->load->view('patientlogin');
		
	// }
}