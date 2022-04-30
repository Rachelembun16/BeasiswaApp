<!DOCTYPE html>
<html>
<head>
	<title>Beasiswa APP</title>
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
<div class="page">
<nav class="navbar navbar-dark bg-dark">
  <div class="container-xl">
    <form class="form-inline">
   <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-5 pr-md-9">
      Beasiswa APP</h1>

      <a href="<?= "page"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                    <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                  Beranda
    </a>
    <p class= "navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3" style="color:grey">
                  Data Diri
</p>

    <a href="<?= "siswa/penawaran"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                    <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                  Penawaran
    </a>
</form>

    <form class="form-inline my-3 my-lg-0"> 
    <a href="<?= base_url(); ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                    <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
          </svg>
    </a>

        <th scope="col" width="20px"><a href="<?php echo base_url().'index.php/login/logout'?>">
            <input class="btn btn-danger" type="button" id="btnadd" value="Logout" align="middle" src="" />
          	</a></th>        
    </form>
    </div> 
</nav>

<div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
              
                <h1>Data Identitas Diri</h1>
                <small class="text-muted">Lengkapi data diri <strong>dengan data yang benar!</strong></small>
            </div>
            <form action="<?php echo site_url('siswa/update');?>" method="post">
            <div class="text-center">
                    <strong style="color:Green;"><?php echo $this->session->flashdata('msg');?></strong>  
                </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input name="nama_siswa" type="text" class="form-control" value="<?php echo $this->session->userdata('ses_nama');?>" placeholder="Masukkan nama lengkap anda" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="text" class="form-control" value="<?php echo $this->siswa_model->get_email_By_nama($this->session->userdata('ses_nama'));?>" placeholder="Masukkan email anda">
                </div>
                <div class="mb-2">
                    <label class="form-label">No Hp</label>
                    <div class="input-group input-group-flat">
                        <input name="no_hp_siswa" type="text" class="form-control" value="<?php echo $this->siswa_model->get_nohp_By_nama($this->session->userdata('ses_nama'));?>" placeholder="No Hp" autocomplete="off">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Tanggal Lahir</label>
                    <div class="input-group input-group-flat">
                        <input name="tgl_lahir_siswa" type="text" class="form-control" value="<?php echo $this->siswa_model->get_tgl_By_nama($this->session->userdata('ses_nama'));?>" placeholder="Tanggal Lahir" autocomplete="off">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="input-group input-group-flat">
                        <input name="jenis_kelamin_siswa" type="text" class="form-control" value="<?php echo $this->siswa_model->get_jk_By_nama($this->session->userdata('ses_nama'));?>" placeholder="Jenis Kelamin" autocomplete="off">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Kelas</label>
                    <div class="input-group input-group-flat">
                        <input name="kelas_siswa" type="text" class="form-control" value="<?php echo $this->siswa_model->get_kelas_By_nama($this->session->userdata('ses_nama'));?>" placeholder="Kelas Siswa" autocomplete="off">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Jurusan</label>
                    <div class="input-group input-group-flat">
                        <input name="jurusan_siswa" type="text" class="form-control" value="<?php echo $this->siswa_model->get_jurusan_By_nama($this->session->userdata('ses_nama'));?>" placeholder="Jurusan" autocomplete="off">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Alamat</label>
                    <div class="input-group input-group-flat">
                        <input name="alamat_siswa" type="text" class="form-control" value="<?php echo $this->siswa_model->get_alamat_By_nama($this->session->userdata('ses_nama'));?>" placeholder="Alamat" autocomplete="off">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Asal Sekolah</label>
                        <select name="nama_sekolah" class="form-control">
                        <?php foreach ($school->result() as $row) { ?>
                        <option <?php if($row->nama_sekolah == $this->siswa_model->get_nama_sekolah($this->session->userdata('ses_nama'))){ 
                            echo 'selected="selected"'; 
                            } 
                            ?>>
                            <?php echo $row->nama_sekolah?> </option>
                        <?php } ?>
                    </select> 
                </div>
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </div>
            </div>
        </div>
    </div>