<?php
class donatur_model extends CI_Model{

  function get_donatur(){
    $result = $this->db->get('donatur');
    return $result;
  }

  function save($donatur_name,$donatur_email,$donatur_password){
    $data = array(
      'donatur_name' => $donatur_name,
      'donatur_email' => $donatur_email,
      'donatur_password' => $donatur_password,
      'donatur_nohp' => $donatur_nohp,
      'donatur_tgllahir' => $donatur_tgllahir,
      'donatur_jk' => $donatur_jk,
      'donatur_kelas' => $donatur_kelas,
      'donatur_jurusan' =>$donatur_jurusan,
      'donatur_alamat' => $donatur_alamat
    );
    $this->db->insert('donatur',$data);
  }

  function delete($donatur_id){
    $this->db->where('donatur_id', $donatur_id);
    $this->db->delete('donatur');
}

function get_donatur_id($donatur_id){
    $query = $this->db->get_where('donatur', array('donatur_id' => $donatur_id));
    return $query;
}

function getNamaID($id_donatur){
  $this->db->select('nama_donatur')->from('donatur')->where('id_donatur', $id_donatur);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->nama_donatur;
  }
  return false;
}

function getEmailByID($id_donatur){
  $this->db->select('email')->from('donatur')->where('id_donatur', $id_donatur);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->email;
  }
  return false;
}

function getNoHpByID($id_donatur){
  $this->db->select('no_hp_donatur')->from('donatur')->where('id_donatur', $id_donatur);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->no_hp_donatur;
  }
  return false;
}

function getTglLahirByID($id_donatur){
  $this->db->select('tgl_lahir_donatur')->from('donatur')->where('id_donatur',$id_donatur);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->tgl_lahir_donatur;
  }
  return false;
}

function getJkByID($id_donatur){
  $this->db->select('jenis_kelamin_donatur')->from('donatur')->where('id_donatur',$id_donatur);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->jenis_kelamin_donatur;
  }
  return false;
}

function getBankByID($id_donatur){
  $this->db->select('nama_bank')->from('donatur')->where('id_donatur',$id_donatur);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->nama_bank;
  }
  return false;
}

function getNoRek($id_donatur){
  $this->db->select('no_rekening')->from('donatur')->where('id_donatur',$id_donatur);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->no_rekening;
  }
  return false;
}

function update($id_donatur, $nama_donatur, $email, $no_hp_donatur, $tgl_lahir_donatur, $jenis_kelamin_donatur, $nama_bank, $no_rekening){
    $data = array(
        'nama_donatur' => $nama_donatur,
        'email' => $email,
        'no_hp_donatur' => $no_hp_donatur,
        'tgl_lahir_donatur' => $tgl_lahir_donatur,
        'jenis_kelamin_donatur' => $jenis_kelamin_donatur,
        'nama_bank' => $nama_bank,
        'no_rekening' =>$no_rekening,
        'updated_at' => time(),
    );
    $this->db->where('id_donatur', $id_donatur);
    $this->db->update('donatur', $data);
}

function jumlahSiswaAktif(){
  $query= $this->db->query("SELECT count(id_siswa) as total FROM beasiswa_siswa WHERE action = 'aktif'");
 ;
  return $query->row()->total;
}
}