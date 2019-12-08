
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pilih Layanan</title>
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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap-filestyle.min.js"></script>
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
          <li class="active"><a href="<?php echo base_url(); ?>layanan">UPLOADER</a></li>
          <li><a href="<?php echo base_url(); ?>about">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php 

           if (isset($_SESSION['nama']))
           {
            echo '<li><a href='.base_url().'profile>Profile</a></li>';
            echo '<li><a href='.base_url().'logout onclick="return confirm(\'Yakin?\')">Logout</a></li>';
            
            
          }else{

            echo '<li><a href='.base_url().'login>Login</a></li>';
          }

        
          ?>
          <li><a href="<?php echo base_url(); ?>" target="_blank">Visit Us</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container container-body">
    <h1>WEBUPLOADER</h1>
    <hr>
    <?php
    if(isset($_SESSION['nama'])){
      
		?>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>a1" >
          <div class="form-group">
            <div class="col-md-2">
              <input type="submit" name="upload" class="btn btn-primary" value="Upload Your own">
            </div>
          </div>
        </form>
    <form class="form-horizontal" method="post" action="<?php echo base_url(); ?>a2" >
          <div class="form-group">
            <div class="col-md-2">
              <input type="submit" name="upload" class="btn btn-primary" value="TERSERAH">
            </div>
          </div>
        </form>

      </div>
    </div>

	   <?php
    }else{
		?>
    <div class="alert alert-warning">Anda harus login terlebih dahulu</div>    
  <?php } ?>
      </div>
    </div>			 
	
    <hr>
    <center>copyright &copy; 2019 <a href="<?php echo base_url(); ?>" target="_blank">WEBUPLOADER</a></center>
  </div>

</body>
</html>