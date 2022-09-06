<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class New_rec extends CI_Controller {

 	function index(){
 
 		$this->load->view('new_rec');
 	}

 	function save(){
 		$fname = $this->input->post('fname');
 		$mname = $this->input->post('mname');
 		$lname = $this->input->post('lname');
 		$username = $this->input->post('username');
 		$email = $this->input->post('email');
 		$number = $this->input->post('number');
 		$address = $this->input->post('address');
 		$password = $this->input->post('password');
 		$data = array(
 			'fname' => $fname,
 			'mname' => $mname,
 			'lname' => $lname,
 			'username' => $username,
 			'email' => $email,
 			'number' => $email,
 			'address' => $address,
 			'password' => md5($password),
 
 		);
 		$this->db->insert('tbl_user', $data);{
 			echo"<script>alert('You have Successfully Registered!')</script>";
 		}
 		$this->load->view('login_view');
 	}


}

?>