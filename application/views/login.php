<!DOCTYPE html>
<html lang="en">
  <head>
  <title>Login SMPN 2 Panongan</title>

  <!-- ========== Tempat File CSS ========== -->
  <link href="<?php echo base_url(); ?>assets/css/login/root.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/login/style.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/login/bootstrap.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/plugin/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
  <link href="<?php echo base_url(); ?>assets/css/login/font-awesome.min.css" rel="stylesheet">
  <style type="text/css">
    body{background: #0ba2ef;}
  </style>
  </head>
  <body>

    <div class="login-form">
      <form action="<?php echo base_url('index.php/login/aksi_login'); ?>" method="post">
        <div class="top">
          <img src="<?php echo base_url(); ?>assets/img/smp.png" alt="icon" class="icon">
          <h4><b>SMPN 2 PANONGAN</b></h4>
        </div>
        <div class="form-area">
          <div class="group">
            <input type="text" class="form-control" placeholder="Username" name="Username">
            <i class="fa fa-user"></i>
          </div>
          <div class="group">
            <input type="password" class="form-control" placeholder="Password" name="Password">
            <i class="fa fa-key"></i>
          </div>
          <div class="checkbox checkbox-primary">
            <input id="checkbox101" type="checkbox" checked>
            <label for="checkbox101"> Remember Me</label>
          </div>
          <button type="submit" class="btn btn-default btn-block" value="login">LOGIN</button>
        </div>
      </form>
      <div class="footer-links row">
        <div class="col-xs-6"><a href="#"><i class="fa fa-external-link"></i> Register Now</a></div>
        <div class="col-xs-6 text-right"><a href="#"><i class="fa fa-lock"></i> Forgot password</a></div>
      </div>
    </div>
</body>
</html>
