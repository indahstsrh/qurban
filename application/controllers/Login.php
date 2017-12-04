<?php

class Login extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->model("Login_model");
	}

	function index() {
		if ($this->session->userdata('logged_in') == TRUE) {
        	redirect('home');
    }
		$this->load->view("form/header");
		$this->load->view("form/login");
		$this->load->view("form/footer");
	}

	function auth() {
		$this->Login_model->login();
	}

	function logout() {
		$this->session->sess_destroy();
    	redirect('home');
	}
}
