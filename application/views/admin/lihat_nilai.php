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

<div class="flex-fill d-flex justify-content-center py-4">
        <div class="container py-6">
            <div class="text-center mb-4">
              
                <h1>Detail Nilai</h1> 

                <table class="table table-striped">
                <div class="container">
        <table class="table table-striped">
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
                <?php
                    $count = 0;
                    foreach ($nilai->result() as $row) :
                    endforeach;

                    foreach ($siswa->result() as $rows) :
                    endforeach;
                ?>
                <tr>
                    <?php $rows->id_siswa = $this->uri->segment(3); ?>
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
      </table>
      </table>
      <div class="text-center">
        <a href="<?php echo site_url('admin/daftar_beasiswa/');?>" class="btn btn-primary">OK</a>
    </div>
    </div>
    
