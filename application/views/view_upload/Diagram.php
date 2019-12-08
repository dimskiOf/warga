<!--
  Rezky Dimas Ade Novit
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dashboard</title>
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
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom2.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
<style type="text/css">
      .modal {
        overflow-y:auto;
      }
  </style>
    <?php
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
      foreach ($total as $hasil) {
       $berhitung = bytesToSize($hasil['SUM(file_size)']);
       $satuan = trim($berhitung,"1234567890."); 
       $hasil = trim($berhitung,"MBKGT.");
       $Storage = bytesToSize('2147483648000000');
       $potong = trim($Storage,"MBKGT.");
       $a = (double)$potong;
       $b = (double)$hasil;
       $sisa = $a - $b;
      }

    ?>
   <!-- modal data pengguna -->
<div class="container">
<div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">  Profil Pengguna  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <div class="col-md-4 col-md-offset-4">   
        <table class="table">
          <tbody id="show_data_pengguna"></tbody>
        </table>
      </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
      </div>
      
    </div>
</div>

<!-- end of data pengguna -->
<div class="container">
<div class="modal fade" id="modalShare" tabindex="-1" role="dialog">
 <div class="subtab_left">
      <div class="modal-dialog modal-dialog-centered" style="width: auto; max-width: 960px;" role="document">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">  Share File  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
         
        <div class="modal-body">
          <div class="table-responsive-sm">
           <form method="POST" id="sharings">
          <table class="table table-striped table-hover" width="100%" >
          <thead>
            <tr>
            <th onclick="">FILE</th>
            <th onclick="">STATUS</th>
            <th onclick="">ACTION</th> 
            </tr>
          </thead>
          <tbody id="show_data_sharing"> 
          </tbody>
          </table>
          </form>
        </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
        </div>
      </div>
     
    </div>
</div>
</div>

<!-- end of data file share -->

<!-- popup modal share -->
<div class="container">
<div class="modal fade" id="popup" role="dialog">
 <div class="subtab_left">
      <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">  Thankyou  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <center><div class="alert alert-success" id="result"></div></center>
    </div>
    <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
        </div>

        </div>
      </div>
     
    </div>
</div>
</div>
<!-- end of popup modal share -->

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
            <li><a href="<?php echo base_url();?>"> <i class="icon-home"></i>Home                             </a></li>
            <li><a href="<?php echo base_url();?>forum"> <i class="fa fa-comments"></i>Forum                             </a></li>
            <li class="active"><a href="<?php echo base_url();?>diagram"> <i class="fa fa-bar-chart"></i>Diagram                             </a></li>
            <li><a href="<?php echo base_url();?>tabel"> <i class="icon-grid"></i>Tabel                             </a></li>
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-interface-windows"></i>Profil </a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="#" data-toggle="modal" data-target="#myModal">Lihat Profil</a></li>
                <li><a href="#" data-toggle="modal" data-target="#modalShare">Share</a></li>
              </ul>
            </li>
          </ul>
        </div>
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
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="http://dimski.000webhostapp.com/data.html" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Notifications dropdown-->
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="<?php echo base_url();?>assets/img/flags/16/ID.png" alt="Indonesia"><span class="d-none d-sm-inline-block">Indonesia</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="<?php echo base_url();?>assets/img/flags/16/GB.png" alt="English" class="mr-2"><span>English</span></a></li>
                  </ul>
                </li>
                <!-- Log out-->
                <li class="nav-item"><a href="#" id="logout" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
      <!-- Breadcrumb-->
      <div class="breadcrumb-holder">
        <div class="container-fluid">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo base_url();?>">Home</a></li>
            <li class="breadcrumb-item active">Chart       </li>
          </ul>
        </div>
      </div>
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Chart            </h1>
          </header>
                <div class="card-header d-flex align-items-center">
                  <h4>Jumlah Data File yang terupload WebUploader</h4>
                </div>
                <div class="card-body">
                  <canvas id="linechart"></canvas>
          </div>
        </div>
        <div class="container-fluid">
          <!-- Page Header-->
                <div class="card-header d-flex align-items-center">
                  <h4>Jumlah Storage Sistem WebUploader</h4>
                </div>
                <div class="card-body">
                  <canvas id="piechart"></canvas>
          </div>
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
    <script src="<?php echo base_url();?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script>
    show_sharing();
    show_datapengguna();
$('#logout').click(function(){
    var reallyLogout=confirm("Do you really want to log out?");
    if(reallyLogout){
        location.href="logout";
    }
});
  $(document).ready(function(){
    $('#sharings').on('click',function(event){
       event.preventDefault();
       
       var post_url = "<?php base_url(); ?>share"; //get form action url
       var request_method = $(this).attr("method"); //get form GET/POST methoh
       var button = $(event.target);                 
       var result = button.parents('#btn-share').serialize() 
        + encodeURI(button.attr('name'))
        + '='
        + encodeURI(button.attr('value'))
       ;

    $.ajax({
          url : post_url,
          type: request_method,
          data: result, // serializes the form's elements.
           success: function(data)
           {
               $("#result").html(data);
               show_sharing();
           }
         });
      
    });

})  
      function show_sharing(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url('Tabel/getDatasharing'); ?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var html1 = '';
                    var i;
                    if(data.length > 0){
                    for(i=0; i<data.length; i++){

                        html += '<tr>'+
                                '<td>'+data[i].file_name+'</td>'+
                                '<td>'+data[i].status+'</td>'+
                                '<td><button type="submit" name="file" class="btn btn-primary btn-submit" id="btn-share" data-toggle="modal" data-target="#popup" value='+data[i].file_name+'>'+data[i].action+'</button></td>'+
                                '</tr>';
                        
                    }
                     $('#show_data_sharing').html(html);
                  } else{
                     html1 += '<tr><td colspan="5">Tidak ada data</td></tr>';
                     $('#show_data_sharing').html(html1);
                  }
                    
                }
 
            });
        }
    function show_datapengguna(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url('Tabel/getDatapengguna'); ?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var html1 = '';
                    var i;
                    if(data.length > 0){
                    for(i=0; i<data.length; i++){

                        html += '<tr>'+
                                '<tr><th>USERNAME</th><th>:</th><td>'+data[i].username+'</td></tr>'+
                                '<tr><th>TGL. DAFTAR</th><th>:</th><td>'+data[i].tglDaftar+'</td></tr>'+
                                '<tr><th>NAMA LENGKAP</th><th>:</th><td>'+data[i].nama+'</td></tr>'+
                                '<tr><th>EMAIL</th><th>:</th><td>'+data[i].email+'</td></tr>'+
                                '<tr><th>FOLDER</th><th>:</th><td>'+data[i].folder+'</td></tr>'+
                                '</tr>'
                                ;
                        
                    }
                     $('#show_data_pengguna').html(html);
                  } else{
                     html1 += '<tr><td colspan="5">Tidak ada data</td></tr>';
                     $('#show_data_pengguna').html(html1);
                  }
                    
                }
 
            });
        }
      $(document).ready(function () {

    'use strict';

      var brandPrimary = 'rgba(51, 179, 90, 1)';
      var piechart   = $('#piechart'),
          linechart  = $('#linechart');

      var lineChart = new Chart(linechart, {
        type: 'line',
        data: {
            labels: [<?php foreach ($groups as $row) {
              echo '"'.$row['bulan'].'",';
            }?>],
            datasets: [
                {
                    label: "Data User yang Upload",   
                    fill: true,
                    lineTension: 0.3,
                    backgroundColor: "rgba(51, 179, 90, 0.38)",
                    borderColor: brandPrimary,
                    borderCapStyle: 'butt',
                    borderDash: [],
                    borderDashOffset: 0.0,
                    borderJoinStyle: 'miter',
                    borderWidth: 1,
                    pointBorderColor: brandPrimary,
                    pointBackgroundColor: "#fff",
                    pointBorderWidth: 1,
                    pointHoverRadius: 5,
                    pointHoverBackgroundColor: brandPrimary,
                    pointHoverBorderColor: "rgba(220,220,220,1)",
                    pointHoverBorderWidth: 2,
                    pointRadius: 1,
                    pointHitRadius: 10,
                    data: [<?php foreach ($groups as $row) {
              echo ''.$row['user'].',';
            }?>],
                    spanGaps: false
                },
            ]
        }
    });

var piechart = new Chart(piechart, {
        type: 'doughnut',
        data: {
            labels: [
                <?php echo  '"Total Penggunaan Storage('.$satuan.')"'; ?>,
                "Sisa Storage Sistem (GB)"
            ],
            datasets: [
                {
                    data: [<?php echo $hasil; ?>,<?php echo $sisa; ?>],
                    borderWidth: [1, 1, 1],
                    backgroundColor: [
                        brandPrimary,
                        "rgba(75,192,192,1)",
                        "#FFCE56"
                    ],
                    hoverBackgroundColor: [
                        brandPrimary,
                        "rgba(75,192,192,1)",
                        "#FFCE56"
                    ]
                }]
            }
    });
      var piechart = {
        responsive: true
    };

  });
    </script>
    <!-- Main File-->
    <script src="<?php echo base_url();?>assets/js/front.js"></script>
  </body>
</html>