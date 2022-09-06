<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function _construct(){
	parent:: _construct();
	if($this->session->userdata('logged_in') !== TRUE){
		redirect('Login');
	}
 }


 	function index(){
 		if($this->session->userdata('level')==='1'){
 			$this->load->view('admin_view');
 		}else{
 			echo "Access Denied!";{
 				redirect('Login');
 			}
 		}
 	}


}

?>