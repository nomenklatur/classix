<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/forDashboard.css">
    
    <title></title>
</head>
<body>
<main>
    <div class="flex-container" style="height: 200px; overflow: hidden;">
        <div class="jumbotron box">
            <h1><?= $title ?></h1>
            <h5>Welcome, <?= $user['nama'] ?></h5>
        </div>
    </div>
    <div class="flex-container">
    <?php if($class): ?>
    <div class="jumbotron box forImage"></div>
  
  <?php 
            $warna = [
                '1'=>'bg-warning',
                '2'=>'bg-info',
                '3'=>'bg-success',
                '4'=>'bg-danger'
            ];
            $i=0;
        ?> 
<div class="flex-container doubleSize" style="height: 100%; box-shadow: none;">
    
    <?php foreach($class as $c): ?><?php $i++; ?> 
        <div class="card box <?= $warna[$i]; ?> text-light" style="margin : 5px;">
            <div class="card-body">
                <h5 class="card-title"><?= $c['nama_kelas']; ?></h5>
                <p class="card-text"><?= $c['deskripsi']; ?></p>
                <a href="<?= base_url('class_con/mainClass/').$c['id_kelas']; ?>" class="btn btn-dark">Enter Class</a>
            </div>
            </div>
        <?php if($i==4){$i=0;} ?>
        <?php endforeach; ?>
<?php endif; ?>
  <?php if(empty($class)): ?>
    <div class="container text-center">
    <h1>You don't have a class yet </h1><br>
    <h3><a href=" <?= base_url('user/join'); ?>">Join a class now</a></h3> 
    </div>
  <?php endif; ?>
</div>

    </div>
    </div> 
 



</main>
</body>
</html>