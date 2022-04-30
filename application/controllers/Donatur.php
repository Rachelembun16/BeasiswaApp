<?php
class Donatur extends CI_Controller{
    function __construct(){
    parent::__construct();
    $this->load->model('donatur_model');
    }

    function index(){

    }

    function daftar_siswa(){
        $this->load->model('siswa_model');
        $this->load->model('beasiswa_model');
        $this->load->model('nilai_model');
        $data['nilai'] = $this->nilai_model->get_nilai();
        $data['penerima'] = $this->beasiswa_model->getPenerima();
        $data['siswa'] = $this->siswa_model->get_siswa();
        $this->load->view('donatur/daftar_siswa', $data);
    }

    function update(){
        $id_donatur = $this->session->userdata('ses_id');
        $nama_donatur = $this->input->post('nama_donatur');
        $email = $this->input->post('email');
        $no_hp_donatur = $this->input->post('no_hp_donatur');
        $tgl_lahir_donatur = $this->input->post('tgl_lahir_donatur');
        $jenis_kelamin_donatur = $this->input->post('jenis_kelamin_donatur');
        $nama_bank = $this->input->post('nama_bank');
        $no_rekening = $this->input->post('no_rekening');
        if(!($this->donatur_model->update($id_donatur, $nama_donatur, $email, $no_hp_donatur, $tgl_lahir_donatur, $jenis_kelamin_donatur, $nama_bank, $no_rekening))){
            echo $this->session->set_flashdata('msg','Data Berhasil Disimpan.');
        }
  
        redirect('donatur/data_diri');
      }
    
    function data_diri(){
        $data['donatur'] = $this->donatur_model-> get_donatur();
        $this->load->view('donatur/data_diri',$data);
    }

    function donasi(){
        $data['donatur'] = $this->donatur_model-> get_donatur();
        $this->load->view('donatur/donasi',$data);
    }

    function simpan_donasi(){
        $this->load->model('saldo_model');
        $id_donatur = $this->session->userdata('ses_id');
        $masuk = $this->input->post('masuk');
        if(!($this->saldo_model->simpan_donasi($masuk, $id_donatur))){
            echo $this->session->set_flashdata('msg','Terima Kasih, Donasi Anda berhasil ditambahkan. Anda dapat berdonasi lagi dengan proses yang sama.');
        }
        redirect('donatur/donasi');
    }
}