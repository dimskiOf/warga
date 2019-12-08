<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>WebUploader Register</title>
  <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">

  <style type="text/css">
    body {
      padding-top: 70px;
      background: #eeeeee;
    }

    .container-body {
      background: #ffffff;
      box-shadow: 1px 1px 1px #999;
      padding: 20px;
    }
  </style>

  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body>

  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo base_url(); ?>" target="_blank">WEBUPLOADER</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="<?php echo base_url(); ?>layanan">UPLOADER</a></li>
          <li><a href="<?php echo base_url(); ?>about">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if($this->session->userdata('nama')){
            echo '<li><a href='.base_url().'profile>Profile</a></li>';
            echo '<li><a href='.base_url().'logout onclick="return confirm(\'Yakin?\')">Logout</a></li>';
          }else{
            echo '<li><a href='.base_url().'login>Login</a></li>';
          }
          ?>
          <li><a href="<?php base_url(); ?>" target="_blank">Visit Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container container-body">
    <h1>Register</h1>
    <hr>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" method="post">
           <?php
       echo form_open('register');
       echo validation_errors();
       if (isset($success))
       echo '<p>'.$success.'</p>';
      ?>
          <div class="form-group">
            <label class="col-md-4 control-label">Nama Folder</label>
            <div class="col-md-8">
              <input type="text" name="folder" class="form-control" value="" placeholder="Nama Folder" required="required">
            </div>
          </div>
                  <div class="form-group">
            <label class="col-md-4 control-label">Nama Lengkap</label>
            <div class="col-md-8">
              <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap"  required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Email</label>
            <div class="col-md-8">
              <input type="email" name="email" class="form-control" placeholder="email@domain.com" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Username</label>
            <div class="col-md-8">
              <input type="text" name="username" class="form-control" placeholder="username" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Password</label>
            <div class="col-md-8">
              <input type="password" name="password" class="form-control" placeholder="password" required="required">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">Ulangi Password</label>
            <div class="col-md-8">
              <input type="password" name="password2" class="form-control" placeholder="ulangi password" required="required">
            </div>
          </div>
             
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="col-md-8">
              <input type="submit" name="register" class="btn btn-primary" value="Register">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-4 control-label">&nbsp;</label>
            <div class="col-md-8">
              Sudah punya akun? <a href="<?php echo base_url(); ?>login">Login</a>
            </div>
          </div>
                <?php 
    echo form_close(); 
    ?>
        </form>
      </div>
    </div>
    <hr>
    <center>copyright &copy; 2019 <a href="http://www.webhostindo.ga/" target="_blank">WEBUPLOADER</a></center>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>