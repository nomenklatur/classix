<div class="container center">
<?php if($class): ?>
  <h2>ENJOY THE CLASS</h2>
  <?= $this->session->flashdata('message'); ?>
  <div class="row ">
  <?php 
            $warna = [
                '1'=>'bg-warning',
                '2'=>'bg-info',
                '3'=>'bg-success',
                '4'=>'bg-danger'
            ];
            $i=0;
        ?>  
  <?php foreach($class as $c): ?><?php $i++; ?> 
  <form action="" method="" class="col-sm-3  mt-sm-4 mb-sm-4 mr-sm-4 zoom">

<div class="card shadow  <?= $warna[$i]; ?> text-light" >
  <div class="card-body">
    <h5 class="card-title"><?= $c['nama_kelas']; ?></h5>
    <p class="card-text"><?= $c['deskripsi']; ?></p>

     <a href="<?= base_url('class_con/mainClass/').$c['id_kelas']; ?>" class="btn btn-dark">Enter Class</a>
  </div>
</div>
</form>
<?php if($i==4){$i=0;} ?>
<?php endforeach; ?>
</div>
  <?php endif; ?>
  <?php if(empty($class)): ?>
    <div class="container text-center">
    <h1>You Dosen't Have Class </h1><br>
    <h3>Join Class <a href=" <?= base_url('user/join'); ?>">Click- me</a></h3> 
    </div>
  <?php endif; ?>
</div>