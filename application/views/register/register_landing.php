<!DOCTYPE html>
<html>
<head>
	<title>Beasiswa APP</title>
	<link rel="stylesheet" type="text/css" href="style.css">

	<link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
</head>
<body class="antialiased border-top-wide border-primary d-flex flex-column">
	<link href="<?= base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" />
	
	<div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
            <div class="text-center mb-4">
                <!-- <a href="."><img src="<?= base_url(); ?>assets/static/logo.svg" height="36" alt=""></a> -->
                <h1>Daftar Sebagai?</h1>
            </div>

			<div class="form-footer">
				<th scope="col" width="20px"><a href="<?= site_url('register/register_siswa') ?>">
                    <input type="button" value="SISWA" class="btn btn-primary w-100"></input>
			</a></th>
			</div>

			<div class="form-footer">
				<th scope="col" width="20px"><a href="<?= site_url('register/register_donatur') ?>">
                    <input type="button" value="DONATUR" class="btn btn-primary w-100"></input>
			</a></th>
			</div>
</div>
</div>
 
	<script src="<?= base_url(); ?>assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tabler Core -->
    <script src="<?= base_url(); ?>assets/dist/js/tabler.min.js"></script>

</body>
</html>
