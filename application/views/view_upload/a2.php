<!DOCTYPE html>
<html lang="en">
<head>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
<script language="JavaScript" type="text/javascript">
$(document).ready(function(){
    $("a.delete").click(function(e){
        if(!confirm('Are you sure?')){
            e.preventDefault();
            return false;
        
        }
        return true;
        
    });
    
});
</script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Upload</title>
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
        <a class="navbar-brand" href="<?php echo base_url(); ?>" target="_blank">WEBUPLOADER</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li class="active"><a href="<?php echo base_url(); ?>layanan">WEBUPLOADER</a></li>
          <li><a href="<?php echo base_url(); ?>about">About</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php
          if(isset($_SESSION['nama'])){
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
    <h1>FTP</h1>
    <hr>
    <div class="row">
      <div class="col-md-6 col-md-offset-3">
        <form class="form-horizontal" method="POST" enctype="multipart/form-data" >
          <div class="form-group">
            <div class="col-md-10">
              <input type="file" name="myFile[]" class="filestyle" data-icon="false" multiple="">
            </div>
            <div class="col-md-2">
              <input type="submit" name="upload" class="btn btn-primary" value="Upload">
            </div>
          </div>
        </form>
      </div>
    </div>
    <table class="table table-striped table-hover">
      <tr>
        <th>NO.</th>
        <th>FILE NAME</th>
        <th>FILE SIZE</th>
        <th>FILE TYPE</th>
        <th>ACTION</th>
      </tr>
      <?php
      if (!function_exists('bytesToSize')) {
      function bytesToSize($bytes, $precision = 2){  
        $kilobyte = 1024;
        $megabyte = $kilobyte * 1024;
        $gigabyte = $megabyte * 1024;
        $terabyte = $gigabyte * 1024;
       
        if (($bytes >= 0) && ($bytes < $kilobyte)) {
          return $bytes . ' B';
        } elseif (($bytes >= $kilobyte) && ($bytes < $megabyte)) {
          return round($bytes / $kilobyte, $precision) . ' KB';
        } elseif (($bytes >= $megabyte) && ($bytes < $gigabyte)) {
          return round($bytes / $megabyte, $precision) . ' MB';
        } elseif (($bytes >= $gigabyte) && ($bytes < $terabyte)) {
          return round($bytes / $gigabyte, $precision) . ' GB';
        } elseif ($bytes >= $terabyte) {
          return round($bytes / $terabyte, $precision) . ' TB';
        } else {
          return $bytes . ' B';
        }
      }
      $no = 1;
      if(count($groups) > 0){
	  foreach($groups as $row)
            {
          
          echo '
          <tr>
            <td>'.$no++.'</td>
            <td>'.$row['file_name'].'</td>
            <td>'.bytesToSize($row['file_size']).'</td>
            <td>'.$row['file_type'].'</td>
            <td><a href="delete?id='.$row['file_name'].'" class="delete btn btn-primary btn-sm">Delete</a> <a href="download?file='.$row['file_name'].'" class="btn btn-primary btn-sm">Download</a> </td>
          </tr>
          ';
        
            }
       }  else {   
        echo '<tr><td colspan="5">Tidak ada data</td></tr>';
      }    
}    	  
      ?>
    </table>
    

    <hr>
    <center>copyright &copy; 2019 <a href="<?php echo base_url(); ?>" target="_blank">WEBUPLOADER</a></center>
  </div> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
</body>
</html>