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
                   Siswa
    </p>

    <a href="<?= "/beasiswa_app/index.php/admin/daftar_sekolah"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                    <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                  Sekolah
    </a>

    <a href="<?= "/beasiswa_app/index.php/admin/daftar_beasiswa"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                        <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                    Beasiswa
    </a>

    <a href="<?= "/beasiswa_app/index.php/admin/daftar_donatur"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                        <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                    Donatur
    </a>

    <a href="<?= "/beasiswa_app/index.php/admin/halaman_keuangan"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                        <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                    Keuangan
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

<div class="flex-fill d-flex justify-content-center py-4">
        <div class="container py-6">
            <div class="text-center mb-4">
              
                <h1>Daftar Siswa</h1>

                <table class="table table-striped">
                <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="200">Nama Siswa</th>
                    <th scope="col">Email</th>
                    <th width="200">No Hp</th>
                    <th scope="col">Tgl Lahir</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th width="200">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th width="col">Alamat</th>
                    <th width="200">Asal Sekolah</th>
                </tr>
            </thead>
                <?php
                    $count = 0;
                    foreach ($siswa->result() as $row) :
                        $count++;
                ?>
                <tr>
                    <th scope="row"><?php echo $count;?></th>
                    <td><?php echo $row->nama_siswa;?></td>
                    <td><?php echo $row->email;?></td>
                    <td><?php echo $row->no_hp_siswa;?></td>
                    <td><?php echo $row->tgl_lahir_siswa;?></td>
                    <td><?php echo $row->jenis_kelamin_siswa;?></td>
                    <td><?php echo $row->kelas_siswa;?></td>
                    <td><?php echo $row->jurusan_siswa;?></td>
                    <td><?php echo $row->alamat_siswa;?></td>
                    <?php $row->sekolah = $this->siswa_model->get_nama_sekolah($row->nama_siswa);?>
                    <td><?php echo $row->sekolah;?></td>
                <?php endforeach;?>
            </tbody>
      </table>
      </table>