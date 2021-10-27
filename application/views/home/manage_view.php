<div class="container center">
<?= $this->session->flashdata('message'); ?>
  <h2>Manage Your Class</h2>
  <div class="row ">
  <?php 
            $warna = [
                '1'=>'bg-warning',
                '2'=>'bg-info',
                '3'=>'bg-success',
                '4'=>'bg-primary',
                '5'=>'bg-secondary',
                '6'=>'bg-pink'
            ];
            $i=0;
        ?>  
  <?php foreach($class as $c): ?><?php $i++; ?> 
  <form action="<?= base_url('user/manageClass'); ?>" method="post" class="col-sm-5  mt-sm-4 mb-sm-4 mr-sm-4 zoom">

<div class="card shadow  <?= $warna[$i]; ?> text-light" >
  <div class="card-body">
  <a href="<?= base_url('class_con/deleteClass/').$c['id_kelas']; ?>" class="btn btn-danger shadow float-right">X</a>
    <h5 class="card-title"><?= $c['nama_kelas']; ?></h5>
    <p class="card-text"><?= $c['deskripsi']; ?></p>
    <p class="card-text">CLASS CODE : <?= $c['id_kelas']; ?></p>

    <div class="form-group">
       <input type="Text" class="form-control" name="name" value="<?= $c['nama_kelas']; ?>">
       <input type="hidden" name="id_kelas" value="<?= $c['id_kelas']; ?>">
   </div>
    <div class="form-group">
       <input type="Text" class="form-control" name="desc" value="<?= $c['deskripsi']; ?>">
   </div>
    <div class="form-group">
     <a href="<?= base_url('class_con/manageStudents/').$c['id_kelas'] ?>" class="btn btn-light shadow">Manage Students</a>
   </div>
     <button class="btn btn-dark shadow float-right">Update</button>
     </div>
    </div>
    </form>
<?php if($i==6){$i=0;} ?>
<?php endforeach; ?>
</div>
