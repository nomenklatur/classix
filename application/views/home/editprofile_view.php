<main>
<div class="card  mx-auto mt-5 shadow">
    <form class=" p-5" action="<?= base_url('user/edit'); ?>" method="POST"  enctype="multipart/form-data">

    <div class="row">
    <div class="col">
        <div class="form-group">
            <img src="<?= base_url('assets/img/').$user['img']; ?>" alt="" class="img-thumbnail" height="400px" width="400px">
            <br>
            <label for="image"><?= $user['img'] ?></label>
            <input type="file" class="form-control-file" id="image" name="image"  value="<?= $user['img']; ?>">
        </div>
        </div>
        <div class="col">
        <div class="form-group">
            <label for="">Email Address</label>
            <?= form_error('nama','<small class="text-danger pl-3">','</small>');  ?>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $user['email']; ?>" name="email" readonly>
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput">Nama</label>
            <?= form_error('nama','<small class="text-danger pl-3">','</small>');  ?>
            <input type="text" class="form-control" id="formGroupExampleInput" value="<?= $user['nama']; ?>" name="nama" required="required">
        </div>

          <button type="submit" class="btn btn-primary btn-block" value="upload">update</button>
          </div>
         </div>
         </div>
      </div>

        </form>
</div>
</div>
</div>
</main>