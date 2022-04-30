<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
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
        <form action="<?php echo site_url('nilai/save/'.$this->uri->segment(3));?>" method="post">
          <div class="mb-3">
            <label>Semester</label>
            <input type="text" class="form-control" name="semester" placeholder="Semester">
          </div>
          <div class="mb-3">
            <label>Kelas</label>
            <input type="text" class="form-control" name="kelas" value="<?php echo $this->siswa_model->get_kelas_By_nama($this->session->userdata('ses_nama'));?>" placeholder="Kelas">
          </div>
          <div class="mb-3">
            <label>Matematika</label>
            <input type="text" class="form-control" name="math" placeholder="Matematika">
          </div>
          <div class="mb-3">
            <label>B Ingrris</label>
            <input type="text" class="form-control" name="bing" placeholder="B Inggris">
          </div>
          <div class="mb-3">
            <label>B Indonesia</label>
            <input type="text" class="form-control" name="bindo" placeholder="B Indonesia">
          </div>
          <p style="color:Green;">Nilai pilihan disesuaikan dengan jurusan yang diambil!</p>
          <div class="mb-3">
            <label>Pilihan 1</label>
            <input type="text" class="form-control" name="pilihan1" placeholder="Pilihan 1">
          </div>
          <div class="mb-3">
            <label>Pilihan 2</label>
            <input type="text" class="form-control" name="pilihan2" placeholder="Pilihan 2">
          </div>
          <div class="mb-3">
            <label>Pilihan 3</label>
            <input type="text" class="form-control" name="pilihan3" placeholder="Pilihan 3">
          </div>
          <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
      </div>
    </div>
</div>
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>

  </body>
</html>