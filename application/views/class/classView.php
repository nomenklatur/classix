<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="<?= base_url('assets/')?>css/forClassView.css">
</head>
<body>
    <main>
    <div class="container">
  <div class="jumbotron jumbotron-fluid bgImage shadow" style="height : 240px; border-radius: 15px;">
    <div class="container">
      <h1><?= $TheClass['nama_kelas'] ?></h1>
      <p class="lead">Class Code : <?= $TheClass['id_kelas']; ?></p>
      
      <h6 class="float-left">Teacher : <?= $teacher['nama']; ?></h6>
    </div>
  </div>

<div class="row">
  <div class="col-md-8">

    <div class="container shadow p-3 posts">
      <form method="POST" action="<?= base_url('comment_con') ?>">
      <div class="form-group">
      <label for="exampleInputEmail1">
      <img src="<?= base_url('assets/img/').$user['img'] ?>" alt="image" style="width:50px">
      <?= $user['nama'] ?></label>
      <textarea name="text" id="" cols="10" rows="3" class="form-control">
      </textarea>
      <input type="hidden" name="name" value="<?= $user['id'] ?>">
      <input type="hidden" name="class" value="<?= $TheClass['id_kelas'] ?>">
      <input type="hidden" name="date" value="<?=  mdate('%Y-%m-%d') ?>">
      <input type="hidden" name="time" value="<?=  mdate('%h:%i %A') ?>">
    </div>
    <button type="submit" class="btn btn-success">Post</button>
    </form>
</div>

    <?php foreach($comment as $cm): ?>
    <div class="container shadow p-3 posts" style="margin-top:30px;">
    <form>
    <div class="form-group">
    <div><a href="<?= base_url('comment_con/delete/').$cm['id_comment'].'/'.$cm['id_kelas'] ?>" class="btn btn-danger float-right">X</a></div>
    <label for="exampleInputEmail1">
    <img src="<?= base_url('assets/img/').$cm['img'] ?>" alt="image" style="width:50px">
    <?= $cm['nama']; ?>
    <small id="emailHelp" class="form-text text-muted">Published On  <?= $cm['time'] ?> | <?= $cm['date'] ?></small>
    </label>
    <p><?= $cm['text']; ?></p>
    <p class="form-text text-muted"></p>
 
     </div>
    </form>
    </div>
    <?php endforeach; ?>


    </div>

    <div class="col-md-4 whitePosts">
          <table class="table text-center">
          <thead>
            <tr>
              <th scope="col"><h3>Students</h3></th>
            </tr>
          </thead>
          <tbody>
          <?php foreach($students as $s): ?>
          <tr>
            <td><img src="<?= base_url('assets/img/').$s['img']; ?>" alt="" style="width:40px"></td>
            <td><?= $s['nama'] ?></td>
            <td></td>
          </tr>
          <?php endforeach; ?>
          </tbody>
        </table>
  </div>


  </div>


</div>
    </main>
    
</body>
</html>