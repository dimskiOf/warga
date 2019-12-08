<!--
  Rezky Dimas Ade Novit
-->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if($this->session->userdata('nama')){echo 'Dashboard';}else{echo 'Forum';} ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Sumernote bs4 CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/summernote-bs4.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- select2 -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/formselect.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
    <!-- WYATB -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap3-wysihtml5.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/favicon.ico">
    <!-- loading-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/loading.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/loading2.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
<?php
if($this->session->userdata('nama')){ ?>
  <style type="text/css">

        .modal {
          overflow-y:auto;
        }
        .dropzone {
    border: 2px dashed #0087F7;
  }
  .modal-content.ui-resizable {
    
  }
  .page{      
           background-image: url('<?php echo base_url(); ?>assets/img/573224.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            height: auto;
    }
.ui-state-hover {
background:lightyellow;   
}
.ui-state-active {
background:lightgray   
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
              <div id="abey">
          
            <table class="table table-striped table-hover" id="sharings" width="100%" >
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

            </div>
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
  
    <!-- popup modal share-form -->
  <div class="container">
  <div class="modal fade" id="form-share" role="dialog">
   <div class="subtab_left">
        <div class="modal-dialog modal-dialog-centered">
      
        <!-- Modal content-->
    
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">  Isi Form berikut  </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <div id="paging">
          <div class="modal-body">
            <form id='sharingin' method="POST">
            <label>Readme file:</label>
            <textarea id="goreadme" class="textarea" placeholder="Place some text here"></textarea>

            <label>Bagikan Ke:</label>
                <select id="pilih" class="form-group-material select2" multiple="multiple" data-placeholder="Select a User"
                        style="width: 100%;">
                  <option>Public</option>
                  <option disabled="disabled"><-- Pengguna --></option>
                  <option>A</option>
                  <option>B</option>
                  <option>C</option>
                </select>
              <!-- /.form-group -->
              </form>
          </div>
        </div>
      
          <button type="submit" id="ablengius" name="temp" class="btn btn-primary btn-submit">Go Share..!</button>
          </div>
        </div>
       
      </div>
  </div>
  </div>
  <!-- end of  popup modal share-form -->

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

<!-- loader -->

<div class="container">
  <div class="modal fade" id="loadMe" tabindex="-1" role="dialog">
   <div class="subtab_left">
        <div class="modal-dialog modal-dialog-centered">
      
        <!-- Modal content-->
        <div id="loadlazzy" class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
        </div>
    </div>
       
    </div>
  </div>
</div>
<div class="container">
  <div class="modal modal--custom fade" id="loadings" tabindex="-1" role="dialog">
   <div class="subtab_left">
      <div class="modal-dialog modal-dialog-centered">
        <p class="inmiddle" align="">check your internet connection!</p>
        <div class='containers'>
          <div class='loaders'>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--dot'></div>
            <div class='loader--text'></div>
          </div>
        </div>
    </div>
       
    </div>
  </div>
</div>

<?php
}
?>

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
            <li class="active"><a href="#"> <i class="fa fa-comments"></i>Forum                              </a></li>
            <?php
            if($this->session->userdata('nama')){
            echo '<li><a href='.base_url().'diagram><i class="fa fa-bar-chart"></i>Diagram                             </a></li>
                   <li><a href='.base_url().'tabel><i class="icon-grid"></i>Tabel                             </a></li>
                   <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"><i class="icon-interface-windows"></i>Profil</a><ul id="exampledropdownDropdown" class="collapse list-unstyled "><li><a href="#" data-toggle="modal" data-target="#myModal">Lihat Profil</a></li><li><a href="#" data-toggle="modal" data-target="#modalShare">Share</a></li>
                   </ul></li>';
            }else{
             echo '<li><a href='.base_url().'login><i class="icon-interface-windows"></i>Login                             </a></li>';
            }
            ?>
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
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="<?php echo base_url();?>forum" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Forum</strong></div></a></div><div style="color:yellow" id="str"></div><div style="color:yellow" id="onlinerr"></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="<?php echo base_url();?>assets/img/flags/16/ID.png" alt="Indonesia"><span class="d-none d-sm-inline-block">Indonesia</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="<?php echo base_url();?>assets/img/flags/16/GB.png" alt="English" class="mr-2"><span>English</span></a></li>
                  </ul>
                </li>
                <?php
            if($this->session->userdata('nama')){
                 echo '<li class="nav-item"><a href="#" id="logout" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>';
                  }
                ?>
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

      <!-- Updates Section -->
      <section class="mt-30px mb-30px">
        <div class="container-fluid">
          <div class="row">
            <div id="a" class="col-lg-4 col-md-12">
              <!-- Recent Updates Widget          -->
              <div id="new-updates" class="card updates recent-updated">
                <div id="updates-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box">HOT FILE</a></h2><a data-toggle="collapse" data-parent="#new-updates" href="#updates-box" aria-expanded="true" aria-controls="updates-box"><i class="fa fa-angle-down"></i></a>
                </div>
                <div id="updates-box" role="tabpanel" class="collapse show">
                  <ul class="news list-unstyled">
                   <!--list item-->
                   <div id="log" class="mCustomScrollbar" data-mcs-theme="minimal-dark" data-mcs-auto-hide-scrollbar="true" style="overflow-y:scroll; overflow-x:scroll; height:400px;">
                   <div id="filess"></div>
                 </div>
                   <!-- end of list -->
                  </ul>
                </div>
              </div>
              <!-- Recent Updates Widget End-->
            </div>
            <?php if ($this->session->userdata('nama')){ echo '
            <div id="b" class="col-md-8 col-xs-12 konten">

              <!-- Daily Widget-->
              <div id="daily-feeds" class="card updates daily-feeds">
                <div id=feeds-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box"><b>Forum Chat</b>&nbsp&nbsp&nbsp<time datetime=""></time></a></h2>
                  <div class="right-column">
                    <div class="badge badge-primary"><font size="3" color="red"><p id="statuss" style="color:yellow"></p></font></div><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box"><i class="fa fa-angle-down"></i></a>
                  </div>
                </div>
                <div id="feeds-box" role="tabpanel" class="collapse show">
                  <div id="asken" class="feed-box" >
                    <ul class="feed-elements list-unstyled">
                      <!-- List-->
                      <div id="selector" class="mCustomScrollbar" data-mcs-theme="minimal-dark" data-mcs-auto-hide-scrollbar="true" style="overflow-y:scroll; overflow-x:scroll; height:400px;">
                      <div id="load_data_message"></div>
                      <div id="load_data"></div>
                      </div>
                      <!--end of list -->
                    </ul>
                  </div>
                </div>
                <div class="card-footer1">
              <div class="input-group">
                <div class="input-group-append">
                  <span class="input-group-text attach_btn"><i class="fa fa-paperclip fa-2x"></i></span>
                </div>  
                <textarea name="isinya" id="msgs" class="form-control type_msg" placeholder="Type your message..."></textarea>
                <div class="input-group-append">
                  <span class="input-group-text send_btn"><i id="sendbtn" class="fa fa-location-arrow fa-2x"></i></span>
                </div>
              </div>
            </div>
              </div>
              <!-- Daily Feed Widget End-->
            </div>
           '; }else {
            echo '<div class="col-md-8 col-xs-12 konten">
              <!-- Daily Widget-->
              <div id="daily-feeds" class="card updates daily-feeds">
                <div id="feeds-header" class="card-header d-flex justify-content-between align-items-center">
                  <h2 class="h5 display"><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box">Public Chat </a></h2>
                  <div class="right-column">
                    <div class="badge badge-primary">jumlah message</div><a data-toggle="collapse" data-parent="#daily-feeds" href="#feeds-box" aria-expanded="true" aria-controls="feeds-box"><i class="fa fa-angle-down"></i></a>
                  </div>
                </div>
                <div id="feeds-box" role="tabpanel" class="collapse show">
                  <div class="feed-box">
                    <ul class="feed-elements list-unstyled">
                      <!-- List-->

                      <!--end of list -->
                    </ul>
                  </div>
                </div>
              </div>
              <!-- Daily Feed Widget End-->
            </div>';
           } ?>
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
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url();?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- Main File-->
    <script src="<?php echo base_url();?>assets/js/front.js"></script>
    <script src="<?php echo base_url();?>assets/js/moment.js"></script>
    <script src="https://js.pusher.com/5.0/pusher.js"></script>
    <script src="<?php echo base_url();?>assets/js/formselect.js"></script>
    <script src="<?php echo base_url(); ?>assets/dist/summernote-bs4.js"></script>
<?php if ($this->session->userdata('nama')){ ?>
    <script>
    $('.modal--custom').on('show.bs.modal', function (e) {
  setTimeout(function(){
    $('.modal-backdrop').addClass('modal-abg');
      });
  });
    jQuery.fn.swap = function(b){ 
   
    b = jQuery(b)[0]; 
    var a = this[0]; 
    var t = a.parentNode.insertBefore(document.createTextNode(''), a); 
    b.parentNode.insertBefore(a, b); 
    t.parentNode.insertBefore(b, t); 
    t.parentNode.removeChild(t); 
    return this; 
};


$( ".card" ).draggable({ revert: true, helper: "clone" });

$( ".card" ).droppable({
    accept: ".card",
    activeClass: "ui-state-hover",
    hoverClass: "ui-state-active",
    drop: function( event, ui ) {

        var draggable = ui.draggable, droppable = $(this),
            dragPos = draggable.position(), dropPos = droppable.position();
       
        draggable.swap(droppable);
    }
});

function onReady(callback) {
    var intervalID = window.setInterval(checkReady, 1000);

    function checkReady() {
        if (document.getElementsByTagName('body')[0] !== undefined) {
            window.clearInterval(intervalID);
            callback.call(this);
        }
    }
}

function show(id, value) {
    document.getElementById(id).style.display = value ? 'block' : 'none';
}

onReady(function () {
    show('paging', true);
    show('loadlazzy', true);
 
});
      
$('#goreadme').summernote({
  minHeight: 200,
  placeholder: 'Write here ...',
  focus: false,
  airMode: false,
  fontNames: ['Roboto', 'Calibri', 'Times New Roman', 'Arial'],
  fontNamesIgnoreCheck: ['Roboto', 'Calibri'],
  dialogsInBody: true,
  dialogsFade: true,
  disableDragAndDrop: false,
  toolbar: [
    // [groupName, [list of button]]
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['para', ['style', 'ul', 'ol', 'paragraph']],
    ['fontsize', ['fontsize']],
    ['fontname', ['fontname']],
    ['insert', ['link', 'picture', 'video']],
    ['font', ['strikethrough', 'superscript', 'subscript']],
    ['height', ['height']],
    ['color', ['color']],
    ['misc', ['undo', 'redo', 'codeview', 'print', 'help', 'fullscreen']]
  ],
  popover: {
    image: [
    ['image', ['resizeFull', 'resizeHalf', 'resizeQuarter', 'resizeNone']],
    ['float', ['floatLeft', 'floatRight', 'floatNone']],
    ['remove', ['removeMedia']]
    ],
    table: [
    ['add', ['addRowDown', 'addRowUp', 'addColLeft', 'addColRight']],
    ['delete', ['deleteRow', 'deleteCol', 'deleteTable']],
    ],
    air: [
      ['color', ['color']],
      ['font', ['bold', 'underline', 'clear']]
    ]
  },
  print: {
    //'stylesheetUrl': 'url_of_stylesheet_for_printing'
  }
});
$('.select2').select2({  dropdownAutoWidth : true });
    

    $(function($){
    $(window).on("load",function(){
        $("#selector").mCustomScrollbar({
        axis:'yx',
        setHeight: '400',
        theme:'dark',
        callbacks:true
             });
         });
    });
    var limit = 7;
    var start = 0;
    var action = 'inactive';

    function lazzy_loader(limit)
    {
      var output = '';
      for(var count=0; count<limit; count++)
      {
        output += '';
      }
      $('#load_data_message').html(output);
    }

   lazzy_loader(limit);

    function load_data(limit, start)
    {
    $.ajax({
      url:"<?php echo base_url(); ?>Tabel/getChatkhusus",
      method:"post",
      data:{limit:limit, start:start},
      cache: false,
      dataType: 'json',
    success: function(data){  
        var html = '';
        var html2 = '';
        if(data == '')
          {
            html2 += '<h3>No More Result Found</h3>';
             $('#load_data_message').prepend(html2);
            action = 'active';

          }
          else
          {
            if(data.length > 0){
        for(var i = 0; i<data.length; i++){
        var idchat1 = data[i].idchat;
        var chatusr = data[i].chat_usr;
        var relativtime = moment(data[i].datetime, "YYYY-MM-DD h:mm:ss").fromNow();
        var idchat ='<?php echo md5($this->session->userdata('id')); ?>';
        var stats = (idchat == idchat1) ? "You": data[i].nama_usr;
        var sideof = (idchat == idchat1) ? "<div class='feed-body d-flex justify-content-between'><a href='#' class='feed-profile'><img src='<?php echo base_url(); ?>assets/img/question.png' alt='person' class='img-fluid rounded-circle'></a><div class='content' id='satanic'><strong><font color='green' size='4'><b> "+stats+"</b></font></strong><div class='wb'><small><font id='isi' color='white' size='3'>"+$('<div />').text(data[i].chat_usr).html()+"</font></small></div><div class='full-date'></div></div></div><div class='date'><small>"+relativtime+"</small></div>": "<div class='date'><small>"+relativtime+"</small></div><div class='c'><div class='content'><strong><font color='green' size='4'><b> "+stats+"</b></font></strong><div class='wb'><small><font id='isi' color='white' size='3'>"+$('<div />').text(data[i].chat_usr).html()+"</font></small></div><div class='full-date'></div></div></div><div class='feed-body d-flex justify-content-between'><a href='#' class='feed-profile'><img src='<?php echo base_url(); ?>assets/img/question.png' alt='person' class='img-fluid rounded-circle'></a></div>";

        html += '<li class="clearfix">'+
                '<div class="feed d-flex justify-content-between">'+
                sideof+
                '</div>'+
                '</li>';
                }
              }
              $('#load_data').prepend(html);
              $('#load_data_message').html("");
              action = 'inactive';
            }
        
     }   
  });
    }

    if(action == 'inactive')
    {
      load_data(limit, start);
      action = 'active';

    }
    
    $("#log").mCustomScrollbar({
     axis:'yx',
     setHeight: '400',
     theme:'dark'
   });

    $("#selector").mCustomScrollbar({
     axis:'yx',
     setHeight: '400',
     theme:'dark',
     callbacks:{
          whileScrolling:function(){
            var scrollTop = $('#selector').find(".mCSB_dragger").position().top;
            if(scrollTop == 0 && action == 'inactive')
            {
              lazzy_loader(limit);
              start = start + limit;
              setTimeout(function(){
              load_data(limit,start);
              }, 1*1000);
              action = 'active';
              $("#selector").mCustomScrollbar("scrollTo",-93,{scrollInertia:0});
            }
          }
        }
    });

    var gowing = 1;
    function appending(gowing)
    {
    $.ajax({
      url:"<?php echo base_url(); ?>Tabel/getChatkhusus",
      method:"post",
      data:{limit:gowing},
      cache: false,
      dataType: 'json',
    success: function(data){  
        var html = '';
        var html2 = '';
    if(data.length > 0){
        for(var i = 0; i<data.length; i++){
        var idchat1 = data[i].idchat;
        var chatusr = data[i].chat_usr;
        var relativtime = moment(data[i].datetime, "YYYY-MM-DD h:mm:ss").fromNow();
        var idchat ='<?php echo md5($this->session->userdata('id')); ?>';
        var stats = (idchat == idchat1) ? "You": data[i].nama_usr;
        var sideof = (idchat == idchat1) ? "<div class='feed-body d-flex justify-content-between'><a href='#' class='feed-profile'><img src='<?php echo base_url(); ?>assets/img/question.png' alt='person' class='img-fluid rounded-circle'></a><div class='content' id='satanic'><strong><font color='green' size='4'><b> "+stats+"</b></font></strong><div class='wb'><small><font id='isi' color='white' size='3'>"+$('<div />').text(data[i].chat_usr).html()+"</font></small></div><div class='full-date'></div></div></div><div class='date'><small>"+relativtime+"</small></div>": "<div class='date'><small>"+relativtime+"</small></div><div class='c'><div class='content'><strong><font color='green' size='4'><b> "+stats+"</b></font></strong><div class='wb'><small><font id='isi' color='white' size='3'>"+$('<div />').text(data[i].chat_usr).html()+"</font></small></div><div class='full-date'></div></div></div><div class='feed-body d-flex justify-content-between'><a href='#' class='feed-profile'><img src='<?php echo base_url(); ?>assets/img/question.png' alt='person' class='img-fluid rounded-circle'></a></div>";

        html += '<li class="clearfix">'+
                '<div class="feed d-flex justify-content-between">'+
                sideof+
                '</div>'+
                '</li>';
                }
              }
              $('#load_data').append(html);
              $('#load_data_message').html("");
              action = 'inactive';
            
        
     }   
  });
    }
      setInterval(now, 1000);
      show_sharing();
      show_datapengguna();
      show_files(kuota);
      Pusher.logToConsole = true;

      var pusher = new Pusher('03390b8b7160498ec7dc', {
          cluster: 'ap1',
          forceTLS: true
      });

      var channel = pusher.subscribe('my-channel');
      $('div#onlinerr').text("Status Online <?php echo $jml; ?>");
      channel.bind('my-event', function(data) {
          if(data.message === 'success'){
            appending(gowing);
               $("#selector").mCustomScrollbar("update");
            setTimeout(function(){
                $("#selector").mCustomScrollbar("scrollTo","bottom");
            },2*1000);
          }else if (data.message.match(/Offline.*/)){
              $('#statuss').html(data.message);
          }else if (data.message.match(/Online.*/)){
              $('#statuss').html(data.message);
          }else if (data.message === 'dishare'){
            show_files(kuota);
          }else if (data.message === 'unshare'){
            show_files(kuota);
          }

      });
  channel.bind('my-event', function(data) {
    if (data.berapanih === "undefined"){
      $('div#onlinerr').text("Status Online 0");
    }else{
      $('div#onlinerr').text("Status Online "+data.berapanih);
    }
  });

 pusher.connection.bind('state_change', function(states) {
      $('div#str').text("Status koneksi " + states.current);
      starting = $("div#str").text();
if (starting === 'Status koneksi connected'){
      $("#loadings").modal("hide");
      }else{
      $("#loadings").modal("show");
      }
  });

function now() {
var timeElement = document.querySelector('time'),
    time = new Date(timeElement.getAttribute('datetime'));
timeElement.innerText = moment().format('DD MMMM YYYY, h:mm:ss a');
};

$('#logout').click(function(){
    var reallyLogout=confirm("Do you really want to log out?");
    if(reallyLogout){
        location.href="logout";
    }
});

function checkName(evt) {
  var charCode = evt.charCode;
  if (charCode != 0) {
    if (charCode < 97 || charCode > 122) {
      evt.preventDefault();
      displayWarning(
        "Please use lowercase letters only."
        + "\n" + "charCode: " + charCode + "\n"
      );
    }
  }
}

function addCart(v){
        var name = $(v).attr('name'); 
        var value = $(v).attr('value');
        $("#ablengius").prop('value', value);
        $("#ablengius").prop('name', name);
        return false;
    }


$(document).ready(function(){
$('#ablengius').click(function(event){  
   var post_url = "<?php echo base_url(); ?>share"; //get form action url
   var request_method = 'POST'; //$(this).attr("method"); //get form GET/POS
   $("#loadMe").modal({
      backdrop: "static", //remove ability to close modal with click
      keyboard: false, //remove option to close with keyboard
      show: true //Display loader!
    });
   var readmes = $('#goreadme').summernote('code');
   var values = $('#pilih').val();
   var button = $(event.target);
   var result = button.parents(this).serialize() 
    + encodeURI(button.attr('name'))
    + '='
    + encodeURI(button.attr('value'))
    + '&'
    + encodeURI('set')
    + '='
    + encodeURI(values)
    + '&'
    + encodeURI('readmes')
    + '='
    + encodeURI(readmes)
   ;
      $.ajax({
        url : post_url,
        type: request_method,
        data: result, // serializes the form's elements.
         success: function(data)
         {    
             $("#result").html(data);
             $('.select2').val(null).trigger('change');
             $('#goreadme').summernote('code', '');
             show_sharing();
             $("#loadMe").modal("hide");
          //  
         }
      })
})
})


function sharer(){
   var post_url = "<?php echo base_url(); ?>share/unshare"; //get form action url
   var request_method = 'POST'; //get form GET/POST methoh
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
          //  
         }
      })
}

$("#selector").mCustomScrollbar("scrollTo","bottom",{scrollInertia:0});
   
$(function(){
    function getCaret(el) {
        if (el.selectionStart) {
            return el.selectionStart;
        } else if (document.selection) {
            el.focus();
            
            var r = document.selection.createRange();
            if (r == null) {
                return 0;
            }
            
            var re = el.createTextRange(),
                rc = re.duplicate();
            re.moveToBookmark(r.getBookmark());
            rc.setEndPoint('EndToStart', re);
            
            return rc.text.length;
        }  
        return 0;
    }
    $("#msgs").keyup(function(e){
        if (e.keyCode == 13 && e.ctrlKey) {
            var content = $(this).val();
            var caret = getCaret(this);
            $(this).val(content.substring(0,caret)+
                        "\n"+content.substring(caret,content.length));
            e.stopPropagation();
        } else if (e.keyCode == 13){
            $("#sendbtn").click();
        }
    });
});


  $(document).ready(function(){
    $('#sendbtn').on('click',function(event){
       event.preventDefault();
       var post_url = "<?php echo base_url(); ?>forum/send?isinya="; //get form action url
       var request_method = "POST"; //get form GET/POST methoh
       var data = $('#msgs').serialize();

    $.ajax({
          url : post_url,
          type: request_method,
          data: data, // serializes the form's elements.
           success: function(data)
           {  
              $('#msgs').val('');
              $("#selector").mCustomScrollbar("update");
                setTimeout(function(){
                    $("#selector").mCustomScrollbar("scrollTo","bottom");
                },1000);
           }
         });
      
    });

})  
      function show_sharing(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url(); ?>Tabel/getDatasharing',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var html1 = '';
                    var i;
                    if(data.length > 0){
                    for(i=0; i<data.length; i++){
                    var ids = (data[i].action == "SHARE") ? "btn-form": "btn-share";
                    var datatarget = (data[i].action == "SHARE") ? "#form-share": "#popup";
                    var types = (data[i].action == "SHARE") ? "button": "submit";
                    var onclick = (data[i].action == "SHARE") ? "onclick='addCart(this)'": "onclick='sharer()'";

                        html += '<tr>'+
                                '<td>'+data[i].file_name+'</td>'+
                                '<td>'+data[i].status+'</td>'+
                                '<td><button '+onclick+' type='+types+' name="file" class="btn btn-primary btn-submit" id='+ids+' data-toggle="modal" data-target='+datatarget+' value='+data[i].file_name+'>'+data[i].action+'</button></td>'+
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
                url   : '<?php echo base_url(); ?>Tabel/getDatapengguna',
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
    
        var kuota = 10;
        function show_files(kuota){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url(); ?>Tabel/getFiles',
                async : true,
                dataType : 'json',
                data:{limit:kuota},
                success : function(data){
                    var html = '';
                    var html1 = '';
                    var i;
                    if(data.length > 0){
                    for(i=0; i<data.length; i++){
                        html += '<li class="d-flex justify-content-between">'+
                                '<div class="left-col d-flex">'+
                                '<div class="icon"><button type="submit" name="file" class="btn btn-primary btn-submit" id="btn-share" data-toggle="modal" data-target="#popup" value='+data[i].fille_id+'>Download</button></div>'+
                                '<div class="title"><strong>'+data[i].file_name+'</strong><p>'
                                +data[i].readme_file+
                                '</p></div>'+
                                '</div>'+
                                '<div class="right-col text-right">'+
                                '<div class="update-date">24'+
                                '<div class="month">Jan</div>'+
                                '<div class="year">2019</div>'+
                                '</div>'+
                                '</div>'+
                                '</li>';
                        
                    }
                     $('#filess').html(html);
                  } else{
                     html1 += '<tr><td colspan="5">Tidak ada data</td></tr>';
                     $('#filess').html(html1);
                  }
                    
                }
 
            });
        }
    </script>
  <?php }else{ ?>
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