<div class="container">
<div class="card card-login mx-auto mt-5 shadow p-3">
   <div class="card-body">
   <div class="text-center">
            <img src="<?= base_url('assets/img/LOGO.png'); ?>" class="rounded" alt="logo" width="50">
            <h4 class="card-title">REGISTER</h4>
            <h6 class="font-weight-light">Register your bobclassrom Account</h6>
     </div>
        <form action="<?= base_url('login/register'); ?>" method="POST">

        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

            <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email">
            </div>
       <div class="form-row">
            <div class="form-group col-md-6">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="pass">
            </div>

            <div class="form-group col-md-6">
              <label for="password1">Confirm</label>
              <input type="password" class="form-control" id="password1" name="pass1">
            </div>
        </div>

        <button type="submit" class="btn btn-primary float-right">Sign in</button>

     </form>

    </div>
  </div>
</div>