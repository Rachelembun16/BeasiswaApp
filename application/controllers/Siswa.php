<?php
class Siswa extends CI_Controller{
      function __construct(){
        parent::__construct();
        $this->load->model('siswa_model');
        $this->load->model('sekolah_model');
      }

      function index(){
        $data['siswa'] = $this->siswa_model-> get_siswa();
        $data['school'] = $this->sekolah_model-> getSekolah();
        $this->load->view('siswa/data_diri',$data);
      }

      function penawaran(){
        $this->load->model('siswa_model');
        $this->load->model('beasiswa_model');
        $data['beasiswa'] = $this->beasiswa_model->get_beasiswa();
        $this->load->view('siswa/penawaran', $data);
      }

      function cek(){
        $this->load->model('siswa_model');
        $this->load->model('nilai_model');
        $id_beasiswa = $this->uri->segment(3);
        $siswa_nama = $this->session->userdata('ses_nama');
        $cek = $this->nilai_model->cek_id($siswa_nama);
        
        if ($cek->num_rows() > 0) {
          redirect('nilai/displayupdate/'.$id_beasiswa);
        }else{
          redirect('nilai/displaysave/'.$id_beasiswa);
      }
      }


      function add_new(){
        $this->load->view('add_siswa_view');
      }

      function save(){
        $nama_siswa = $this->input->post('nama_siswa');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $no_hp_siswa = $this->input->post('no_hp_siswa');
        $tgl_lahir_siswa = $this->input->post('tgl_lahir_siswa');
        $jenis_kelamin_siswa = $this->input->post('jenis_kelamin_siswa');
        $kelas_siswa = $this->input->post('kelas_siswa');
        $jurusan_siswa = $this->input->post('jurusan_siswa');
        $alamat_siswa = $this->input->post('alamaat_siswa');
        $nama_sekolah = $this->input->post('nama_sekolah');
    
        $this->siswa_model->save($nama_siswa,$email,$password,$no_hp_siswa,$tgl_lahir_siswa,$jenis_kelamin_siswa,$kelas_siswa,$jurusan_siswa,$alamat_siswa,$nama_sekolah);
        redirect('siswa');
      }

      function delete(){
        $siswa_id = $this->uri->segment(3);
        $this->siswa_model->delete($siswa_id);
        redirect('siswa');
    }

    function get_edit(){
        $siswa_id = $this->uri->segment(3);
        $siswa_nama = $this->session->userdata('ses_nama');
        $result = $this->siswa_model->get_siswa_nama($siswa_nama);
        if($result->num_rows() > 0){
            $i = $result->row_array();
            $data = array(
                'siswa_id'    => $i['siswa_id'],
                'nama_siswa'  => $i['nama_siswa'],
                'siswa_email' => $i['siswa_email'],
                'siswa_password' => $i['siswa_password'],
                'siswa_nohp' => $i['siswa_nohp'],
                'siswa_tgllahir' => $i['siswa_tgllahir'],
                'siswa_jk' => $i['siswa_jk'],
                'siswa_kelas' => $i['siswa_kelas'],
                'siswa_alamat' => $i['siswa_alamat']
            );
            $this->load->view('edit_siswa_view',$data);
        }else{
            echo "Data Was Not Found";
        }
    }

    function update(){
      $nama_siswa = $this->input->post('nama_siswa');
      $email = $this->input->post('email');
      $no_hp_siswa = $this->input->post('no_hp_siswa');
      $tgl_lahir_siswa = $this->input->post('tgl_lahir_siswa');
      $jenis_kelamin_siswa = $this->input->post('jenis_kelamin_siswa');
      $kelas_siswa = $this->input->post('kelas_siswa');
      $jurusan_siswa = $this->input->post('jurusan_siswa');
      $alamat_siswa = $this->input->post('alamat_siswa');
      $nama_sekolah = $this->input->post('nama_sekolah');

      if(!($this->siswa_model->update($nama_siswa,$email,$no_hp_siswa,$tgl_lahir_siswa,$jenis_kelamin_siswa,$kelas_siswa,$jurusan_siswa,$alamat_siswa,$nama_sekolah))){
        echo $this->session->set_flashdata('msg','Data Berhasil Disimpan.');
    }
        redirect('siswa');
    }
}