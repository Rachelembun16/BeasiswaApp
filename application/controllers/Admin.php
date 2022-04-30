<?php
class Admin extends CI_Controller{
      function __construct(){
        parent::__construct();
        $this->load->model('siswa_model');
      }

      function index(){
      
      }

      function daftar_siswa(){
        $this->load->model('siswa_model');
        $data['siswa'] = $this->siswa_model->get_siswa();
        $this->load->view('admin/daftar_siswa', $data);
    }

    function daftar_sekolah(){
        $this->load->model('sekolah_model');
        $data['sekolah'] = $this->sekolah_model->getsekolah();
        $this->load->view('admin/daftar_sekolah', $data);
    }

    function daftar_donatur(){
        $this->load->model('donatur_model');
        $data['donatur'] = $this->donatur_model->get_donatur();
        $this->load->view('admin/daftar_donatur', $data);
    }

    function daftar_beasiswa(){
        $this->load->model('siswa_model');
        $this->load->model('nilai_model');
        $this->load->model('beasiswa_model');
        $data['beasiswa'] = $this->beasiswa_model->get_beasiswa();
        $data['penerima'] = $this->beasiswa_model->get_penerima();
        $data['nilai'] = $this->nilai_model->get_nilai();
        $this->load->view('admin/daftar_beasiswa', $data);
    }

    function halaman_keuangan(){
        $this->load->model('saldo_model');
        $this->load->model('donatur_model');
        $data['saldo'] = $this->saldo_model->get_saldo();
        $this->load->view('admin/halaman_keuangan', $data);
    }

    function ambil_saldo(){
        $this->load->model('saldo_model');
        $id_donatur = $this->session->userdata('ses_id');
        $pengirim =$this->session->userdata('ses_nama');
        $masuk = $this->input->post('masuk');

        $this->saldo_model->ambil_donasi($pengirim, $masuk, $id_donatur);
        redirect('donatur/donasi');
    }

    function lihat_sekolah(){
        $this->load->model('sekolah_model');
        $id_sekolah= $this->uri->segment(3);
        $data['sekolah'] = $this->sekolah_model->getPasswordSekolah($id_sekolah);
        $this->load->view('admin/edit_sekolah', $data);
    }

    function lihat_nilai(){
        $this->load->model('nilai_model');
        $this->load->model('siswa_model');
        $data['nilai'] = $this->nilai_model->get_nilai();
        $data['siswa'] = $this->siswa_model->get_siswa();
        $this->load->view('admin/lihat_nilai', $data);
    }

    function edit_sekolah(){
        $this->load->model('sekolah_model');
        $id_sekolah = $this->input->post('id_sekolah');
        $nama_sekolah = $this->input->post('nama_sekolah');
        $admin_sekolah = $this->input->post('admin_sekolah');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->sekolah_model->edit_sekolah($nama_sekolah, $admin_sekolah, $email, $password, $id_sekolah);
        redirect('admin/daftar_sekolah');
    }

    function delete_sekolah(){
        $this->load->model('sekolah_model');
        $id_sekolah= $this->uri->segment(3);
        $this->sekolah_model->delete_sekolah($id_sekolah);
        redirect('admin/daftar_sekolah');
    }
    

    function lihat_beasiswa(){
        $this->load->model('beasiswa_model');
        $id_sekolah= $this->uri->segment(3);
        $data['beasiswa'] = $this->beasiswa_model->get_beasiswa_id($id_sekolah);
        $this->load->view('admin/edit_beasiswa', $data);
    }

    function edit_beasiswa(){
        $this->load->model('beasiswa_model');
        $id_beasiswa= $this->input->post('id_beasiswa');
        $nama_beasiswa = $this->input->post('nama_beasiswa');
        $periode_beasiswa = $this->input->post('periode_beasiswa');
        $kuota = $this->input->post('kuota');
        $this->beasiswa_model->edit_beasiswa($nama_beasiswa, $periode_beasiswa, $kuota, $id_beasiswa);
        redirect('admin/daftar_beasiswa');
    }

    function action(){
        $this->load->model('beasiswa_model');
        $id_beasiswa_siswa= $this->uri->segment(3);
        $id_beasiswa=$this->uri->segment(4);
        $this->beasiswa_model->update_action($id_beasiswa_siswa, $id_beasiswa);
        redirect('admin/daftar_beasiswa');
    }

    function add_beasiswa(){
        $this->load->model('beasiswa_model');
        $nama_beasiswa = $this->input->post('nama_beasiswa');
        $periode_beasiswa = $this->input->post('periode_beasiswa');
        $kuota = $this->input->post('kuota');
    
        $this->beasiswa_model->add_beasiswa($nama_beasiswa,$periode_beasiswa,$kuota);
        redirect('admin/daftar_beasiswa');
    }

    function kirim_donasi(){
        $this->load->model('saldo_model');
        $this->saldo_model->ambil_donasi();
        redirect('admin/halaman_keuangan');
    }
}