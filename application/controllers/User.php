<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function _construct(){
		parent::_construct();
		if($this->session->userdata('logged_in') !== TRUE){
		redirect('Login');
	}
}

	function index(){

 		if($this->session->userdata('level')==='0'){
 			$this->load->view('user_view');
 		}else{
 			echo "Access Denied!";{
 				redirect('Login');
 			}
 		}
 	}


}
