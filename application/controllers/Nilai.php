<?php
class Nilai extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('nilai_model');
    
  }
  function index(){
    $data['nilai'] = $this->nilai_model->get_nilai();
    $this->load->view('nilai_view',$data);
  }
  function add_new(){
    $this->load->view('add_nilai_view');
  }
  function displaysave() {
    $this->load->model('siswa_model'); 
    $this->load->view('siswa/upload_nilai');
  }

  function save(){
      $this->load->model('siswa_model'); 
      $semester = $this->input->post('semester');
      $kelas = $this->input->post('kelas');
      $math = $this->input->post('math');
      $bing = $this->input->post('bing');
      $bindo = $this->input->post('bindo');
      $pilihan1 = $this->input->post('pilihan1');
      $pilihan2 = $this->input->post('pilihan2');
      $pilihan3 = $this->input->post('pilihan3');
      $id_siswa = $this->input->post('id_siswa');
      $nama_siswa = $this->session->userdata('ses_nama');
      $this->nilai_model->save($semester,$kelas,$math,$bing,$bindo,$pilihan1,$pilihan2,$pilihan3,$id_siswa, $nama_siswa);
      $id_beasiswa = $this->uri->segment(3);

    redirect('nilai/beasiswa/'.$id_beasiswa);
  }

  function beasiswa(){
    $this->load->model('beasiswa_model');
    $id_beasiswa = $this->uri->segment(3);
    $result = $this->beasiswa_model->get_beasiswa_id($id_beasiswa);
    $i = $result->row_array();
    $this->load->model('beasiswa_model');
    $this->load->model('siswa_model');
    $id_siswa = $this->input->post('id_siswa');
    $nama_siswa = $this->session->userdata('ses_nama');
    $kuota = $i['kuota'];
    $this->beasiswa_model->save_beasiswa_siswa( $id_beasiswa, $id_siswa, $kuota, $nama_siswa);
    redirect('siswa/penawaran');
  }

  function delete(){
    $nilai_id = $this->uri->segment(3);
    $this->nilai_model->delete($nilai_id);
    redirect('nilai');
}
function get_edit(){
    $nilai_id = $this->uri->segment(3);
    $result = $this->nilai_model->get_nilai_id($nilai_id);
    if($result->num_rows() > 0){
        $i = $result->row_array();
        $data = array(
            'nilai_id'    => $i['nilai_id'],
            'nilai_semester'  => $i['nilai_semester'],
            'nilai_kelas'     => $i['nilai_kelas'],
            'nilai_math'     => $i['nilai_math'],
            'nilai_bing'     => $i['nilai_bing'],
            'nilai_bindo'     => $i['nilai_bindo'],
            'nilai_pilihan1'     => $i['nilai_pilihan1'],
            'nilai_pilihan2'     => $i['nilai_pilihan2'],
            'nilai_pilihan3'     => $i['nilai_pilihan3']
        );
        $this->load->view('edit_nilai_view',$data);
    }else{
        echo "Data Was Not Found";
    }
}

function displayupdate() {
  $this->load->model('siswa_model'); 
  $this->load->view('siswa/update_nilai');
}

function update(){
    $this->load->model('siswa_model');
    $this->load->model('nilai_model');
    $id_beasiswa = $this->uri->segment(3);
    $semester = $this->input->post('semester');
    $kelas = $this->input->post('kelas');
    $math = $this->input->post('math');
    $bing = $this->input->post('bing');
    $bindo = $this->input->post('bindo');
    $pilihan1 = $this->input->post('pilihan1');
    $pilihan2 = $this->input->post('pilihan2');
    $pilihan3 = $this->input->post('pilihan3');
    $nama_siswa = $this->session->userdata('ses_nama');

    $this->nilai_model->update($semester, $kelas, $math, $bing, $bindo, $pilihan1, $pilihan2, $pilihan3, $nama_siswa);
    redirect('nilai/beasiswa/'.$id_beasiswa);
  }

}


