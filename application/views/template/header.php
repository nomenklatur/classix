<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= $title ?></title>

  <!-- Custom fonts for this template-->
  <link href=" <?= base_url('assets/') ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link rel="icon" type="image/icon" href="<?= base_url('assets/') ?>img/LOGO.PNG" />

  <!-- Page level plugin CSS-->
  <link href=" <?= base_url('assets/') ?>vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href=" <?= base_url('assets/') ?>css/sb-admin.css" rel="stylesheet">
  <link href=" <?= base_url('assets/') ?>css/mycss.css" rel="stylesheet">



</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark sticky-top">

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <a class="navbar-brand mr-1 " href="<?= base_url('user') ?>">
    <img class="img-profile  rounded-circle"width="30" height="30" src="<?= base_url('assets/img/LOGO.png');?>" alt="">
      Classroom</a>
    <!-- Navbar Search -->
    <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group ">
      </div>
    </div>
    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0 ">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
       <span class="mr-2 d-none d-lg-inline text-light"><?= $user['nama']; ?></span>
        <img class="img-profile rounded-circle"width="30" height="30" src="<?= base_url('assets/img/').$user['img']?>" alt="">
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">

          <a class="dropdown-item" href="<?= base_url('login/logout');?>">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav bg-secondary">
    <a class="nav-link" href="<?= base_url('user');?>">
      <li class="nav-item active">
      <img class="img-profile rounded-circle"width="30" height="30" src="<?= base_url('assets/img/').$user['img']; ?>" alt="">
      <span><?= $user['nama']; ?></span>
      <hr class="sidebar-divider my-0">
   </a>
        <div class="dropdown-divider"></div>
   </li>

      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('user/Myclass'); ?>">
        <i class="fas fa-atom"></i>
          <span>Class</span>
        </a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('user/join'); ?>">
        <i class="fab fa-alipay"></i>
          <span>Brows</span></a>
      </li>
      <div class="dropdown-divider"></div>  
      <div class="container">
      <h5 class="text-light">MY CLASS</h5>
      </div>
      <?php 
            $warna = [
              '1'=>'bg-warning',
              '2'=>'bg-info',
              '3'=>'bg-success',
              '4'=>'bg-primary',
              '5'=>'bg-danger'
            ];
            $i=0;
        ?> 
      <?php foreach($myClass as $class1): ?>
        <?php $i++; ?>
        <li class="nav-item active <?= $warna[$i]; ?>">
        <a class="nav-link " href="<?= base_url('class_con/mainClass/').$class1['id_kelas']; ?>">
        <span>  
          <?= $class1['nama_kelas'] ?>
        </span>
          <div class="dropdown-divider"></div>
          <span><?= $class1['deskripsi'] ?></span>
          </a>
      </li>
      <?php if($i==5){$i=0;} ?>
      <?php endforeach; ?>

      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('user/manageClass'); ?>">
        <i class="fab fa-accusoft"></i>
          <span>Manage Class</span></a>
      </li>
 
    </ul>



    <div id="content-wrapper">

      <div class="container-fluid">


        <!-- Icon Cards-->

   

    <!-- /.content-wrapper -->