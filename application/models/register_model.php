<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	public function create_siswa($username, $email, $password) {
		$this->load->database();
		$data = array(
			'nama_siswa'   => $username,
			'email'      => $email,
			'password'   => md5($password),
			'created_at' => date('Y-m-j H:i:s'),
		);
		
		return $this->db->insert('siswa', $data);
		
	}

	public function create_donatur($username, $email, $password) {
		$this->load->database();
		$data = array(
			'nama_donatur'   => $username,
			'email'      => $email,
			'password'   => md5($password),
			'created_at' => date('Y-m-j H:i:s'),
		);
		
		return $this->db->insert('donatur', $data);
		
	}

	public function getIdByName($nama_sekolah){

		$this->db->select('id_sekolah')->from('sekolah')->where('nama_sekolah',$nama_sekolah);
		$query = $this->db->get();
		
		if ($query->num_rows() > 0) {
			return $query->row()->id_sekolah;
		}
		return false;
	}
	
	public function verify_password_hash($password, $hash) {
		
		return password_verify($password, $hash);
		
	}
	
}