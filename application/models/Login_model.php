<?php

class Login_Model extends CI_Model
{
	function login() {
		$username = $this->input->post('username');  //get username
    $password = md5($this->input->post('password'));  //get password
  	//the query is to matching the username+password user with username+password from database
		$q = $this->db->query("SELECT email, role, user_nama, phone, alamat  FROM user WHERE email='$username'
		AND password='$password'");
   	if ($q->num_rows() == 1) {
 			$email = $q->row()->email;
			$nama = $q->row()->user_nama;
			$nohp = $q->row()->phone;
			$alamat = $q->row()->alamat;
 			$privilege = $q ->row()->role;
    	//if the query is TRUE, then save the username into session and load the welcome view
    	$data_session = array(
        'email'  => $email,
				'nama' => $nama,
				'alamat' => $alamat,
				'nohp' => $nohp,
        'privilege' => $privilege,
	      'logged_in' => TRUE
      );
      $this->session->set_userdata($data_session);
			if ($privilege == "user") {
				redirect("home");
			} else {
				redirect("dashboard");
			}
   	} else {
    	$this->session->set_flashdata('message', 'username or password is incorrect, please try again.');
    	redirect('login');
  	}
	}
}
