<?php
class Siswa_model extends CI_Model{

  function get_siswa(){
    $result = $this->db->get('siswa');
    return $result;
  }

  function save($s,$siswa_email,$siswa_password){
    $data = array(
      'nama_siswa' => $nama_siswa,
      'siswa_email' => $email,
      'siswa_password' => $password,
      'siswa_nohp' => $no_hp_siswa,
      'siswa_tgllahir' => $tgl_lahir_siswa,
      'siswa_jk' => $jenis_kelamin_siswa,
      'siswa_kelas' => $kelas_siswa,
      'siswa_jurusan' =>$jurusan_siswa,
      'siswa_alamat' => $alamat_siswa,
      'id_sekolah' => $this->siswa_model->getIdByName($nama_sekolah),
    );
    $this->db->insert('siswa',$data);
  }

  function delete($siswa_id){
    $this->db->where('siswa_id', $siswa_id);
    $this->db->delete('siswa');
}

function get_id_By_nama($nama_siswa){
  $this->db->select('id_siswa')->from('siswa')->where('nama_siswa',$nama_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->id_siswa;
  }
  return false;
}

function get_email_By_nama($nama_siswa){
  $this->db->select('email')->from('siswa')->where('nama_siswa',$nama_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->email;
  }
  return false;
}

function get_nohp_By_nama($nama_siswa){
  $this->db->select('no_hp_siswa')->from('siswa')->where('nama_siswa',$nama_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->no_hp_siswa;
  }
  return false;
}

function get_tgl_By_nama($nama_siswa){
  $this->db->select('tgl_lahir_siswa')->from('siswa')->where('nama_siswa',$nama_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->tgl_lahir_siswa;
  }
  return false;
}

function get_jk_By_nama($nama_siswa){
  $this->db->select('jenis_kelamin_siswa')->from('siswa')->where('nama_siswa',$nama_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->jenis_kelamin_siswa;
  }
  return false;
}

function get_kelas_By_nama($nama_siswa){
  $this->db->select('kelas_siswa')->from('siswa')->where('nama_siswa',$nama_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->kelas_siswa;
  }
  return false;
}

function get_jurusan_By_nama($nama_siswa){
  $this->db->select('jurusan_siswa')->from('siswa')->where('nama_siswa',$nama_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->jurusan_siswa;
  }
  return false;
}

function get_alamat_By_nama($nama_siswa){
  $this->db->select('alamat_siswa')->from('siswa')->where('nama_siswa',$nama_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->alamat_siswa;
  }
  return false;
}

public function getIdByName($nama_sekolah){
  $this->db->select('id_sekolah')->from('sekolah')->where('nama_sekolah',$nama_sekolah);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->id_sekolah;
  }
  return false;
}

public function getIdSekolah($nama_siswa){

  $this->db->select('id_sekolah')->from('siswa')->where('nama_siswa',$nama_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->id_sekolah;
  }
  return false;
}

public function getNamaByID($id_siswa){

  $this->db->select('nama_siswa')->from('siswa')->where('id_siswa',$id_siswa);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->nama_siswa;
  }
  return false;
}

public function get_nama_sekolah($nama_siswa){
  
  $ids = $this->siswa_model->getIdSekolah($nama_siswa);
  $this->db->select('nama_sekolah')->from('sekolah')->where('id_sekolah', $ids);
  $query = $this->db->get();
  
  if ($query->num_rows() > 0) {
    return $query->row()->nama_sekolah;
  }
  return false;
}

function update($nama_siswa,$email,$no_hp_siswa,$tgl_lahir_siswa,$jenis_kelamin_siswa,$kelas_siswa,$jurusan_siswa,$alamat_siswa, $nama_sekolah){
    $data = array(
      'nama_siswa' => $nama_siswa,
      'email' => $email,
      'no_hp_siswa' => $no_hp_siswa,
      'tgl_lahir_siswa' => $tgl_lahir_siswa,
      'jenis_kelamin_siswa' => $jenis_kelamin_siswa,
      'kelas_siswa' => $kelas_siswa,
      'jurusan_siswa' =>$jurusan_siswa,
      'alamat_siswa' => $alamat_siswa,
      'id_sekolah' => $this->siswa_model->getIdByName($nama_sekolah),
      'updated_at' => Time()
    );
    $this->db->where('nama_siswa', $nama_siswa);
    $this->db->update('siswa', $data);
}
}