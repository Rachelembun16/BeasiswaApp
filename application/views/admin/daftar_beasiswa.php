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

                    <a href="<?= "/beasiswa_app/index.php/admin/daftar_sekolah"; ?>" class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3">
                                        <!-- <img src="<?= base_url(); ?>assets/static/logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image"> -->
                                    Sekolah
                    </a>

                    <p class= "navbar-brand navbar-brand-autodark d-none-navbar-horizontal pr-0 pr-md-3" style="color:grey">
                                Beasiswa
                    </p>

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
            
                <h1>Daftar Beasiswa</h1> 
                <div class="container">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="200">Nama Beasiswa</th>
                                <th scope="col">Periode</th>
                                <th width="col">Sisa Kuota</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                $count = 0;
                                foreach ($beasiswa->result() as $row) :
                                    $count++;
                            ?>

                            <tr>
                                <th scope="row"><?php echo $count;?></th>
                                <td><?php echo $row->nama_beasiswa;?></td>
                                <td><?php echo $row->periode_beasiswa;?></td>
                                <td><?php echo $row->kuota;?></td>
                                <td>
                                    <a href="#ubah<?php echo $row->id_beasiswa;?>" class="btn btn-sm btn-info" data-toggle="modal">Ubah</a>
                                <td>
                            </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>
   
                    <div class="text-right">
                        <a href="#tambah" class="btn btn-success" data-toggle="modal">Tambah Beasiswa</a>
                    </div>
                </div>
           

    <div class="flex-fill d-flex justify-content-center py-4">
        <div class="container py-6">
            <div class="text-center mb-4">
            
                <h1>Daftar Pendaftar Beasiswa</h1> 

                <table class="table table-striped">
                    <div class="container">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="200">Nama Siswa</th>
                                <th scope="col">Nama Beasiswa</th>
                                <th scope="col">Rerata Nilai</th>
                                <th width="col">Detail</th>
                                <th width="col">Sisa Kuota</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($nilai->result() as $nil) :
                                endforeach;
                                
                                $count = 0;
                                foreach ($penerima->result() as $rows) :
                                    $count++;                        
                            ?>
                            <tr>
                            <th scope="row"><?php echo $count;?></th>
                            <?php $rows->nama_siswa = $this->siswa_model->getNamaByID($rows->id_siswa); ?>
                            <?php $rows->id_beasiswa = $this->beasiswa_model->getIDbySiswa($rows->id_siswa, $rows->id_beasiswa_siswa); ?>
                            <?php $rows->nama_beasiswa = $this->beasiswa_model->getNamaBeasiswa($rows->id_beasiswa); ?>
                            <?php $nil->math = $this->nilai_model->math($rows->id_siswa); ?>
                            <?php $nil->bindo = $this->nilai_model->bindo($rows->id_siswa); ?>
                            <?php $nil->bing = $this->nilai_model->bing($rows->id_siswa); ?>
                            <?php $nil->pilihan1 = $this->nilai_model->pilihan1($rows->id_siswa); ?>
                            <?php $nil->pilihan2 = $this->nilai_model->pilihan2($rows->id_siswa); ?>
                            <?php $nil->pilihan3 = $this->nilai_model->pilihan3($rows->id_siswa); ?>
                            <?php $row->kuota = $this->beasiswa_model->getKuota($rows->id_beasiswa); ?>
                            <?php $kondisi = $this->beasiswa_model->get_siswa_aktif($rows->id_siswa); ?>
                            <?php 
                                $rerata = ($nil->math + $nil->bindo + $nil->bing + $nil->pilihan1 + $nil->pilihan2 + $nil->pilihan3) / 6;
                            ?>
                            <td><?php echo $rows->nama_siswa;?></td>
                            <td><?php echo $rows->nama_beasiswa;?></td>
                            <td><?php echo $rerata;?></td>
                            <td>
                            <a href="#lihatNilai<?php echo $rows->id_siswa;?>" class="btn btn-sm btn-info" data-toggle="modal">Lihat Nilai</a>
                            </td>
                            <td><?php echo $row->kuota;?></td>
                            <td>
                            <?php if ($rows->action == "dalam seleksi") :?>
                                <button class="btn btn-sm btn-warning" disabled><?php echo $rows->action;?></button>
                            <?php elseif ($rows->action == "verified"): 
                                if ($kondisi->num_rows() == 0): ?>
                                <a href = "<?php echo site_url("admin/action/".$rows->id_beasiswa_siswa ."/" .$rows->id_beasiswa);?>" class="btn btn-sm btn-danger" ><?php echo $rows->action;?></a>
                                <?php
                        
                                else: ?>
                                    <button class="btn btn-sm btn-danger" disabled><?php echo $rows->action;?></button>
                                <?php endif ?>
                            <?php
                            elseif ($rows->action == "aktif"): ?>
                                <button class="btn btn-sm btn-info" disabled><?php echo $rows->action;?></button>
                            <?php
                            endif ?>
                            <td>
                            <?php endforeach;?>
                            
                        </tbody>
                    </div>
                </table>
                <div class="container">
                                <div class="row">
                                    <div class="col-7">
                            
                                    </div>
                                <div class="col-3">
                                    <label class="form-label" style="color:Red;">Jumlah Siswa Aktif</label>
                                </div>
                            <div class="col">
                                <input name="siswa_aktif" type="text" class="form-control" style="color:Red;" value="<?php echo $this->beasiswa_model->jumlahSiswaAktif();?>" >
                            </div>
            </div>
        </div>
    </div>

<!-- MODAL UBAH -->
<?php foreach ($beasiswa->result() as $row):?>
    <div class="modal fade" id="ubah<?php echo $row->id_beasiswa;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="col">
                <form action="<?php echo site_url('admin/edit_beasiswa');?>" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="col-12 modal-title text-center">Ubah Data Beasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button> 
                        </div>
                        <div class="modal-body">
                            <div class="text-left">
                                <input type="hidden" class="form-control" name="id_beasiswa" value="<?php echo $row->id_beasiswa;?>" placeholder="Product Name">
                                <div class="mb-3">
                                    <label class="form-label">Nama Beasiswa</label>
                                    <input type="text" class="form-control" name="nama_beasiswa" value="<?php echo $this->beasiswa_model->getNamaBeasiswa($row->id_beasiswa);?>" placeholder="Nama Beasiswa">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Periode Beasiswa</label>
                                    <input type="text" class="form-control" name="periode_beasiswa" value="<?php echo $this->beasiswa_model->getPeriode($row->id_beasiswa);?>" placeholder="Periode Beasiswa">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Sisa Kuota</label>
                                    <input type="text" class="form-control" name="kuota" value="<?php echo $this->beasiswa_model->getKuota($row->id_beasiswa);?>" placeholder="Sisa Kuota">
                                </div>
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

<!-- MODAL TAMBAH -->
    <div class="modal" id="tambah">
        <div class="modal-dialog">
            <div class="col">
                <form action="<?php echo site_url('admin/add_beasiswa');?>" method="post">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="col-12 modal-title text-center">Ubah Data Beasiswa</h5>
                            <button type="button" class="close" data-dismiss="modal">&times;</button> 
                        </div>
                        <div class="modal-body">
                            <div class="text-left">
                                <input type="hidden" class="form-control" name="id_beasiswa" placeholder="Product Name">
                                <div class="mb-3">
                                    <label class="form-label">Nama Beasiswa</label>
                                    <input type="text" class="form-control" name="nama_beasiswa" placeholder="Nama Beasiswa">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Periode Beasiswa</label>
                                    <input type="text" class="form-control" name="periode_beasiswa" placeholder="Periode Beasiswa">
                                </div>
                                <div class="mb-2">
                                    <label class="form-label">Sisa Kuota</label>
                                    <input type="text" class="form-control" name="kuota" placeholder="Sisa Kuota">
                                </div>
                            </div>
                        </div>
                        <div class="col-12 modal-footer text-center">
                            <button type="submit" class="btn btn-success">Simpan</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!-- MODAL LIHAT NILAI -->
<?php foreach ($penerima->result() as $rows):?>
<div class="modal" id="lihatNilai<?php echo $rows->id_siswa;?>" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="col">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-12 modal-title text-center">Detail Nilai</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button> 
                </div>
                <div class="modal-body">
                <table class="table table-striped">
                        <div class="container">
                            <thead>
                                <tr>
                                    <th scope="200">Nama Siswa</th>
                                    <th width="col">Matematika</th>
                                    <th scope="col">B Indonesia</th>
                                    <th scope="col">B Inggris</th>
                                    <th scope="col">Pilihan 1</th>
                                    <th scope="col">Pilihan 2</th>
                                    <th scope="col">Pilihan 3</th>
                                    <th scope="col">Rerata</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($nilai->result() as $row) :
                                endforeach;
                            ?>
                            <tr>
                            <?php $rows->nama_siswa = $this->siswa_model->getNamaByID($rows->id_siswa); ?>
                            <?php $row->math = $this->nilai_model->math($rows->id_siswa); ?>
                            <?php $row->bindo = $this->nilai_model->bindo($rows->id_siswa); ?>
                            <?php $row->bing = $this->nilai_model->bing($rows->id_siswa); ?>
                            <?php $row->pilihan1 = $this->nilai_model->pilihan1($rows->id_siswa); ?>
                            <?php $row->pilihan2 = $this->nilai_model->pilihan2($rows->id_siswa); ?>
                            <?php $row->pilihan3 = $this->nilai_model->pilihan3($rows->id_siswa); ?>
                            <?php 
                                $rerata = ($row->math + $row->bindo + $row->bing + $row->pilihan1 + $row->pilihan2 + $row->pilihan3) / 6;
                            ?>
                            <td><?php echo $rows->nama_siswa;?></td>                   
                            <td><?php echo $row->math;?></td>
                            <td><?php echo $row->bindo;?></td>
                            <td><?php echo $row->bing;?></td>
                            <td><?php echo $row->pilihan1;?></td>
                            <td><?php echo $row->pilihan2;?></td>
                            <td><?php echo $row->pilihan3;?></td>
                            <td><?php echo $rerata;?></td>
                            </tbody>
                        </div>
                    </table>
                </div>

                <div class="col-12 modal-footer text-center">
                    <a href="<?php echo site_url('admin/daftar_beasiswa/');?>" class="btn btn-primary">OK</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endforeach;?>

    </div>     
</body>
</html>
    
