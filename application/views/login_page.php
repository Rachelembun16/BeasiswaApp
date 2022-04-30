<!DOCTYPE html>
<html>
  <head>
    <title>Beasiswa APP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap -->
    <link href="<?php echo base_url().'assets/css/bootstrap.css'?>" rel="stylesheet">
    <link href="<?= base_url(); ?>assets/dist/css/tabler.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-flags.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-payments.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/tabler-vendors.min.css" rel="stylesheet" />
    <link href="<?= base_url(); ?>assets/dist/css/demo.min.css" rel="stylesheet" />
  </head>
  <body>
     <div class="flex-fill d-flex flex-column justify-content-center py-4">
        <div class="container-tight py-6">
        <form class="form-signup" action="<?php echo base_url().'index.php/login/auth'?>" method="post">
         
        <div class="text-center mb-4">
              
                <h1>BeasiswaKu</h1>
                <small class="text-muted">kita bisa <strong>dengan kesempatan yang sama</strong></small>
            </div>
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Silahkan masuk ke akun anda</h2>
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input name="username" type="text" class="form-control" placeholder="Masukkan email anda">
                </div>
                <div class="mb-2">
                    <label class="form-label">Password</label>
                    <div class="input-group input-group-flat">
                        <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="off">
                    </div>
                </div>
              
                <div class="form-footer">
                    <button type="submit" class="btn btn-primary w-100">Masuk</button>
                </div>

                
            <div class="text-center text-muted mt">
                Belum memiliki akun? <a href="<?= base_url("index.php/register/register_landing"); ?>" tabindex="-1">Daftar</a>
            </div>
            <div class="text-center">
                    <strong style="color:Red;"><?php echo $this->session->flashdata('msg');?></strong>  
            </div>
        </div>
    </div>
 
 
    <!-- jQuery-->
    <script src="<?= base_url(); ?>assets/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Tabler Core -->
    <script src="<?= base_url(); ?>assets/dist/js/tabler.min.js"></script>
 
  </body>
</html>