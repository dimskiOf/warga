<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom2.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/core-img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><strong class="text-primary"><a href="<?php echo base_url(); ?>">Register</a></strong></div>
            <p>Register untuk menggunakan fitur-fitur dari web ini serta melakukan posting. Web DEV-Team</p>
            <form class="text-left form-validate" method="POST">
          <?php
              echo form_open('register');
              echo validation_errors();
          if (isset($success))
              echo '<p>'.$success.'</p>';
            ?>
              <div class="form-group-material">
                <input id="register-name" type="text" name="nama" required data-msg="Nama lengkap anda" class="input-material">
                <label for="register-name" class="label-material">Nama Lengkap</label>
              </div>
              <div class="form-group-material">
                <input id="register-email" type="email" name="email" required data-msg="Please enter a valid email" class="input-material">
                <label for="register-email" class="label-material">Email</label>
              </div>
              <div class="form-group-material">
                <input id="register-username" type="text" name="username" required data-msg="Please enter your username" class="input-material">
                <label for="register-username" class="label-material">Username</label>
              </div>
              <div class="form-group">
                        <label class="control-label col-xs-3" >Hak-akses</label>

                  <div class="col-xs-9">
                    <select name="hak" id="hak_id" class="form-control">
                          <option value="1">Admin</option>
                          <option value="2">Member</option>
                      </select>
                    </div>
                  </div>
              <div class="form-group">
                            <label class="control-label col-xs-3" >Jenis kelamin</label>
                            <div class="col-xs-9">
                          <select name="ki" id="kelamin_input" class="form-control">
                          <option value="1">Wanita</option>
                          <option value="2">Pria</option>
                        </select>
                 </div>
               </div>
              <div class="form-group-material">
                <input id="register-password" type="password" name="password" required data-msg="Please enter a password" class="input-material">
                <label for="register-password" class="label-material">Password      </label>
              </div>
              <div class="form-group-material">
                <input id="register-password" type="password" name="password2" required data-msg="Please re enter your password" class="input-material">
                <label for="register-password" class="label-material">Ulangi Password        </label>
              </div>
              <div class="form-group terms-conditions text-center">
                <input id="register-agree" name="registerAgree" type="checkbox" required value="1" data-msg="Your agreement is required" class="form-control-custom">
                <label for="register-agree">I agree with the terms and policy</label>
              </div>
              <div class="form-group text-center">
                <input id="register" type="submit" name="register" value="Register" class="btn btn-primary">
              </div>
                <?php 
                    echo form_close(); 
              ?>
            </form>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="#" class="external">Dev-TEAM</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url(); ?>assets/js/front.js"></script>
  </body>
</html>