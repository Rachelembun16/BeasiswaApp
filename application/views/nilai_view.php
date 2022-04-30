<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>nilai List</title>
    <!-- load bootstrap css file -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">
  </head>
  <body>
 
    <div class="container">
        <h1><center>Nilai List</center></h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Semester</th>
            <th scope="col">Kelas</th>
            <th width="200">Matematika</th>
            <th scope="col">Bahasa Inggris</th>
            <th width="200">Bahasa Indonesia</th>
            <th scope="col">Pilihan1</th>
            <th width="200">Pilihan2</th>
            <th scope="col">Pilihan3</th>
            <th width="200">Action</th>

          </tr>
        </thead>
        <?php
          $count = 0;
          foreach ($nilai->result() as $row) :
            $count++;
        ?>
          <tr>
            <th scope="row"><?php echo $count;?></th>
            <td><?php echo $row->semester;?></td>
            <td><?php echo $row->kelas;?></td>
            <td><?php echo number_format($row->math);?></td>
            <td><?php echo number_format($row->bing);?></td>
            <td><?php echo number_format($row->bindo);?></td>
            <td><?php echo number_format($row->pilihan1);?></td>
            <td><?php echo number_format($row->pilihan2);?></td>
            <td><?php echo number_format($row->pilihan3);?></td>
            <td>
                <a href="<?php echo site_url('nilai/get_edit/'.$row->id_nilai);?>" class="btn btn-sm btn-info">Update</a>
                <a href="<?php echo site_url('nilai/delete/'.$row->id_nilai);?>" class="btn btn-sm btn-danger">Delete</a>
            <td>
          </tr>
        <?php endforeach;?>
        </tbody>
      </table>
 
    </div>
 
    <!-- load jquery js file -->
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>
    <!-- load bootstrap js file -->
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script>
  </body>
</html>
