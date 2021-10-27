<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/icon" href="<?= base_url('assets/') ?>img/classix.PNG" />
  <title><?= $title ?></title>
  <link rel="stylesheet" href="<?= base_url('assets/')?>css/bootstrap.min.css">
  <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="<?= base_url('assets/') ?>css/forSidebar.css">
</head>

<body>
  <nav>
    <div class="sidebar-top">
      <span class="shrink-btn">
        <i class='bx bx-chevron-left'></i>
      </span>
      <img src="<?= base_url('assets/')?>/img/classix.png" class="logo" alt="">
      <h3 class="hide">Classix</h3>
    </div>

    <div class="search">
      <i class='bx bx-search'></i>
      <input type="text" class="hide" placeholder="Quick Search ...">
    </div>

    <div class="sidebar-links">
      <ul>
        <li class="tooltip-element" data-tooltip="0">
          <a href="http://localhost/classix/user" data-active="0">
            <div class="icon">
              <i class='bx bx-tachometer'></i>
              <i class='bx bxs-tachometer'></i>
            </div>
            <span class="link hide">Dashboard</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="1">
          <a href="http://localhost/classix/user/join" data-active="1">
            <div class="icon">
              <i class='bx bx-map-pin'></i>
              <i class='bx bxs-map-pin'></i>
            </div>
            <span class="link hide">Browse</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="2">
          <a href="<?= base_url('user/edit') ?>" data-active="2">
            <div class="icon">
              <i class='bx bx-user'></i>
              <i class='bx bxs-user'></i>
            </div>
            <span class="link hide">Profile</span>
          </a>
        </li>
        <li class="tooltip-element" data-tooltip="3">
          <a href="#" data-active="3">
            <div class="icon">
              <i class='bx bx-bar-chart-square'></i>
              <i class='bx bxs-bar-chart-square'></i>
            </div>
            <span class="link hide">Analytics</span>
          </a>
        </li>
        <div class="tooltip">
          <span class="show">Dashboard</span>
          <span>Browse</span>
          <span>Profile</span>
          <span>Analytics</span>
        </div>
      </ul>

      

      
    </div>

    <div class="sidebar-footer">
      
      </a>
      <div class="admin-user tooltip-element" data-tooltip="1">
        <div class="admin-profile hide">
          <img src="<?= base_url('assets/img/').$user['img']?>" alt="">
          <div class="admin-info">
            <h3><?= $user['nama']; ?></h3>
            <h5><?= $user['email'];?></h5>
          </div>
        </div>
        <a href="<?= base_url('login/logout');?>" class="log-out">
          <i class='bx bx-log-out'></i>
        </a>
      </div>
      <div class="tooltip">
        <span class="show"></span>
        <span>Sign Out</span>
      </div>
    </div>
  </nav>
  <style>
    li :hover{
      text-decoration : none;
    }
    i :hover{
      text-decoration : none;
    }
  </style>

  <!--<main>
    <h1>My Dashboard</h1>
    <p class="text">
      Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequatur animi voluptatibus cum maxime distinctio
      iste quod deleniti eius, autem voluptates cumque suscipit iure quasi eligendi ullam. Sapiente eligendi porro
      reprehenderit corrupti error facilis quo, fugiat fugit? Maiores aliquam ad, molestiae iste nihil, commodi
      doloremque tempore excepturi aut id ducimus unde?
    </p>
    <p class="copyright">
      &copy; 2021 - <span>Aqumex</span> All Rights Reserved.
    </p>
  </main> -->

  <script src="<?= base_url('assets/') ?>js/sidebar.js"></script>
</body>

</html>