<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
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
        <a class="navbar-brand" href="<?php echo base_url();?>" target="_blank">WEBUPLOADER</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="">Home</a></li>
          <li><a href="<?php echo base_url();?>layanan">UPLOADER</a></li>
          <li><a href="<?php echo base_url();?>about">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
         <?php
          if(isset($_SESSION['nama'])) {
            echo '<li><a href='.base_url().'profile>Profile</a></li>';
            echo '<li><a href='.base_url().'logout onclick="return confirm(\'Yakin?\')">Logout</a></li>';
          }else{
            echo '<li><a href='.base_url().'login>Login</a></li>';
          }
          ?>
          <li><a href="<?php echo base_url();?>" target="_blank">Visit Us</a></li>
        </ul>
        </div>
    </div>
  </nav>
  <div class="container container-body">
    <h1>Selamat datang!</h1>
    <hr>
    <p>Di WebUploader Indonesia</p>
    <p>webuploader indonesia ini adalah web untuk upload gratis yang ada di Indonesia mulai dari storage 2GB, dan lain-lain , namun jika anda ingin mendonasikan untuk kemajuan webuploader ini silahkan klik -> <a href="http://dimski.000webhostapp.com/donasi" target="_blank">http://dimski.000webhostapp.com/donasi.</a></p>
    <p>Lalu bagaimana saya bisa memanfaatkan web upload ini?. ikuti petunjuk dibawah ini</p>
    <ol>
      <li><b>Klik Login Jika sudah terdaftar, Jika belum maka anda harus mendaftar</b> di atas bagian kanan kemudian klik <b>Register</b> untuk daftar.</li>
      <li>Masukkan data Register , dan setelah Register selesai, silahkan Login dengan username dan password yang sudah di daftarkan tadi.</li>
      <li>Setelah berhasil Login, anda bisa menikmati webuploader ini secara GRATIS.</li>
      <li>Untuk memulai silahkan klik menu UPLOADER di atas, pilih layanan yang ingin di ambil, jika sudah tunggu hingga proses selesai.</li>
      <li>Tunggu proses sampai selesai.</li>
      <li>Jika sudah selesai, anda akan masuk di folder anda sendiri beserta fitur database.</li>
    </ol>
    <p><b>Catatan:</b>Upload FILE yang diperlukan saja</p>
    <hr>
    <center>copyright &copy; 2019 <a href="<?php echo base_url();?>" target="_blank">WEBUPLOADER</a></center>
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>