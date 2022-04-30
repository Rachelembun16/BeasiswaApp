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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <script>
        $(document).ready(function(){
            function alignModal(){
                var modalDialog = $(this).find(".modal-dialog");
                
                // Applying the top margin on modal to align it vertically center
                modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
            }
            // Align modal when it is displayed
            $(".modal").on("shown.bs.modal", alignModal);
            
            // Align modal when user resize the window
            $(window).on("resize", function(){
                $(".modal:visible").each(alignModal);
            });   
        });
        </script>
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

                        <a href="<?= "/beasiswa_app/index.php/admin/daftar_siswa"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                                            <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                                        Siswa
                        </a>

                        <p class= "navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3" style="color:grey">
                                    Sekolah
                        </p>

                        <a href="<?= "/beasiswa_app/index.php/admin/daftar_beasiswa"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                                            <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                                        Beasiswa
                        </a>

                        <a href="<?= "/beasiswa_app/index.php/admin/daftar_donatur"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                                            <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                                        Donatur
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
                    
                        <h1>Daftar Sekolah</h1> 

                        <table class="table table-striped">
                            <div class="container">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Nama Sekolah</th>
                                            <th scope="col">Admin</th>
                                            <th width="200">Email</th>
                                            <th scope="col">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php    
                                            $count = 0;
                                            foreach ($sekolah->result() as $row) :
                                                $count++;
                                               
                                            $password = $this->sekolah_model->getPasswordSekolah($row->id_sekolah);
                                            $email = $this->sekolah_model->getEmailSekolah($row->id_sekolah);
                                        ?>
                                        <tr>
                                            <th scope="row"><?php echo $count;?></th>
                                            <td><?php echo $row->nama_sekolah;?></td>
                                            <td><?php echo $row->admin_sekolah;?></td>
                                            <td><?php echo $row->email;?></td>
                                            
                                            <td>
                                                <a href="#password<?php echo $row->id_sekolah;?>" class="btn btn-sm btn-danger" data-toggle="modal">Detail</a>
                                                <a href="#ubah<?php echo $row->id_sekolah;?>" class="btn btn-sm btn-info" data-toggle="modal">Ubah</a>
                                                
                                            <td>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </table>
            <!-- Button HTML (to Trigger Modal) -->
                        <div class="text-right">
                            <a href="#tambah" class="btn btn-primary" data-toggle="modal">Tambah Sekolah</a>
                        </div>
            
            <!-- Modal HTML -->
                        <div id="tambah" class="modal">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="col-12 modal-title text-center">Tambah Data Sekolah</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button> 
                                    </div>
                                    <div class="modal-body">
                                        <div class="text-center">
                                            <small class="text-muted">Lengkapi data sekolah <strong>dengan data yang benar!</strong></small>
                                        </div>
                                        <form action="<?php echo site_url('sekolah/add_sekolah');?>" method="post">
                                            <div class="card-body">
                                                <div class="mb-3">
                                                    <label class="form-label">Nama Sekolah</label>
                                                    <input name="nama_sekolah" type="text" class="form-control"  placeholder="Masukkan nama sekolah">
                                                </div>
                                                <div class="mb-3">
                                                    <label class="form-label">Admin Sekolah</label>
                                                    <input name="admin_sekolah" type="text" class="form-control"  placeholder="Masukkan admin dari sekolah">
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">Email</label>
                                                    <div class="input-group input-group-flat">
                                                        <input name="email" type="text" class="form-control" placeholder="Email Sekolah">
                                                    </div>
                                                </div>
                                                <div class="mb-2">
                                                    <label class="form-label">Password</label>
                                                    <div class="input-group input-group-flat">
                                                        <input name="password" type="text" class="form-control" placeholder="Password untuk Login">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php
                        foreach ($sekolah->result() as $row):?>

                        <div class="modal fade" id="password<?php echo $row->id_sekolah;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="col-12 modal-title text-center">Lupa Password</h5>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button> 
                                    </div>
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input class="form-control" type="text" class="form-control" name="email" value="<?php echo $this->sekolah_model->getEmailSekolah($row->id_sekolah);;?>" placeholder="Product Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="text" class="form-control" name="password" value="<?php echo $this->sekolah_model->getPasswordSekolah($row->id_sekolah);?>" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-12 modal-footer text-center">
                                        <a href="<?php echo site_url("admin/daftar_sekolah");?>" class="btn btn-success">OK </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>

                        <?php foreach ($sekolah->result() as $row):?>
                        <div class="modal fade" id="ubah<?php echo $row->id_sekolah;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="col">
                                    <form action="<?php echo site_url('admin/edit_sekolah');?>" method="post">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="col-12 modal-title text-center">Ubah Data Sekolah</h5>
                                                <button type="button" class="close" data-dismiss="modal">&times;</button> 
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">
                                                <input type="hidden" class="form-control" name="id_sekolah" value="<?php echo $row->id_sekolah;?>" placeholder="Product Name">
                                                    <label>Nama Sekolah</label>
                                                    <input type="text" class="form-control" name="nama_sekolah" value="<?php echo $this->sekolah_model->getNamaSekolah($row->id_sekolah);?>" placeholder="Product Name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Admin Sekolah</label>
                                                    <input type="text" class="form-control" name="admin_sekolah" value="<?php echo $this->sekolah_model->getAdminSekolah($row->id_sekolah);?>" placeholder="Product Name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Email</label>
                                                    <input type="text" class="form-control" name="email" value="<?php echo $this->sekolah_model->getEmailSekolah($row->id_sekolah);?>" placeholder="Product Name">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="text" class="form-control" name="password" value="<?php echo $this->sekolah_model->getPasswordSekolah($row->id_sekolah);?>" placeholder="Password">
                                                </div>
                                            </div>
                                            <div class="col-12 modal-footer text-center">
                                                <button type="submit" class="btn btn-success">Ubah</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <?php endforeach;?>
    </div>     
</body>
</html>