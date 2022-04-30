<?php
class Beasiswa_model extends CI_Model{

  function get_beasiswa(){
    $result = $this->db->get('beasiswa');
    return $result;
  }

  function get_penerima(){
    $result = $this->db->get('beasiswa_siswa');
    return $result;
  }

  function getPenerima(){
    $result = $this->db->query("SELECT * FROM beasiswa_siswa WHERE action = 'aktif'");
    return $result;
  }

  function get_beasiswa_id($id_beasiswa){
    $query = $this->db->get_where('beasiswa', array('id_beasiswa' => $id_beasiswa));
    return $query;
}

function save_beasiswa_siswa($id_beasiswa, $id_siswa, $kuota, $nama_siswa){
    $data = array(
        'id_beasiswa' => $id_beasiswa,
        'id_siswa' => $this->siswa_model->get_id_By_nama($nama_siswa),
        'action' => 'dalam seleksi',
    );
    $this->db->insert('beasiswa_siswa',$data);
}

function add_beasiswa($nama_beasiswa,$periode_beasiswa,$kuota){
  $data = array(
      'nama_beasiswa' => $nama_beasiswa,
      'periode_beasiswa' => $periode_beasiswa,
      'kuota' => $kuota,
  );
  $this->db->insert('beasiswa',$data);
}

function get_id_beasiswa($nama_beasiswa){
  $this->db->select('id_beasiswa')->from('beasiswa')->where('nama_beasiswa',$nama_beasiswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->id_beasiswa;
  }
  return false;
}

function getIdBeasiswa(){
  $this->db->select('id_beasiswa')->from('beasiswa_siswa');
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->id_beasiswa;
  }
  return false;
}

function get_siswa_aktif($id_siswa){
  $query=$this->db->query("SELECT * FROM beasiswa_siswa WHERE id_siswa='$id_siswa' AND action = 'aktif'");
  return $query;
}

function get_siswa_sekolah($id_sekolah){
  $query=$this->db->query("SELECT beasiswa_siswa.* FROM beasiswa_siswa INNER JOIN siswa ON beasiswa_siswa.id_siswa = siswa.id_siswa WHERE siswa.id_sekolah='$id_sekolah' group by beasiswa_siswa.id_siswa");
  return $query;
}

function get_id_siswa($nama_beasiswa){
  $this->db->select('id_beasiswa')->from('beasiswa')->where('nama_beasiswa',$nama_beasiswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->id_beasiswa;
  }
  return false;
}

function getIdSiswa(){
  $this->db->select('id_siswa')->from('beasiswa_siswa');
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->id_siswa;
  }
  return false;
}

function getNamaBeasiswa($id_beasiswa){
  $this->db->select('nama_beasiswa')->from('beasiswa')->where('id_beasiswa',$id_beasiswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
      return $query->row()->nama_beasiswa;
  }
  return false;
}

function getPeriode($id_beasiswa){
  $this->db->select('periode_beasiswa')->from('beasiswa')->where('id_beasiswa',$id_beasiswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
      return $query->row()->periode_beasiswa;
  }
  return false;
}

function getKuota($id_beasiswa){
  $this->db->select('kuota')->from('beasiswa')->where('id_beasiswa',$id_beasiswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
      return $query->row()->kuota;
  }
  return false;
}

function get_action($nama_siswa){
  $id_siswa = $this->siswa_model->get_id_By_nama($nama_siswa);
  $this->db->select('action')->from('beasiswa_siswa')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->action;
  }
  return false;
}

function getAction($id_siswa, $id_beasiswa){
  $query = $this->db->query("SELECT action FROM beasiswa_siswa WHERE id_siswa='$id_siswa' AND id_beasiswa='$id_beasiswa' LIMIT 1");
 
  
  if ($query->num_rows() > 0) {
    return $query->row()->action;
  }
  return false;
}

function getIDbySiswa($id_siswa, $id_beasiswa_siswa){
  $array = array('id_siswa' => $id_siswa, 'id_beasiswa_siswa' => $id_beasiswa_siswa);
  $this->db->select('id_beasiswa')->from('beasiswa_siswa')->where($array);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->id_beasiswa;
  }
  else{
    return false;
  }

}


function get_beasiswa_bysiswa($nama_siswa, $id_beasiswa){
  $id_siswa = $this->siswa_model->get_id_By_nama($nama_siswa);
  $query=$this->db->query("SELECT * FROM beasiswa_siswa WHERE id_siswa='$id_siswa' AND id_beasiswa LIKE '$id_beasiswa' LIMIT 1");
  return $query;
}

function edit_beasiswa($nama_beasiswa, $periode_beasiswa, $kuota, $id_beasiswa){
  $data = array(
      'nama_beasiswa' => $nama_beasiswa,
      'periode_beasiswa' => $periode_beasiswa,
      'kuota' => $kuota,
    );
    $this->db->where('id_beasiswa', $id_beasiswa);
    $this->db->update('beasiswa', $data);
}

function update_action($id_beasiswa_siswa, $id_beasiswa){
  $sisa_kuota = ($this->beasiswa_model->getKuota($id_beasiswa)) - 1;
  $data = array(
    'action' => 'aktif'
  );

  $data1 = array(
    'kuota' => $sisa_kuota
  );

  $this->db->where('id_beasiswa_siswa', $id_beasiswa_siswa);
  $this->db->update('beasiswa_siswa', $data);
  $this->db->where('id_beasiswa', $id_beasiswa);
  $this->db->update('beasiswa', $data1);
}

function verified_action($id_siswa){
  $data = array(
    'action' => 'verified'
  );

  $this->db->where('id_siswa', $id_siswa);
  $this->db->update('beasiswa_siswa', $data);
}

function jumlahSiswaAktif(){
  $query= $this->db->query("SELECT count(id_siswa) as total FROM beasiswa_siswa WHERE action = 'aktif'");
 ;
  return $query->row()->total;
}
}
    