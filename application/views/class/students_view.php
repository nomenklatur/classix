<div class="container">
<a href="<?= base_url('user/manageClass') ?>" class="btn btn-dark" style="margin:10px"> << BACK</a>
<table class="table text-center">
  <thead class="thead-dark ">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Option</th>
    </tr>
  </thead>
  <tbody>
      <?php $i=1; ?>
    <?php foreach($students as $s): ?>
    <tr>
      <th scope="row"><?= $i++ ?></th>
      <td><img src="<?= base_url('assets/img/').$s['img']; ?>" alt="image" style="width:80px"></td>
      <td><?= $s['nama']; ?></td>
      <td><?= $s['email']; ?></td>
      <td><a href="<?= base_url('class_con/kickStudents/').$s['id'],'/',$idkelas ?>" class="btn btn-danger">Kick From Class</a></td>
     
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

</div>