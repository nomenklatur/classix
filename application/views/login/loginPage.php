<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/icon" href="<?= base_url('assets/img/classix.png') ?>"/>
    <link rel="stylesheet" href="<?= base_url('assets/') ?>css/forLogin.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?= base_url('assets/') ?>font-awesome/css/font-awesome.min.css">
    <title>Classix</title>
</head>

<body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="<?= base_url('login'); ?>" class="sign-in-form" method="POST">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fa fa-envelope"></i>
              <input type="text" placeholder="Email" id="email" name="email" required />
            </div>
            <div class="input-field">
              <i class="fa fa-lock"></i>
              <input type="password" placeholder="Password" id="password" name="pass" required/>
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <p class="social-text">Or Sign in with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fa fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-linkedin-square"></i>
              </a>
            </div>
          </form>
		  
          <form action="<?= base_url('login/register'); ?>" method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fa fa-user"></i>
              <input type="text" placeholder="Username" id="name" name="name"/>
            </div>
            <div class="input-field">
              <i class="fa fa-envelope"></i>
              <input type="email" placeholder="Email" id="email" name="email" />
            </div>
            <div class="input-field">
              <i class="fa fa-lock"></i>
              <input type="password" placeholder="Password" id="password" name="pass"/>
            </div>
			<div class="input-field">
              <i class="fa fa-check-circle"></i>
              <input type="password" placeholder="Confirm Password" id="password1" name="pass1"/>
            </div>
            <input type="submit" class="btn" value="Sign up" />
            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="#" class="social-icon">
                <i class="fa fa-facebook-f"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-twitter"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-google"></i>
              </a>
              <a href="#" class="social-icon">
                <i class="fa fa-linkedin-square"></i>
              </a>
            </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              If you don't have an account yet, join us in the largest studying platform for free!
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="<?= base_url('assets/') ?>img/bookLover.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>One of us ?</h3>
            <p>
              Be the best version of yourself by learning with us everyday for free.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="<?= base_url('assets/') ?>img/bookReading.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="<?= base_url('assets/') ?>js/app.js"></script>

</body>
</html>