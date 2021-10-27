<div class="container">
    <div class="card card-login mx-auto mt-5 shadow p-3">
        <img class="card-img-top" src="holder.js/100x180/" alt="">
        <div class="card-body">
        <div class="text-center">
            <img src="<?= base_url('assets/img/LOGO.png'); ?>" class="rounded" alt="logo" width="50">
            <h4 class="card-title">LOGIN</h4>
            <h6 class="font-weight-light">Use your bobclassrom Account</h6>
            <?= $this->session->flashdata('message'); ?>
        </div>
          
            <form action="<?= base_url('login'); ?>" method="POST">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="pass" required>
                </div>
                <a href="<?= base_url('login/register'); ?>" class="text-info">CREATE ACCOUNT</a>
                <button type="submit" class="btn btn-primary float-right">login</button>
                </form> 
    
        </div>
    </div>
</div>