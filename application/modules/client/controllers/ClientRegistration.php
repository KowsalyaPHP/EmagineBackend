<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH.'modules/rest/libraries/REST_Controller.php';
class ClientRegistration extends REST_Controller {
	function __construct() {
		parent::__construct();
	}
	
	public function index_post()
	{
		//$this->load->view('welcome_message');				
		$result=array();	
		
		$this->load->model('ClientRegistration_model');
		//echo"<pre>";print_r($this->post());die();
		$result=$this->ClientRegistration_model->AddRegistrationDetails($this->post());
		$response=array('RegistrationDetails'=>$result);
		$this->response($response, 200);
	}
}
