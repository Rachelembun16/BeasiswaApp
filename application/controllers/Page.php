<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
            $url=base_url();
            redirect($url);
        }
  }
 
  function index(){
    if($this->session->userdata('akses') == '1'){
        $this->load->view('admin/dashboard');
      }
    elseif($this->session->userdata('akses') == '2'){
        $this->load->view('siswa/dashboard');
      }
    elseif($this->session->userdata('akses') == '3'){
        $this->load->model('donatur_model');
        $data['donatur'] = $this->donatur_model->get_donatur();
        $this->load->view('donatur/dashboard', $data);
      }
      elseif($this->session->userdata('akses') == '4'){
        $this->load->model('siswa_model');
        $this->load->model('nilai_model');
        $this->load->model('beasiswa_model');
        $id_sekolah = $this->session->userdata('ses_id');
        $data['beasiswa'] = $this->beasiswa_model->get_beasiswa();
        $data['penerima'] = $this->beasiswa_model->get_siswa_sekolah($id_sekolah);
        $data['nilai'] = $this->nilai_model->get_nilai();
        $this->load->view('sekolah/dashboard', $data);
      }
  }
}
