<?php
class Sekolah extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('sekolah_model');
        
    }
    function index(){

    }

    function add_sekolah(){
        $this->load->model('sekolah_model');
        $nama_sekolah = $this->input->post('nama_sekolah');
        $admin_sekolah = $this->input->post('admin_sekolah');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
    
        $this->sekolah_model->add_sekolah($nama_sekolah,$admin_sekolah,$email,$password);
        redirect('admin/daftar_sekolah');
    }

    function action(){
        $this->load->model('beasiswa_model');
        $id_siswa= $this->uri->segment(3);
        $this->beasiswa_model->verified_action($id_siswa);
        redirect('page');
    }
}