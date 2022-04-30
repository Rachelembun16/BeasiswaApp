<?php
class Sekolah_model extends CI_Model{
   
    function getSekolah()
    {
        $result = $this->db->get('sekolah');
        return $result;
    }

    function getSekolahByID($id_sekolah)
    {
        $query=$this->db->query("SELECT * FROM sekolah WHERE id_sekolah = '$id_sekolah'");
        return $query;
    }
    

    function getPasswordSekolah($id_sekolah){
        $this->db->select('password')->from('sekolah')->where('id_sekolah',$id_sekolah);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->row()->password;
        }
        return false;
    }

    function getEmailSekolah($id_sekolah){
        $this->db->select('email')->from('sekolah')->where('id_sekolah',$id_sekolah);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->row()->email;
        }
        return false;
    }

    function getNamaSekolah($id_sekolah){
        $this->db->select('nama_sekolah')->from('sekolah')->where('id_sekolah',$id_sekolah);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->row()->nama_sekolah;
        }
        return false;
    }

    function getAdminSekolah($id_sekolah){
        $this->db->select('admin_sekolah')->from('sekolah')->where('id_sekolah',$id_sekolah);
        $query = $this->db->get();
        
        if ($query->num_rows() > 0) {
            return $query->row()->admin_sekolah;
        }
        return false;
    }

    function add_sekolah($nama_sekolah, $admin_sekolah, $email, $password){
        $data = array(
          'nama_sekolah' => $nama_sekolah,
          'admin_sekolah' => $admin_sekolah,
          'email' => $email,
          'password' => $password,
        );
        $this->db->insert('sekolah',$data);
    }

    function edit_sekolah($nama_sekolah, $admin_sekolah, $email, $password, $id_sekolah){
        $data = array(
            'nama_sekolah' => $nama_sekolah,
            'admin_sekolah' => $admin_sekolah,
            'email' => $email,
            'password' => $password,
          );
          $this->db->where('id_sekolah', $id_sekolah);
          $this->db->update('sekolah', $data);
    }

    function delete_sekolah($id_sekolah){
        $this->db->where('id_sekolah', $id_sekolah);
        $this->db->delete('sekolah');
    }
}