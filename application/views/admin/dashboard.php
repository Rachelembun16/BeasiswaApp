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

<br></br>
<div class="container">
        <div class="text-center mb-4">
          <h1>Selamat Datang <?php echo $this->session->userdata('ses_nama');?></h1>
        </div>
      </div>

<div class="container-xl">
  <form class="form-inline">
  <div class="card-group">
  <div class="container px-4">
  <div class="row gx-5">
    <div class="col">
     <div class="p-3 border bg-light">
        <div class="card">
        <h5 class="card-header">Siswa</h5>
        <div class="card-body">
          <h5 class="card-title">Daftar Siswa yang Terdaftar</h5>
          <p class="card-text">Daftar seluruh siswa yang terdaftar dalam sistem.</p>
          <a href="<?php echo site_url('admin/daftar_siswa');?>" class="btn btn-primary">Daftar Siswa</a>
        </div>
      </div>
     </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">
        <div class="card">
        <h5 class="card-header">Sekolah</h5>
        <div class="card-body">
          <h5 class="card-title">Daftar Sekolah</h5>
          <p class="card-text">Lihat dan tambah daftar sekolah yang terdaftar dalam sistem.</p>
          <a href="<?php echo site_url('admin/daftar_sekolah');?>" class="btn btn-primary">Daftar Sekolah</a>
        </div>
      </div>
    </div>
  </div>
</div> 
  </div>
</div>
</form>
</div>

<br></br>

<div class="container-xl">
  <form class="form-inline">
  <div class="card-group">
  <div class="container px-4">
  <div class="row gx-5">
  <div class="col">
      <div class="p-3 border bg-light">
        <div class="card">
        <h5 class="card-header">Beasiswa</h5>
        <div class="card-body">
          <h5 class="card-title">Daftar Beasiswa</h5>
          <p class="card-text">Lihat dan tambah daftar beasiswa yang terdaftar dalam sistem.</p>
          <a href="<?php echo site_url('admin/daftar_beasiswa');?>" class="btn btn-primary">Daftar Beasiswa</a>
        </div>
      </div>
    </div>
    </div>
    <div class="col">
      <div class="p-3 border bg-light">
        <div class="card">
        <h5 class="card-header">Donatur</h5>
        <div class="card-body">
          <h5 class="card-title">Daftar Donatur</h5>
          <p class="card-text">Daftar seluruh siswa yang terdaftar dalam sistem</p>
          <a href="<?php echo site_url('admin/daftar_donatur');?>" class="btn btn-primary">Daftar Donatur</a>
        </div>
      </div>
    </div>
    </div>

    <div class="col">
      <div class="p-3 border bg-light">
        <div class="card">
        <h5 class="card-header">Keuangan</h5>
        <div class="card-body">
          <h5 class="card-title">Data Keuangan</h5>
          <p class="card-text">Daftar seluruh transaksi uang masuk dan keluar.</p>
          <a href="<?php echo site_url('admin/halaman_keuangan');?>" class="btn btn-primary">Keuangan</a>
        </div>
      </div>
    </div>
    </div>
</div> 
  </div>
</div>


