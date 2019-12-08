<!--
  Rezky Dimas Ade Novit
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Beranda</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
<div class="container">
<div class="modal fade" id="versi" role="dialog">
      <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">  About  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <p>Website ini dibuat oleh REZDNOV. ver.1.0.0
    Kunjungi <a href="<?php echo base_url();?>" target="_blank">Web Blog</a></p>
    </div>
        
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
      </div>
      
    </div>
</div>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url();?>assets/img/question.png" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">WebUploader</h2><span>dolupder</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="<?php echo base_url();?>" class="brand-small text-center"> <strong>R</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li class="active"><a href="<?php echo base_url();?>"> <i class="icon-home"></i>Home                             </a></li>
            <li><a href="<?php echo base_url();?>forum"> <i class="fa fa-comments"></i>Forum                              </a></li>
            <li><a href="<?php echo base_url();?>login"> <i class="icon-interface-windows"></i>Login                             </a></li>
        <div class="admin-menu">
          <h5 class="sidenav-heading">Visit</h5>
          <ul id="side-admin-menu" class="side-menu list-unstyled">
          <li>
          <a href="#" data-toggle="modal" data-target="#versi">  
            <img src="<?php echo base_url();?>assets/img/icon_about.png" class="aicon-about"></img>
            About</a>
          </li> 
            <li> <a href="#"> <i class="icon-screen"> </i>Visit Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="<?php echo base_url();?>" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Home</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="<?php echo base_url();?>assets/img/flags/16/ID.png" alt="Indonesia"><span class="d-none d-sm-inline-block">Indonesia</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="<?php echo base_url();?>assets/img/flags/16/GB.png" alt="English" class="mr-2"><span>English</span></a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Header Section-->
      <section class="dashboard-counts section-padding">
        <div class="container-fluid">
        </div>
      </section>

      <section class="dashboard-header section-padding">
        <div class="container-fluid">
            <!-- To Do List-->
                <h1 class="display h4">Selamat Datang</h1>
                
                <hr>
                  <p>Di WebUploader Indonesia</p>
                    <p>webuploader indonesia ini adalah web untuk upload gratis yang ada di Indonesia mulai dari storage 2GB, dan lain-lain , namun jika anda ingin mendonasikan untuk kemajuan webuploader ini silahkan klik -> <a href="http://dimski.000webhostapp.com/donasi" target="_blank">http://dimski.000webhostapp.com/donasi.</a></p>
                  <p>Lalu bagaimana saya bisa memanfaatkan web upload ini?. ikuti petunjuk dibawah ini</p>
                  <ol>
                  <li><b>Klik Login Jika sudah terdaftar, Jika belum maka anda harus mendaftar</b> untuk mendaftar klik <b>Register</b> pada bagian login.</li>
                <li>Masukkan data Register , dan setelah Register selesai, silahkan Login dengan username dan password yang sudah di daftarkan tadi.</li>
              <li>Setelah berhasil Login, anda bisa menikmati webuploader ini secara GRATIS.</li>
            <li>Untuk memulai silahkan klik menu UPLOADER di atas, pilih layanan yang ingin di ambil, jika sudah tunggu hingga proses selesai.</li>
          <li>Tunggu proses sampai selesai.</li>
         <li>Jika sudah selesai, anda akan masuk di folder anda sendiri beserta fitur database.</li>
          </ol>
           <p><b>Catatan:</b>Upload FILE yang diperlukan saja</p>
           <hr>
        </div>
      </section>
      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>WebUploader &copy; 2018-2019</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="https://getbootstrap.com/" class="external">Bootstrap4</a></p>
              <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url();?>assets/js/front.js"></script>
    <script src="https://js.pusher.com/5.0/pusher.min.js"></script>
  <?php if (!($this->session->userdata('nama'))){ ?>
    <script>
      var pusher = new Pusher('03390b8b7160498ec7dc', {
          cluster: 'ap1',
          forceTLS: true
      });
      pusher.unsubscribe('my-channel');
      pusher.disconnect();
    </script>
  <?php } ?>
  </body>
</html>  