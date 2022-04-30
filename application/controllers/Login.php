<?php
class Login extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('login_model');
    }
 
    function index(){
        $this->load->view('login_page');
    }
 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_admin=$this->login_model->auth_admin($username,$password);
        $cek_siswa=$this->login_model->auth_siswa($username,$password);
        $cek_donatur=$this->login_model->auth_donatur($username,$password);
        $cek_sekolah=$this->login_model->auth_sekolah($username,$password);

        if($cek_admin->num_rows() > 0){ //jika login sebagai admin
                $data=$cek_admin->row_array();
                $this->session->set_userdata('masuk',TRUE);
                $this->session->set_userdata('akses','1');
                $this->session->set_userdata('ses_id',$data['email']);
                $this->session->set_userdata('ses_nama',$data['email']);
                redirect('page');
 
        }elseif($cek_siswa->num_rows() > 0){ //jika login sebagai siswa
                   
                $data=$cek_siswa->row_array();
                $this->session->set_userdata('masuk',TRUE);
                $this->session->set_userdata('akses','2');
                $this->session->set_userdata('ses_id',$data['id_siswa']);
                $this->session->set_userdata('ses_nama',$data['nama_siswa']);
                redirect('page');

        }elseif($cek_donatur->num_rows() > 0){  //jika login sebagai donatur
                $data=$cek_donatur->row_array();
                $this->session->set_userdata('masuk',TRUE);
                $this->session->set_userdata('akses','3');
                $this->session->set_userdata('ses_id',$data['id_donatur']);
                $this->session->set_userdata('ses_nama',$data['nama_donatur']);
                redirect('page');

        }elseif($cek_sekolah->num_rows() > 0){  //jika login sebagai donatur
            $data=$cek_sekolah->row_array();
            $this->session->set_userdata('masuk',TRUE);
            $this->session->set_userdata('akses','4');
            $this->session->set_userdata('ses_id',$data['id_sekolah']);
            $this->session->set_userdata('ses_nama',$data['nama_sekolah']);
            redirect('page');

        }else{  // jika username dan password tidak ditemukan atau salah
                echo $this->session->set_flashdata('msg','Username Atau Password Salah');
                redirect('login');
        }
    }
 
    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }
 
}