<style>
    .jumboHeaderImg{
        background-image:url('<?= base_url('assets/img/back.jpg') ?>'); 
        backgroound-size:cover;
        background-repeat: no-repeat, repeat;
        background-size: 100% 100%;
    }
</style>
<main>
<div class="container ">

<div class="jumbotron text-light jumboHeaderImg shadow">
<div class=" container">      
<div class="text-center">
     <img src="<?= base_url('assets/img/').$user['img'] ?>" alt="image" class="img-profile rounded-circle" width="200">
</div>
<h1 class="display-4">Hello, <?= $user['nama']; ?></h1>
<p class="lead"><?= $user['email']; ?></p>
<a href="<?= base_url('user/edit') ?>" class="btn btn-warning">Edit Profile</a>
<hr class="my-4 bg-light">
<p>Welcome to Arbobsky Classromm , And enjoy your class</p>
<a class="btn btn-primary btn-lg" href="<?= base_url('user/join'); ?>" role="button">join class</a>
</div>
</div> 


</div>
</main>