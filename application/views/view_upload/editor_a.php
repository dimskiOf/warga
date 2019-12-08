<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex, nofollow" />
	<title>Textarea Editor</title>
	<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/jquery-1.3.2.min.js"></script> 
	<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/jquery.codify.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/htmlbox.colors.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/htmlbox.styles.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/htmlbox.syntax.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/htmlbox.undoredomanager.js"></script>
	<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/htmlbox.min.js"></script>
 <title>Textarea TextEditor</title>
  <link href="<?php echo base_url() ;?>assets/css/bootstrap.min.css" rel="stylesheet">

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
        <a class="navbar-brand" href="http://www.webhostindo.ga/" target="_blank">WEBHOSTING</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="layanan.php">Webhosting</a></li>
          <li><a href="about.php">About</a></li>
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
          <li><a href="http://www.webhostindo.ga/" target="_blank">Visit Us</a></li>
        </ul>
      </div>
    </div>
  </nav>
<?php

// configuration
$url = base_url()."a1" ;
$file = $_GET['id'];
$fold  = $this->session->userdata('folderr');
$final = "ups/".$fold."/".$file; 
// check if form has been submitted
if (isset($_get['text']))
{
    // save the text contents
    file_put_contents($final, $_GET['text']);

    // redirect to form again
    header(sprintf('Location: %s', $url));
    printf('<a href="%s">Moved</a>.', htmlspecialchars($url));
    exit();
}

// read the textfile
$text = file_get_contents($final,  $_POST['text']);
?>
<!-- An ordinary textarea which will change into fancy text editor.-->
<center><form method="get">
<textarea id="htmlbox_silk_icon_set_blue" rows="150" cols="150\" name="text"><?php echo htmlspecialchars($text) ?></textarea>
<br><br><input class="btn btn-primary btn-sm" type="submit" value="update" />
<input class="btn btn-primary btn-sm" type="reset" />
<input type="button" class="btn btn-primary btn-sm" value="Go Back" onclick="history.back(-1)" />
</form></center>	
<br>
	<!-- Added js of body part of Textarea editor.
        (which is shown in browser as an output)-->
        <center>copyright &copy; 2019 <a href="<?php echo base_url() ;?>" target="_blank">WEBUPLOADER</a></center>
	
	<script type="text/javascript" src="<?php echo base_url() ;?>assets/js/htmlbox.content.js"></script> 
</body>
</html>
