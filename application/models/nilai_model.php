<?php
class Nilai_model extends CI_Model{
 
  function get_nilai(){
    $result = $this->db->get('nilai');
    return $result;
  }

  function save($semester,$kelas,$math,$bing,$bindo,$pilihan1,$pilihan2,$pilihan3,$id_siswa, $nama_siswa){
    $data = array(
        'semester'    => $semester,
        'kelas'       => $kelas,
        'math'        => $math,
        'bing'        => $bing,
        'bindo'       => $bindo,
        'pilihan1'    => $pilihan1,
        'pilihan2'    => $pilihan2,
        'pilihan3'    => $pilihan3,
        'id_siswa'    => $this->siswa_model->get_id_By_nama($nama_siswa),
    );
    $this->db->insert('nilai',$data);
  }

  function delete($nilai_id){
    $this->db->where('nilai_id', $nilai_id);
    $this->db->delete('nilai');
}

function get_nilai_id($nilai_id){
    $query = $this->db->get_where('nilai', array('nilai_id' => $nilai_id));
    return $query;
}

function cek_id($nama_siswa){
  $id_siswa = $this->siswa_model->get_id_By_nama($nama_siswa);
  $query=$this->db->query("SELECT * FROM nilai WHERE id_siswa = '$id_siswa' LIMIT 1");
  return $query;
}

function get_smt_by_name($nama_siswa){
  $id_siswa = $this->siswa_model->get_id_By_nama($nama_siswa);
  $this->db->select('semester')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->semester;
  }
  return false;
}

function get_math_by_name($nama_siswa){
  $id_siswa = $this->siswa_model->get_id_By_nama($nama_siswa);
  $this->db->select('math')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->math;
  }
  return false;
}

function get_bing_by_name($nama_siswa){
  $id_siswa = $this->siswa_model->get_id_By_nama($nama_siswa);
  $this->db->select('bing')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->bing;
  }
  return false;
}

function get_bindo_by_name($nama_siswa){
  $id_siswa = $this->siswa_model->get_id_By_nama($nama_siswa);
  $this->db->select('bindo')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->bindo;
  }
  return false;
}

function get_pilihan1_by_name($nama_siswa){
  $id_siswa = $this->siswa_model->get_id_By_nama($nama_siswa);
  $this->db->select('pilihan1')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->pilihan1;
  }
  return false;
}

function get_pilihan2_by_name($nama_siswa){
  $id_siswa = $this->siswa_model->get_id_By_nama($nama_siswa);
  $this->db->select('pilihan2')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->pilihan2;
  }
  return false;
}

function get_pilihan3_by_name($nama_siswa){
  $id_siswa = $this->siswa_model->get_id_By_nama($nama_siswa);
  $this->db->select('pilihan3')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->pilihan3;
  }
  return false;
}

function update($semester, $kelas, $math, $bing, $bindo, $pilihan1, $pilihan2, $pilihan3, $nama_siswa){
  $id_siswa = $this->siswa_model->get_id_By_nama($nama_siswa);
    $data = array(
      'semester' => $semester,
      'kelas' => $kelas,
      'math' => $math,
      'bing' => $bing,
      'bindo' => $bindo,
      'pilihan1' => $pilihan1,
      'pilihan2' => $pilihan2,
      'pilihan3' => $pilihan3
    );
    $this->db->where('id_siswa', $id_siswa);
    $this->db->update('nilai', $data);
}

function math($id_siswa){
  $this->db->select('math')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->math;
  }
  return false;
}

function bing($id_siswa){
  $this->db->select('bing')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->bing;
  }
  return false;
}

function bindo($id_siswa){
  $this->db->select('bindo')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->bindo;
  }
  return false;
}

function pilihan1($id_siswa){
  $this->db->select('pilihan1')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->pilihan1;
  }
  return false;
}

function pilihan2($id_siswa){
  $this->db->select('pilihan2')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->pilihan2;
  }
  return false;
}

function pilihan3($id_siswa){
  $this->db->select('pilihan3')->from('nilai')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->pilihan3;
  }
  return false;
}

}