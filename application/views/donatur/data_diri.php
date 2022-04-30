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

        <a href="<?= "/beasiswa_app/index.php/page"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                    <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                  Beranda
        </a>
        <p class= "navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3" style="color:grey">
                    Data Diri
        </p>

        <a href="<?= "/beasiswa_app/index.php/donatur/daftar_siswa"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                        <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                    Daftar Siswa
        </a>

        <a href="<?= "/beasiswa_app/index.php/donatur/donasi"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                        <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                    Donasi
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
            <form action="<?php echo site_url('donatur/update');?>" method="post">
            <div class="text-center">
                    <strong style="color:Green;"><?php echo $this->session->flashdata('msg');?></strong>  
                </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Nama</label>
                    <input name="nama_donatur" type="text" class="form-control" value="<?php echo $this->session->userdata('ses_nama');?>" placeholder="Masukkan nama lengkap anda" >
                </div>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="email" type="text" class="form-control" value="<?php echo $this->donatur_model->getEmailByID($this->session->userdata('ses_id'));?>" placeholder="Masukkan email anda">
                </div>
                <div class="mb-2">
                    <label class="form-label">No Hp</label>
                    <div class="input-group input-group-flat">
                        <input name="no_hp_donatur" type="text" class="form-control" value="<?php echo $this->donatur_model->getNoHpByID($this->session->userdata('ses_id'));?>" placeholder="No Hp" autocomplete="off">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Tanggal Lahir</label>
                    <div class="input-group input-group-flat">
                        <input name="tgl_lahir_donatur" type="text" class="form-control" value="<?php echo $this->donatur_model->getTglLahirByID($this->session->userdata('ses_id'));?>" placeholder="Tanggal Lahir" autocomplete="off">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Jenis Kelamin</label>
                    <div class="input-group input-group-flat">
                        <input name="jenis_kelamin_donatur" type="text" class="form-control" value="<?php echo $this->donatur_model->getJKByID($this->session->userdata('ses_id'));?>" placeholder="Jenis Kelamin" autocomplete="off">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">No Rekening</label>
                    <div class="input-group input-group-flat">
                        <input name="no_rekening" type="text" class="form-control" value="<?php echo $this->donatur_model->getNoRek($this->session->userdata('ses_id'));?>" placeholder="Kelas Siswa" autocomplete="off">
                    </div>
                </div>
                <div class="mb-2">
                    <label class="form-label">Nama Bank</label>
                    <div class="input-group input-group-flat">
                        <input name="nama_bank" type="text" class="form-control" value="<?php echo $this->donatur_model->getBankByID($this->session->userdata('ses_id'));?>" placeholder="Jurusan" autocomplete="off">
                    </div>
                </div>
                
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </div>
            </div>
        </div>
    </div>