<?php
class Login_model extends CI_Model{
    //cek nip dan password dosen
    function auth_admin($username,$password){
        $query=$this->db->query("SELECT * FROM admin WHERE email='$username' AND password='$password' LIMIT 1");
        return $query;
    }
 
    //cek nim dan password mahasiswa
    function auth_siswa($username,$password){
        $query=$this->db->query("SELECT * FROM siswa WHERE email='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }

    function auth_donatur($username,$password){
        $query=$this->db->query("SELECT * FROM donatur WHERE email='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }

    function auth_sekolah($username,$password){
        $query=$this->db->query("SELECT * FROM sekolah WHERE email='$username' AND password='$password' LIMIT 1");
        return $query;
    }
 
}