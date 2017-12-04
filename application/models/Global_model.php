<?php
/**
 * global_model
 */
class global_model extends CI_Model
{
  function get_hargasapi() {
    return $this->db->get_where("hewan", array('hewan_id' => 1, ));
  }

  function get_hargakambing() {
    return $this->db->get_where("hewan", array('hewan_id' => 2, ));
  }

  function get_pequrban() {
    return $this->db->query("
      SELECT u.user_nama, u.alamat, p.hewan_id, p.tanggal, p.jumlah, p.total as harga, p.status
      from pembayaran_qurban p inner join user u
      on p.user_id = u.user_id
      where status = 'verified'
    ");
  }

  function get_allpequrban() {
    return $this->db->query("
      SELECT p.pembayaran_id, u.user_nama, u.alamat, p.hewan_id, p.tanggal, p.jumlah, p.total as harga, p.status
      from pembayaran_qurban p inner join user u
      on p.user_id = u.user_id
    ");
  }

/**
 * Proses ~
 */
  function registrasi($data) {
    $this->db->insert("user", $data);
  }

  function get_id($data) {
    return $this->db->get_where("user", array('email' => $data));
  }

  function pembayaran_qurban($data) {
    $this->db->insert("pembayaran_qurban", $data);
  }

  function get_idpembayaran($user) {
    return $this->db->get_where("pembayaran_qurban", array('user_id' => $user ));
  }

  function pequrban($data) {
    $this->db->insert("pequrban", $data);
  }

  function verifikasi($id, $data) {
    $this->db->where("pembayaran_id", $id);
    $this->db->update("pembayaran_qurban", $data);
  }
}
