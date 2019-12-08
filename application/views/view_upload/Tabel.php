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
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.css" media="all" rel="stylesheet">

    <link href="<?php echo base_url();?>assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css">
    
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

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
   
  <style>

th {
  cursor: pointer;
  word-wrap:break-word;
}
.modal-body {
  overflow-x: auto;
}
.table-responsive{-sm|-md|-lg|-xl}

</style>
 
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
<style type="text/css">
      .modal {
        overflow-y:auto;
      }
      .dropzone {
  border: 2px dashed #0087F7;
}
.modal-content.ui-resizable {
  
}

  </style>

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

<!-- end of info file sharing-->

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

<!-- popup modal uploader -->
<div class="modal fade" id="uploader" role="dialog">
 <div class="subtab_left">
      <div class="modal-dialog modal-dialog-centered">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          
          <h4 class="modal-title">  UPLOADER  </h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
      <br>
      <div class="form-group">
            <div class="file-loading">
                <input id="siteorigin" class="file" name="myFile[]" type="file" multiple data-preview-file-type="any" data-theme="fas">
            </div>
        </div>
    <br>
    </div>
      <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>

        </div>
      </div>
     
    </div>
</div>
<!-- end of popup modal uploader -->

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
            <li><a href="<?php echo base_url();?>diagram"> <i class="fa fa-bar-chart"></i>Diagram                             </a></li>
            <li class="active"><a href="<?php echo base_url();?>tabel"> <i class="icon-grid"></i>Tabel                             </a></li>
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
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="<?php echo base_url();?>" class="navbar-brand">
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
                <li class="nav-item"><a href="#" id="logout" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out-alt"></i></a></li>
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
            <li class="breadcrumb-item active">Tabel       </li>
          </ul>
        </div>
      </div>
      <section class="dashboard-header section-padding">
        <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Tabel            </h1>
          </header>
          <?php
            if ($this->session->flashdata('sukses'))
            echo '<p>'.$this->session->flashdata('sukses').'</p>';
          ?>
                <div class="card-header d-flex align-items-center">
                  <h4>Data File Upload Anda</h4>
                </div>
                <form class="form-horizontal" method="POST" action="<?php echo base_url();?>delete" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="table-responsive">
                    <input class="form-control" id="myInput" type="text" placeholder="Search..">
                    <br>
                    <div class="float-sm-left">
                    <button type="submit" class="btn btn-primary btn-submit" id="btn-delete">DELETE</button></div>
                   <div class="float-sm-right"><a href="#" data-toggle="modal" data-target="#uploader" class="btn btn-primary btn-submit" id="kusus"><i class="fa fa-upload fa-3x"></i></a></div>
                    <br>
                    <br>
                    <br>
                    <table class="table table-striped table-hover" id="myTable1">
                      <thead>
                        <tr>
                          <th onclick="sortTable(0)">NO</th>
                          <th onclick="sortTable(1)">File Name</th>
                          <th onclick="sortTable(2)">File Size</th>
                          <th onclick="sortTable(3)">File Type</th>
                          <th onclick="sortTable(4)">Status</th>
                          <th>Action</th>
                          <th>
                          <div class="i-checks">
                          <input id="checkboxCustom1" onClick="toggle(this)" type="checkbox" value="" class="form-control-custom">
                          <label for="checkboxCustom1">select all</label>
                        </div>
                          </th>
                        </tr>
                      </thead>
                      <tbody id="show_data"></tbody>
                    </table>
                  </div>
                </div>
        </div>
        </form>
        <div class="container-fluid">
          <!-- Page Header-->
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
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/front.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/piexif.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/purify.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/fileinput.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/themes/fa/theme.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/locales/es.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/themes/fas/theme.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/themes/explorer-fas/theme.js" type="text/javascript"></script>
    <!-- JavaScript files-->
<script>
  $("#siteorigin").fileinput({
    uploadUrl: "<?php echo base_url();?>upload",
    uploadAsync: true,
    explicitly: false,
    autoOrientImage: true,
    dropZoneEnabled: true,
    uploadExtraData: {
            'uploadToken': '<?php echo md5($this->session->userdata('id')); ?>', 
        },
    maxImageWidth: 200,
    showCancel: true,
    theme: 'fas',
    resizeImage: true,
    filebatchpreupload: true,
    previewFileIcon: '<i class="fas fa-file"></i>',
    preferIconicZoomPreview: true, // this will force zoom preview thumbnails to display icons for following file extensions
    previewFileIconSettings: { // configure your icon file extensions
        'doc': '<i class="fas fa-file-word text-primary"></i>',
        'xls': '<i class="fas fa-file-excel text-success"></i>',
        'ppt': '<i class="fas fa-file-powerpoint text-danger"></i>',
        'pdf': '<i class="fas fa-file-pdf text-danger"></i>',
        'zip': '<i class="fas fa-file-archive text-muted"></i>',
        'htm': '<i class="fas fa-file-code text-info"></i>',
        'txt': '<i class="fas fa-file-text text-info"></i>',
        'mov': '<i class="fas fa-file-movie-o text-warning"></i>',
        'mp3': '<i class="fas fa-file-audio text-warning"></i>',
        // note for these file types below no extension determination logic 
        // has been configured (the keys itself will be used as extensions)
        'jpg': '<i class="fas fa-file-image text-danger"></i>', 
        'gif': '<i class="fas fa-file-image text-warning"></i>', 
        'png': '<i class="fas fa-file-image text-primary"></i>'    
    },
    previewFileExtSettings: { // configure the logic for determining icon file extensions
        'doc': function(ext) {
            return ext.match(/(doc|docx)$/i);
        },
        'xls': function(ext) {
            return ext.match(/(xls|xlsx)$/i);
        },
        'ppt': function(ext) {
            return ext.match(/(ppt|pptx)$/i);
        },
        'zip': function(ext) {
            return ext.match(/(zip|rar|tar|gzip|gz|7z)$/i);
        },
        'htm': function(ext) {
            return ext.match(/(htm|html)$/i);
        },
        'txt': function(ext) {
            return ext.match(/(txt|ini|csv|java|php|js|css)$/i);
        },
        'mov': function(ext) {
            return ext.match(/(avi|mpg|mkv|mov|mp4|3gp|webm|wmv)$/i);
        },
        'mp3': function(ext) {
            return ext.match(/(mp3|wav)$/i);
        },
    }
});
  $('#siteorigin').on('filebatchuploadcomplete', function(event, preview, config, tags, extraData) {
        show_upload();
        show_sharing();
    });
</script>
<script>
show_upload();
show_sharing();
show_datapengguna();


$('#logout').click(function(){
    var reallyLogout=confirm("Do you really want to log out?");
    if(reallyLogout){
        location.href="logout";
    }
});
function sortTable(n) {
  var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
  table = document.getElementById("myTable1");
  switching = true;
  //Set the sorting direction to ascending:
  dir = "asc"; 
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[n];
      y = rows[i + 1].getElementsByTagName("TD")[n];
      /*check if the two rows should switch place,
      based on the direction, asc or desc:*/
      if (dir == "asc") {
        if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch= true;
          break;
        }
      } else if (dir == "desc") {
        if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
          //if so, mark as a switch and break the loop:
          shouldSwitch = true;
          break;
        }
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
      //Each time a switch is done, increase this count by 1:
      switchcount ++;      
    } else {
      /*If no switching has been done AND the direction is "asc",
      set the direction to "desc" and run the while loop again.*/
      if (switchcount == 0 && dir == "asc") {
        dir = "desc";
        switching = true;
      }
    }
  }
}

$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable1 tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});

 function show_upload(){
 //  $('#show_data').empty();
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url('Tabel/getData'); ?>',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var html1 = '';
                    var i;
                    var no = 1;
                    if(data.length > 0){
                    for(i=0; i<data.length; i++){

                        html += '<tr>'+
                                '<td>'+no+++'</td>'+
                                '<td>'+data[i].file_name+'</td>'+
                                '<td>'+bytesToSize(data[i].file_size)+'</td>'+
                                '<td>'+data[i].file_type+'</td>'+
                                '<td>'+data[i].status+'</td>'+
                                '<td> <div class="input-group"> <div class="input-group-prepend"> <button data-toggle="dropdown" type="button" class="btn btn-outline-secondary dropdown-toggle">Action <span class="caret"></span></button> <div class="dropdown-menu"> <a href=delete?id='+data[i].file_name+' class="dropdown-item" onclick="return deleletconfig()"">Delete</a> <a href=download?file='+data[i].file_name+' class="dropdown-item" >Download</a> </div> </div> </td>'+
                                '<td> <div class="form-check"> <input type="checkbox" name="id[]" class="form-check-input" value='+data[i].file_name+'> </div></td>'+
                                '</tr>';
                        
                    }
                     $('#show_data').html(html);
                  } else{
                     html1 += '<tr><td colspan="5">Tidak ada data</td></tr>';
                     $('#show_data').html(html1);
                  }
                    
                }
 
            });
        }
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
               show_upload();
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

function toggle(source) {
    checkboxes = document.getElementsByName('id[]');
    for(var i=0, n=checkboxes.length;i<n;i++) {
    checkboxes[i].checked = source.checked;
      }
    }
function deleletconfig(){    
var result = confirm("Want to delete?");
if (result) {
       preventDefault();
        return true;
        }
        return false;
    }
function bytesToSize(bytes) {
    var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
    if (bytes == 0) return 'n/a';
    var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
    if (i == 0) return bytes + ' ' + sizes[i];
    return (bytes / Math.pow(1024, i)).toFixed(1) + ' ' + sizes[i];
};
</script>   
  </body>
</html>