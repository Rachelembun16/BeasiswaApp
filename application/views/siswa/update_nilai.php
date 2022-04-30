<!DOCTYPE html>
<html lang>
  <head>
 
    <title>Upload Nilai</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/dist/libs/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" />

  </head>
  <body>
  <div class="flex-fill d-flex flex-column justify-content-center py-4">
    <div class= "container-tight py-6" id="login" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <h1><center>Input nilai</center></h1>
        <form action="<?php echo site_url('nilai/update/'.$this->uri->segment(3));?>" method="post">
          <div class="mb-3">
            <label>Semester</label>
            <input type="text" class="form-control" name="semester" value = "<?php echo $this->nilai_model->get_smt_by_name($this->session->userdata('ses_nama'));?>" placeholder="Semester">
          </div>
          <div class="mb-3">
            <label>Kelas</label>
            <input type="text" class="form-control" name="kelas" value="<?php echo $this->siswa_model->get_kelas_By_nama($this->session->userdata('ses_nama'));?>" placeholder="Kelas">
          </div>
          <div class="mb-3">
            <label>Matematika</label>
            <input type="text" class="form-control" name="math" value = "<?php echo $this->nilai_model->get_math_by_name($this->session->userdata('ses_nama'));?>"  placeholder="Matematika">
          </div>
          <div class="mb-3">
            <label>B Ingrris</label>
            <input type="text" class="form-control" name="bing" value = "<?php echo $this->nilai_model->get_bing_by_name($this->session->userdata('ses_nama'));?>"  placeholder="B Inggris">
          </div>
          <div class="mb-3">
            <label>B Indonesia</label>
            <input type="text" class="form-control" name="bindo" value = "<?php echo $this->nilai_model->get_bindo_by_name($this->session->userdata('ses_nama'));?>"  placeholder="B Indonesia">
          </div>
          <p style="color:Green;">Nilai pilihan disesuaikan dengan jurusan yang diambil.</p>
          <div class="mb-3">
            <label>Pilihan 1</label>
            <input type="text" class="form-control" name="pilihan1" value = "<?php echo $this->nilai_model->get_pilihan1_by_name($this->session->userdata('ses_nama'));?>"  placeholder="Pilihan 1">
          </div>
          <div class="mb-3">
            <label>Pilihan 2</label>
            <input type="text" class="form-control" name="pilihan2" value = "<?php echo $this->nilai_model->get_pilihan2_by_name($this->session->userdata('ses_nama'));?>"  placeholder="Pilihan 2">
          </div>
          <div class="mb-3">
            <label>Pilihan 3</label>
            <input type="text" class="form-control" name="pilihan3" value = "<?php echo $this->nilai_model->get_pilihan3_by_name($this->session->userdata('ses_nama'));?>"  placeholder="Pilihan 3">
          </div>
          <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Daftar</button>
                </div>
        </form>
      </div>
    </div>
</div>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>