<?php
/**
 * Home Controller
 */
class Home extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->model('global_model');
  }

  function index() {
    $data['h_sapi'] = $this->global_model->get_hargasapi()->row();
    $data['h_kambing'] = $this->global_model->get_hargakambing()->row();
    $data['pequrban'] = $this->global_model->get_pequrban()->result();
    $this->load->view("home", $data);
  }

  function qurban($type) {
    if ($this->session->userdata('logged_in') == TRUE) {
      $data['h_sapi'] = $this->global_model->get_hargasapi()->row();
      $data['h_kambing'] = $this->global_model->get_hargakambing()->row();
      $data['jenis'] = $type;
      if ($type == "sapi" || $type == "kambing") {
        $this->load->view("form/header");
        $this->load->view("form/pemesanan", $data);
        $this->load->view("form/footer");
      } else {
        redirect("home");
      }
    } else {
      $data['h_sapi'] = $this->global_model->get_hargasapi()->row();
      $data['h_kambing'] = $this->global_model->get_hargakambing()->row();
      $data['jenis'] = $type;
      if ($type == "sapi" || $type == "kambing") {
        $this->load->view("form/header");
        $this->load->view("form/pendaftaran", $data);
        $this->load->view("form/footer");
      } else {
        redirect("home");
      }
    }
  }

  function konfirmasi() {
    if ($this->session->userdata('logged_in') == TRUE) {
      $data['registrasi'] = array(
        'email' => $this->session->userdata('email'),
        'nama_lengkap' => $this->session->userdata('nama'),
        'nohp' => $this->session->userdata('nohp'),
        'alamat' => $this->session->userdata('alamat'),
        'password' => ''
      );

      if ($this->input->post('hewan') == "kambing") {
        $data['qurban'] = array(
          'nama1' => $this->input->post("nama1"),
          'jumlah' => $this->input->post("jumlah"),
          'hewan' => "kambing",
          'harga' => $this->input->post("harga")
        );
      } else {
        $data['qurban'] = array(
          'nama1' => $this->input->post("nama1"),
          'nama2' => $this->input->post("nama2"),
          'nama3' => $this->input->post("nama3"),
          'nama4' => $this->input->post("nama4"),
          'nama5' => $this->input->post("nama5"),
          'nama6' => $this->input->post("nama6"),
          'nama7' => $this->input->post("nama7"),
          'nama8' => $this->input->post("nama8"),
          'jumlah' => $this->input->post("jumlah"),
          'hewan' => "sapi",
          'harga' => $this->input->post("harga")
        );
      }
      $this->load->view("form/konfirmasi", $data);

    } else {
      $data['registrasi'] = array(
        'email' => $this->input->post("email"),
        'password' => md5($this->input->post("password")),
        'user_nama' => $this->input->post("nama_lengkap"),
        'phone' => $this->input->post("nohp"),
        'alamat' => $this->input->post("alamat")
      );
      $this->global_model->registrasi($data['registrasi']);
      redirect(base_url().'login');
    }
  }

  function invoice() {
    if ($this->session->userdata('logged_in') == TRUE) {

    } else {
      $data['registrasi'] = array(
        'user_nama' => $this->input->post("nama"),
        'email' => $this->input->post("email"),
        'password' => md5($this->input->post("password")),
        'phone' => $this->input->post("nohp"),
        'alamat' => $this->input->post("alamat")
      );
      $this->global_model->registrasi($data['registrasi']);
    }

    $userid = $this->global_model->get_id($this->input->post("email"))->row();
    if ($this->input->post('hewan') == "kambing") {
      $data['pembayaran_qurban'] = array(
        'user_id' => $userid->user_id,
        'hewan_id' => '2',
        'jumlah' => $this->input->post("jumlah"),
        'total' => $this->input->post("total")
      );
    } else {
      $data['pembayaran_qurban'] = array(
        'user_id' => $userid->user_id,
        'hewan_id' => '1',
        'tanggal' => date('Y-m-d H:i:s'),
        'jumlah' => $this->input->post("jumlah"),
        'total' => $this->input->post("total")
      );
    }
    $this->global_model->pembayaran_qurban($data['pembayaran_qurban']);
    $pembayaranid = $this->global_model->get_idpembayaran($userid->user_id, date('Y-m-d H:i:s'))->row();
    if ($this->input->post('hewan') == "kambing") {
      $data['pequrban1'] = array(
        'pembayaran_id' => $pembayaranid->pembayaran_id,
        'nama' => $this->input->post("nama1")
      );
      $data['pequrban2'] = array(
        'pembayaran_id' => $pembayaranid->pembayaran_id,
        'nama' => $this->input->post("nama2")
      );
      $this->global_model->pequrban($data['pequrban1']);
      $this->global_model->pequrban($data['pequrban2']);
    } else {
      $data['pequrban1'] = array(
        'pembayaran_id' => $pembayaranid->pembayaran_id,
        'nama' => $this->input->post("nama1")
      );
      $data['pequrban2'] = array(
        'pembayaran_id' => $pembayaranid->pembayaran_id,
        'nama' => $this->input->post("nama2")
      );
      $data['pequrban3'] = array(
        'pembayaran_id' => $pembayaranid->pembayaran_id,
        'nama' => $this->input->post("nama3")
      );
      $data['pequrban4'] = array(
        'pembayaran_id' => $pembayaranid->pembayaran_id,
        'nama' => $this->input->post("nama4")
      );
      $data['pequrban5'] = array(
        'pembayaran_id' => $pembayaranid->pembayaran_id,
        'nama' => $this->input->post("nama5")
      );
      $data['pequrban6'] = array(
        'pembayaran_id' => $pembayaranid->pembayaran_id,
        'nama' => $this->input->post("nama6")
      );
      $data['pequrban7'] = array(
        'pembayaran_id' => $pembayaranid->pembayaran_id,
        'nama' => $this->input->post("nama7")
      );
      $this->global_model->pequrban($data['pequrban1']);
      $this->global_model->pequrban($data['pequrban2']);
      $this->global_model->pequrban($data['pequrban3']);
      $this->global_model->pequrban($data['pequrban4']);
      $this->global_model->pequrban($data['pequrban5']);
      $this->global_model->pequrban($data['pequrban6']);
      $this->global_model->pequrban($data['pequrban7']);
    }

    redirect("home");

  }
}
