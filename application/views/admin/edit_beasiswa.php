<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit Beasiswa</title>
    <!-- load bootstrap css file -->
    <link rel="stylesheet" type="text/css" href="style.css">

	<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
	<link href="<?= base_url(); ?>assets/dist/libs/jqvmap/dist/jqvmap.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" />
    
  </head>
  <body>

    <div class="container">
        <br></br>
      <h1><center>Edit Beasiswa</center></h1>
        <div class="col-md-6 offset-md-3">
        <form action="<?php echo site_url('admin/edit_beasiswa/').$this->uri->segment(3);?>" method="post">
        <div class="form-group">
            <label>Nama Beasiswa</label>
            <input type="text" class="form-control" name="nama_beasiswa" value="<?php echo $this->beasiswa_model->getNamaBeasiswa($this->uri->segment(3));?>" placeholder="Nama Beasiswa">
          </div>
          <div class="form-group">
            <label>Periode Beasiswa</label>
            <input type="text" class="form-control" name="periode_beasiswa" value="<?php echo $this->beasiswa_model->getPeriode($this->uri->segment(3));?>" placeholder="Periode Beasiswa">
          </div>
          <div class="form-group">
            <label>Kuota</label>
            <input type="text" class="form-control" name="kuota" value="<?php echo $this->beasiswa_model->getKuota($this->uri->segment(3));?>" placeholder="Kuota">
          </div>
          <div class="form-group">
            <label>Sisa Kuota</label>
            <input type="text" class="form-control" name="siswa_kuota" value="<?php echo $this->beasiswa_model->getKuota($this->uri->segment(3));?>" placeholder="Sisa Kuota">
          </div>
          <br></br>
          <button type="submit" class="btn btn-success">Ubah</button>
          <!-- <a href="<?php echo site_url("#".$this->uri->segment(3));?>" class="btn btn-danger">Hapus</a> -->


        </form>
      </div>
    </div>
 
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>
