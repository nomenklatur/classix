<main>
<div class="container center">
  <h2>Join The Class</h2><br>
  <button class="btn btn-info" onclick="document.getElementById('create').style.display='block'">
    <i class="fab fa-fort-awesome"></i>
    <span>Create</span>
  </button>
  <div class="row " id="babaw">
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
  <?php foreach($class as $c): ?><?php $i++; ?> 
  <form action="<?= base_url('user/join'); ?>" method="post" class="col-sm-5  mt-sm-4 mb-sm-4 mr-sm-4 zoom">

<div class="card shadow  <?= $warna[$i]; ?> text-light" >
  <div class="card-body">
    <h5 class="card-title"><?= $c['nama_kelas']; ?></h5>
    <p class="card-text"><?= $c['deskripsi']; ?></p>

    <div class="form-group">
       <input type="password" class="form-control" name="code" placeholder="Class Code">
       <input type="hidden" name="class" value="<?= $c['id_kelas']; ?>">
     </div>
     <button class="btn btn-dark">Join</button>
  </div>
</div>
</form>
<?php if($i==5){$i=0;} ?>
<?php endforeach; ?>
</div>
</div>

<div class="modal"id="create">
    <div class="card card-login mx-auto mt-5 shadow p-3 modal-content">
      <div class="card-body">
        <h3 class="float-right text-light btn btn-danger" onclick="document.getElementById('create').style.display='none'">X</h3>
            <h5 class="text-center">Create Your Own Class</h5>
            <form action="<?= base_url('class_con/createClass'); ?>" method="post">
            <div class="form-group">
                <label for="name">Class Name</label>
                <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="name" required>
                <small id="desc" class="form-text text-muted">Create your class name</small>
            </div>
            <div class="form-group">
                <label for="desc">Description</label>
                <input type="text" class="form-control" id="desc" aria-describedby="emailHelp" name="desc">
                <small id="desc" class="form-text text-muted">Optional</small>
            </div>
            <button type="submit" class="btn btn-primary float-right">Submit</button>
            </form>
        </div>
    </div>
  </div>

</main>