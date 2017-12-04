<?php
/**
 * Dashboard Controller
 */
class Dashboard extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('global_model');
    if (!$this->session->userdata('logged_in') == TRUE && $this->session->userdata('privilege') == "admin") {
      redirect("dashboard");
    }
  }

  function index() {
    $data['pequrban'] = $this->global_model->get_allpequrban()->result();
    $this->load->view("dashboard", $data);
  }

  function verifikasi($id) {
    $data = array(
      'status' => 'verified'
    );
    $this->global_model->verifikasi($id, $data);
    redirect("dashboard");
  }
}
