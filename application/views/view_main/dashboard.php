<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php if($this->session->userdata('id')){echo 'Dashboard';}else{echo 'Dashboard';} ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Sumernote bs4 CSS-->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/summernote-bs4.css">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" crossorigin="anonymous">
    <link href="<?php echo base_url();?>assets/css/fileinput.css" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="<?php echo base_url();?>assets/css/theme.css" media="all" rel="stylesheet" type="text/css"/>
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
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/img/core-img/favicon.ico">
    <!-- loading-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/loading.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/loading2.css">
    <!-- datatables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"/>
  </head>
  <body>
<?php
if($this->session->userdata('id')){ ?>
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
        <!-- MODAL EDIT -->
        <div class="container">
		<div class="modal fade" id="ModalaEdit" role="dialog">
		      <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          
		          <h4 class="modal-title">  Edit User  </h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        <div class="modal-body">
		          <form class="form-horizontal">
		                <div class="modal-body">
		 
		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Username</label>
		                        <div class="col-xs-9">
		                            <input name="kous_edit" id="username_id" class="form-control" type="text" placeholder="username" style="width:335px;" readonly>
		                        </div>
		                    </div>
		 
		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Nama</label>
		                        <div class="col-xs-9">
		                            <input name="nama_edit" id="nama_user" class="form-control" type="text" placeholder="Nama Anda" style="width:335px;" required>
		                        </div>
		                    </div>
		 
		                    <div class="form-group">
		                        <label class="control-label col-xs-3" >Jenis kelamin</label>
		                        <div class="col-xs-9">
		                            <select id="kelamin_edit">
									  <option value="1">Wanita</option>
									  <option value="2">Pria</option>
									</select>
		                        </div>
		                    </div>
		 
		                </div>
		 
		                <div class="modal-footer">
		                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                    <button class="btn btn-info" id="btn_update">Update</button>
		                </div>
		            </form>
		    	</div>
		        </div>
		      </div>
		      
		    </div>
		</div>
        <!--END MODAL EDIT-->
 
        <!--MODAL HAPUS-->
        <div class="container">
		<div class="modal fade" id="ModalHapus" role="dialog">
		      <div class="modal-dialog">
		    
		      <!-- Modal content-->
		      <div class="modal-content">
		        <div class="modal-header">
		          
		          <h4 class="modal-title">  Hapus User  </h4>
		          <button type="button" class="close" data-dismiss="modal">&times;</button>
		        </div>
		        <div class="modal-body">
		          <form class="form-horizontal">
		                <div class="modal-body">
		 
		                   <input type="hidden" name="kode" id="textkode" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus data ini?</p></div> 
		 
		                </div>
		 
		                <div class="modal-footer">
		                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		                    <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
		                </div>
		            </form>
		    	</div>
		        </div>
		      </div>
		      
		    </div>
		</div>
        <!--END MODAL HAPUS-->
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
          <p>Website ini dibuat oleh DEVELOPER-team. ver.1.0.0
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
          <div class="sidenav-header-inner text-center"><img src="<?php echo base_url();?>assets/img/core-img/2.png" alt="person" class="img-fluid rounded-circle">
            <h2 class="h5">WARGA.COM</h2><span>Developer-Team</span>
          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="<?php echo base_url();?>" class="brand-small text-center"><img src="<?php echo base_url();?>assets/img/core-img/2.png" alt="person" class="img-fluid rounded-circle"> </a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="<?php echo base_url();?>"> <i class="icon-home"></i>Home                             </a></li>
            <li id="user-info" class="active"><a href="#exampleuser" aria-expanded="false" data-toggle="collapse"><i class="icon-interface-windows"></i>User</a><ul id="exampleuser" class="collapse list-unstyled "><li><a href="<?php echo base_url();?>register" target="_blank">Tambah User</a></li></ul></li>
            <?php
            if($this->session->userdata('id')){
            echo '<li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"><i class="icon-interface-windows"></i>Berita</a><ul id="exampledropdownDropdown" class="collapse list-unstyled "><li id="add-berita"><a href="#">Tambah Berita</a></li><li id="berita-info"><a href="#" data-toggle="modal" data-target="#modalShare">List Berita</a></li>
            	<li><a href="#" data-toggle="modal" data-target="#modalShare">Kategori Berita</a></li>
                   </ul></li>
                   <li><a href="#examplertrw" aria-expanded="false" data-toggle="collapse"><i class="icon-interface-windows">
                   </i>Data RT&RW</a><ul id="examplertrw" class="collapse list-unstyled ">
                   <li id="add-rtrw"><a href="#">Tambah RT&RW</a></li>
                   <li id="list-rtrw"><a href="#" data-toggle="modal" data-target="#myModal">List RT&RW</a></li>
                   <li id="add-kegiatan"><a href="#">Tambah Kegiatan</a></li>
                   <li><a href="#" data-toggle="modal" data-target="#myModal">List Kegitan</a></li>
                   
                   </ul></li>
                   <li><a href="#" aria-expanded="false" ><i class="icon-interface-windows"></i>Setting</a><ul id="example" class="collapse list-unstyled ">
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
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><strong class="text-primary">Dashboard</strong></div></a></div>
              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
              	<li class="nav-item"><a href="#" id="" class="nav-link logout"> <span class="d-none d-sm-inline-block"><?php echo $this->session->userdata('id'); ?></span><i class="fa fa-user"></i></a></li>
                <!-- Languages dropdown    -->
                <li class="nav-item dropdown"><a id="languages" rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link language dropdown-toggle"><img src="<?php echo base_url();?>assets/img/flags/16/ID.png" alt="Indonesia"><span class="d-none d-sm-inline-block">Indonesia</span></a>
                  <ul aria-labelledby="languages" class="dropdown-menu">
                    <li><a rel="nofollow" href="#" class="dropdown-item"> <img src="<?php echo base_url();?>assets/img/flags/16/GB.png" alt="English" class="mr-2"><span>English</span></a></li>
                  </ul>
                </li>
                <?php
            if($this->session->userdata('id')){
                 echo '<li class="nav-item"><a href="http://localhost/warga/logout" id="logout" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>';
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
          <div class="row">
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-user"></i></div>
                <div class="name"><strong class="text-uppercase">New Clients</strong><span>Last 7 days</span>
                  <div class="count-number">25</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-padnote"></i></div>
                <div class="name"><strong class="text-uppercase">Work Orders</strong><span>Last 5 days</span>
                  <div class="count-number">400</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-check"></i></div>
                <div class="name"><strong class="text-uppercase">New Quotes</strong><span>Last 2 months</span>
                  <div class="count-number">342</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-bill"></i></div>
                <div class="name"><strong class="text-uppercase">New Invoices</strong><span>Last 2 days</span>
                  <div class="count-number">123</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list"></i></div>
                <div class="name"><strong class="text-uppercase">Open Cases</strong><span>Last 3 months</span>
                  <div class="count-number">92</div>
                </div>
              </div>
            </div>
            <!-- Count item widget-->
            <div class="col-xl-2 col-md-4 col-6">
              <div class="wrapper count-title d-flex">
                <div class="icon"><i class="icon-list-1"></i></div>
                <div class="name"><strong class="text-uppercase">New Cases</strong><span>Last 7 days</span>
                  <div class="count-number">70</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

       <section class="dashboard-header section-padding">
         <div id="list-user" class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Tabel            </h1>
          </header>
          <?php
            if (isset($success))
      		echo '<p>'.$success.'</p>';
          ?>
                <div class="card-header d-flex align-items-center">
                  <h4>Data User</h4>
                </div>
               
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover" id="myTable1">
                      <thead>
                        <tr>
                          <th onclick="sortTable(0)">NO</th>
                          <th onclick="sortTable(1)">Nama</th>
                          <th onclick="sortTable(2)">username</th>
                          <th onclick="sortTable(3)">Hak Akses</th>
                          <th onclick="sortTable(4)">Jenis-kelamin</th>
                          <th onclick="sortTable(5)">tgl_daftar</th>
                          <th onclick="sortTable(6)">Id</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="show_data"></tbody>
                    </table>
                  </div>
                </div>
        </div>
        <!-- berita input -->
        <div id="list-berita" class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Berita            </h1>
          </header>
          <?php
            if (isset($success))
      		echo '<p>'.$success.'</p>';
          ?>
                <div class="card-header d-flex align-items-center">
                  <h4>Data Berita</h4>
                </div>
               
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tabel-berita">
                      <thead>
                        <tr>
                          <th onclick="sortTable(0)">NO</th>
                          <th onclick="sortTable(1)">Judul</th>
                          <th onclick="sortTable(2)">Kategori</th>
                          <th onclick="sortTable(3)">Tgl dibuat</th>
                          <th onclick="sortTable(4)">Author</th>
                          <th onclick="sortTable(5)">Id</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="list_data_berita"></tbody>
                    </table>
                  </div>
                </div>
        </div>
        <!-- list rt rw -->
        <div id="rtrw-info" class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">RT&RW</h1>
          </header>
                <div class="card-header d-flex align-items-center">
                  <h4>Data RT&RW Kota Bandung</h4>
                </div>
               
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table table-striped table-hover" id="tabel-berita">
                      <thead>
                        <tr>
                          <th onclick="sortTable(0)">No</th>
                          <th onclick="sortTable(1)">Kelurahan</th>
                          <th onclick="sortTable(2)">Kecamatan</th>
                          <th onclick="sortTable(3)">RW</th>
                          <th onclick="sortTable(4)">NIK RW</th>
                          <th onclick="sortTable(5)">Nama RW</th>
                          <th onclick="sortTable(6)">Telp RW</th>
                          <th onclick="sortTable(7)">RT</th>
                          <th onclick="sortTable(8)">NIK RT</th>
                          <th onclick="sortTable(9)">Nama RT</th>
                          <th onclick="sortTable(10)">Telp RT</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody id="list_data_rtrw"></tbody>
                    </table>
                  </div>
                </div>
        </div>

         <!-- rt add -->
        <div id="form-addrtrw" class="container-fluid">
          <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Form Input RT/RW           </h1>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Isi Form Berikut</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" id="proses-rt" action="<?php echo base_url(); ?>Action_berita/inputdatartrw" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kelurahan</label>
                      <div class="col-sm-10">
                        <input id="auth" name="klurhn-name" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kecamatan</label>
                      <div class="col-sm-10">
                        <input id="auth" name="kcmtn-name" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">RW</label>
                      <div class="col-sm-10">
				            <input id="auth" name="rw-no" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">NIK Ketua RW</label>
                      <div class="col-sm-10">
                    <input id="auth" name="rw-nik" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nama Ketua RW</label>
                      <div class="col-sm-10">
                    <input id="auth" name="rw-name" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Telepon RW</label>
                      <div class="col-sm-10">
                    <input id="auth" name="rw-telp" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">RT</label>
                      <div class="col-sm-10">
                    <input id="auth" name="rt-no" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">NIK Ketua RT</label>
                      <div class="col-sm-10">
                    <input id="auth" name="rt-nik" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nama Ketua RT</label>
                      <div class="col-sm-10">
                    <input id="auth" name="rt-name" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Telpon RT</label>
                      <div class="col-sm-10">
                    <input id="auth" name="rt-telp" type="text" class="form-control" required="">
                      </div>
                    </div>                    
                    <div class="line"></div>
                    <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button id="clear-rt" type="submit" class="btn btn-secondary">Batalkan</button>
                        <button id="input-rt" type="submit" class="btn btn-primary">Input Data</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- end rt add -->

         <!-- berita add -->
        <div id="form-berita" class="container-fluid">
          <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Form Input Berita           </h1>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Isi Form Berikut</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" id="prosesing" action="<?php echo base_url(); ?>Action_berita/inputdataberita" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Judul Berita</label>
                      <div class="col-sm-10">
                        <input id="jdl-berita" name="berita-name" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Slug berita</label>
                      <div class="col-sm-10">
                        <input id="slg-berita" name="slug-name" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Thumbnail (.jpg .mp4 .png)</label>
                      <div class="col-sm-10">
                    <input id="file-0" name="myFile" class="file" type="file">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kategori Berita (pake select)</label>
                      <div class="col-sm-10">
                        <select id="ktgr" name="kategoris" class="form-control select2" data-placeholder="Select a Kategory" style="width: 100%">
                          <option>Politik</option>
                          <option>Budaya</option>
                          <option>Hukum</option>
                          <option>Kesehatan</option>
                          <option>Kriminal</option>
                          <option>Lifestyle</option>
                          <option>Olahraga</option>
                          <option>Pemerintah</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Author</label>
                      <div class="col-sm-10">
                        <input id="auth" name="berita-author" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Konten Berita</label>
                      <div class="col-sm-10">
                        <textarea id="goreadme" name="kontens" class="textarea" placeholder="Place some text here"></textarea>
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button id="clear-form" type="submit" class="btn btn-secondary">Batalkan</button>
                        <button id="berhenti" type="submit" class="btn btn-primary">Posting</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- end berita -->
         <!-- kegiatan add -->
        <div id="form-kegiatan" class="container-fluid">
          <div class="container-fluid">
          <!-- Page Header-->
          <header> 
            <h1 class="h3 display">Form Input Kegiatan           </h1>
          </header>
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Isi Form Berikut</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" id="proses-keg" action="<?php echo base_url(); ?>Action_berita/inputdatakegiatan" method="POST" enctype="multipart/form-data">
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Kelurahan</label>
                      <div class="col-sm-2">
                        <select id="keg-select" required="" class="form-control select" name="keg-kel">
                          <?php foreach ($kelur as $kel) {
                            ?>
                          }<option><?php echo $kel['kelurahan'];?></option>
                        <?php }?>
                        </select>
                      </div>
                      <label class="col-sm-2 form-control-label">Kecamatan</label>
                      <div class="col-sm-2">
                        <select id="kec-select" required="" class="form-control select" name="keg-kec">
                          <!-- <?php foreach ($kecam as $kec) {
                            ?>
                          }<option><?php echo $kec['kecamatan'];?></option>
                        <?php }?> -->
                      </select>
                      </div>
                      <label class="col-sm-1 form-control-label">RW</label>
                      <div class="col-sm-1">
                        <input id="auth" name="keg-rw" type="text" class="form-control" required="">
                      </div>
                      <label class="col-sm-1 form-control-label">RT</label>
                      <div class="col-sm-1">
                        <input id="auth" name="keg-rt" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Nama Kegiatan</label>
                      <div class="col-sm-10">
                        <input id="auth" name="keg-name" type="text" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Tanggal Kegiatan</label>
                      <div class="col-sm-10">
                        <input id="auth" name="keg-tgl" type="date" class="form-control" required="">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Deskripsi</label>
                      <div class="col-sm-10">
                        <textarea id="goreadme" name="keg-desk" type="textarea" class="form-control" required=""></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 form-control-label">Foto Kegiatan (.jpg .mp4 .png)</label>
                      <div class="col-sm-10">
                    <input id="file-0" name="myFile-keg" class="file" type="file">
                      </div>
                    </div>
                    <div class="line"></div>
                    <div class="form-group row">
                      <div class="col-sm-4 offset-sm-2">
                        <button id="clear-keg" type="submit" class="btn btn-secondary">Batalkan</button>
                        <button id="input-keg" type="submit" class="btn btn-primary">Input</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        </div>
        <!-- end kegiatan -->
        <div class="container-fluid">
          
        </div>
        
      </section>
      <!-- Updates Section -->
      <section class="mt-30px mb-30px">
        <div class="container-fluid">
          <div class="row">
            <div id="a" class="col-lg-4 col-md-12">
              <!-- Conten disini          -->
             	
              <!-- content End-->
            </div>
          </div>
        </div>
      </section>

      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <p>Developer-Team &copy; 2019-2020</p>
            </div>
            <div class="col-sm-6 text-right">
              <p>Design by <a href="#" class="external">Dev-TEAM</a></p>
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
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/piexif.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/sortable.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/plugins/purify.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/fileinput.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/themes/fa/theme.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/js/locales/es.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/themes/fas/theme.js" type="text/javascript"></script>
    <script src="<?php echo base_url();?>assets/themes/explorer-fas/theme.js" type="text/javascript"></script>
	
<?php if ($this->session->userdata('privilages') == 'SUPERADMIN'){ ?>
    <script>
    	$(document).ready(function(){
        tampil_data_user();
        tampil_data_berita();  
        tampil_data_rtrw();
        
        function tampil_data_berita(){
            $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>Action_berita/getdataberita',
                async : true,
                dataType : 'json',
                success : function(data){
                	var table;
                    var html = '';
                    var i;
                    var no = 1;
                   	table = $('#tabel-berita').DataTable();
                    for(i=0; i<data.length; i++){
                    	table.row.add([ no++, data[i].judul, data[i].kategori_berita, data[i].tgl, data[i].pembuat, data[i].id_berita, '<div class="input-group"> <div class="input-group-prepend"> <button data-toggle="dropdown" type="button" class="btn btn-outline-secondary dropdown-toggle">Action <span class="caret"></span></button> <div class="dropdown-menu"> <a href=javascript:; class="dropdown-item berita_edit" data="'+data[i].id_berita+'">Edit</a> <a href="javascript:;" class="dropdown-item berita_hapus" data="'+data[i].id_berita+'">Hapus</a><a href="#" class="dropdown-item view_hapus" data="'+data[i].id_berita+'" target="_blank">View</a> </div> </div>']);
                    }
                    table.draw();
                }
            });
        }  
      
        function tampil_data_user(){
            $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>tabel/getdatauser',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                        		'<td>'+no+++'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].privilage+'</td>'+
                                '<td>'+data[i].jenis_kelamin+'</td>'+
                                '<td>'+data[i].tgl_daftar+'</td>'+
                                '<td>'+data[i].user_id+'</td>'+'<td>'+'<div class="input-group"> <div class="input-group-prepend"> <button data-toggle="dropdown" type="button" class="btn btn-outline-secondary dropdown-toggle">Action <span class="caret"></span></button> <div class="dropdown-menu"> <a href=javascript:; class="dropdown-item item_edit" data="'+data[i].user_id+'">Edit</a> <a href="javascript:;" class="dropdown-item item_hapus" data="'+data[i].username+'">Hapus</a> </div> </div>'+'</td>'
                                +
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }

        function tampil_data_rtrw(){
            $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>Action_berita/getdatartrw',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                            '<td>'+no+++'</td>'+
                                '<td>'+data[i].kelurahan+'</td>'+
                                '<td>'+data[i].kecamatan+'</td>'+
                                '<td>'+data[i].rw+'</td>'+
                                '<td>'+data[i].nik_rw+'</td>'+
                                '<td>'+data[i].nama_rw+'</td>'+
                                '<td>'+data[i].telp_rw+'</td>'+
                                '<td>'+data[i].rt+'</td>'+
                                '<td>'+data[i].nik_rt+'</td>'+
                                '<td>'+data[i].nama_rt+'</td>'+
                                '<td>'+data[i].telp_rt+'</td>'+'<td>'+'<div class="input-group"> <div class="input-group-prepend"> <button data-toggle="dropdown" type="button" class="btn btn-outline-secondary dropdown-toggle">Action <span class="caret"></span></button> <div class="dropdown-menu"> <a href=javascript:; class="dropdown-item item_edit" data="'+data[i].id+'">Edit</a> <a href="javascript:;" class="dropdown-item item_hapus" data="'+data[i].id+'">Hapus</a> </div> </div>'+'</td>'
                                +
                                '</tr>';
                    }
                    $('#list_data_rtrw').html(html);
                }
 
            });
        }
        //UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('/tabel/getUser')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(username, nama, jenis_kelamin){
                    var klmn = (data.jenis_kelamin == "Pria") ? "2": "1";
                        $('#ModalaEdit').modal('show');
                        $('[name="kous_edit"]').val(data.username);
                        $('[name="nama_edit"]').val(data.nama);
                        $('#kelamin_edit').val(klmn);
                    });
                }
            });
            return false;
        });
 
 
        //HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });
 
        //Simpan
        $('#btn_simpan').on('click',function(){
            var namaid=$('#nama_id2').val();
            var usernameid=$('#username_ids2').val();
            var hakid=$('#hak_id').val();
            var kelaminid=$('#kelamin_input').val();
            var passwordid=$('#password_ids2').val();
            var emailid=$('#emailid2').serialize(); 
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('tabel/simpan_data_user')?>",
                dataType : "JSON",
                data : {namaid:namaid,usernameid:usernameid,hakid:hakid,kelaminid:kelaminid,passwordid:passwordid,emailid:emailid},
                success: function(data){
                    $('[name="nama_id"]').val("");
                    $('#username_ids2').val("");
                    $('#hak_id').val("");
                    $('#kelamin_input').val("");
                    $('#password_ids2').val("");
                    $('#emailid2').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_user();
                }
            });
            return false;
        });
 
        //Update
        $('#btn_update').on('click',function(){
            var nama=$('#nama_user').val();
            var ke=$('#kelamin_edit').val();
            var users=$('#username_id').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('tabel/update_user')?>",
                dataType : "JSON",
                data : {nama:nama , ke:ke ,users:users},
                success: function(data){
                    $('[name="nama_edit"]').val("");
                    $('#kelamin_edit').val("");
                    $('#kous_edit').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_user();
                }
            });
            return false;
        });
 
        //Hapus
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('tabel/hapusUser')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_user();
                    }
                });
                return false;
            });
 
    });
    </script>
<?php }elseif ($this->session->userdata('privilages') == 'ADMIN'){ ?>
	<script>
    	$(document).ready(function(){
        tampil_data_user();
        tampil_data_rtrw();  
        $('#mydata').dataTable();
        $('#data-rw').dataTable();

      
        function tampil_data_user(){
            $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>tabel/getdatauseradmin',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                        		'<td>'+no+++'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].privilage+'</td>'+
                                '<td>'+data[i].jenis_kelamin+'</td>'+
                                '<td>'+data[i].tgl_daftar+'</td>'+
                                '<td>'+data[i].user_id+'</td>'+'<td>'+'<div class="input-group"> <div class="input-group-prepend"> <button data-toggle="dropdown" type="button" class="btn btn-outline-secondary dropdown-toggle">Action <span class="caret"></span></button> <div class="dropdown-menu"> <a href=javascript:; class="dropdown-item item_edit" data="'+data[i].user_id+'">Edit</a> <a href="javascript:;" class="dropdown-item item_hapus" data="'+data[i].username+'">Hapus</a> </div> </div>'+'</td>'
                                +
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
        function tampil_data_rtrw(){
            $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>Action_berita/getdatartrw',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                            '<td>'+no+++'</td>'+
                                '<td>'+data[i].kelurahan+'</td>'+
                                '<td>'+data[i].kecamatan+'</td>'+
                                '<td>'+data[i].rw+'</td>'+
                                '<td>'+data[i].nik_rw+'</td>'+
                                '<td>'+data[i].nama_rw+'</td>'+
                                '<td>'+data[i].telp_rw+'</td>'+
                                '<td>'+data[i].rt+'</td>'+
                                '<td>'+data[i].nik_rt+'</td>'+
                                '<td>'+data[i].nama_rt+'</td>'+
                                '<td>'+data[i].telp_rt+'</td>'+'<td>'+'<div class="input-group"> <div class="input-group-prepend"> <button data-toggle="dropdown" type="button" class="btn btn-outline-secondary dropdown-toggle">Action <span class="caret"></span></button> <div class="dropdown-menu"> <a href=javascript:; class="dropdown-item item_edit" data="'+data[i].id+'">Edit</a> <a href="javascript:;" class="dropdown-item item_hapus" data="'+data[i].id+'">Hapus</a> </div> </div>'+'</td>'
                                +
                                '</tr>';
                    }
                    $('#list_data_rtrw').html(html);
                }
 
            });
        }
 
        //UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
            	type  : 'POST',
                url   : '<?php echo base_url('/tabel/getUserbyadmin')?>',
                async : true,
                dataType : 'json',
                data : {id:id},
                success: function(data){
                    $.each(data,function(username, nama, jenis_kelamin){
                    var klmn = (data.jenis_kelamin == "Pria") ? "2": "1";
                        $('#ModalaEdit').modal('show');
                        $('[name="kous_edit"]').val(data.username);
                        $('[name="nama_edit"]').val(data.nama);
                        $('#kelamin_edit').val(klmn);
                    });
                }
            });
            return false;
        });
 
 
        //HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });
 
        //Update
        $('#btn_update').on('click',function(){
            var nama=$('#nama_user').val();
            var ke=$('#kelamin_edit').val();
            var users=$('#username_id').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('tabel/update_user')?>",
                dataType : "JSON",
                data : {nama:nama , ke:ke ,users:users},
                success: function(data){
                    $('[name="nama_edit"]').val("");
                    $('#kelamin_edit').val("");
                    $('#kous_edit').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_user();
                }
            });
            return false;
        });
 
        //Hapus
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('tabel/hapusUserbyadmin')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_user();
                    }
                });
                return false;
            });
 
    });
    </script>
<?php }elseif ($this->session->userdata('privilages') == 'MEMBER'){ ?>
	<script>
    	$(document).ready(function(){
        tampil_data_user();  
        $('#mydata').dataTable();
          
      
        function tampil_data_user(){
            $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>tabel/getdatauser',
                async : true,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no = 1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                        		'<td>'+no+++'</td>'+
                                '<td>'+data[i].nama+'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].privilage+'</td>'+
                                '<td>'+data[i].jenis_kelamin+'</td>'+
                                '<td>'+data[i].tgl_daftar+'</td>'+
                                '<td>'+data[i].user_id+'</td>'+'<td>'+'<div class="input-group"> <div class="input-group-prepend"> <button data-toggle="dropdown" type="button" class="btn btn-outline-secondary dropdown-toggle">Action <span class="caret"></span></button> <div class="dropdown-menu"> <a href=javascript:; class="dropdown-item item_edit" data="'+data[i].user_id+'">Edit</a> <a href="javascript:;" class="dropdown-item item_hapus" data="'+data[i].username+'">Hapus</a> </div> </div>'+'</td>'
                                +
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
 
        //UPDATE
        $('#show_data').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : "<?php echo base_url('/tabel/getUser')?>",
                dataType : "JSON",
                data : {id:id},
                success: function(data){
                    $.each(data,function(username, nama, jenis_kelamin){
                    var klmn = (data.jenis_kelamin == "Pria") ? "2": "1";
                        $('#ModalaEdit').modal('show');
                        $('[name="kous_edit"]').val(data.username);
                        $('[name="nama_edit"]').val(data.nama);
                        $('#kelamin_edit').val(klmn);
                    });
                }
            });
            return false;
        });
 
 
        //HAPUS
        $('#show_data').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#ModalHapus').modal('show');
            $('[name="kode"]').val(id);
        });
 
        //Simpan
        $('#btn_simpan').on('click',function(){
            var namaid=$('#nama_id2').val();
            var usernameid=$('#username_ids2').val();
            var hakid=$('#hak_id').val();
            var kelaminid=$('#kelamin_input').val();
            var passwordid=$('#password_ids2').val();
            var emailid=$('#emailid2').serialize(); 
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('tabel/simpan_data_user')?>",
                dataType : "JSON",
                data : {namaid:namaid,usernameid:usernameid,hakid:hakid,kelaminid:kelaminid,passwordid:passwordid,emailid:emailid},
                success: function(data){
                    $('[name="nama_id"]').val("");
                    $('#username_ids2').val("");
                    $('#hak_id').val("");
                    $('#kelamin_input').val("");
                    $('#password_ids2').val("");
                    $('#emailid2').val("");
                    $('#ModalaAdd').modal('hide');
                    tampil_data_user();
                }
            });
            return false;
        });
 
        //Update
        $('#btn_update').on('click',function(){
            var nama=$('#nama_user').val();
            var ke=$('#kelamin_edit').val();
            var users=$('#username_id').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('tabel/update_user')?>",
                dataType : "JSON",
                data : {nama:nama , ke:ke ,users:users},
                success: function(data){
                    $('[name="nama_edit"]').val("");
                    $('#kelamin_edit').val("");
                    $('#kous_edit').val("");
                    $('#ModalaEdit').modal('hide');
                    tampil_data_user();
                }
            });
            return false;
        });
 
        //Hapus
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('tabel/hapusUser')?>",
            dataType : "JSON",
                    data : {kode: kode},
                    success: function(data){
                            $('#ModalHapus').modal('hide');
                            tampil_data_user();
                    }
                });
                return false;
            });
 
    });
    </script>
<?php } ?>
<script>
	$("#list-berita").hide();
	$("#form-berita").hide();
  $("#form-addrtrw").hide();
  $("#form-kegiatan").hide();
  $("#rtrw-info").hide();

  $(document).ready(function(){
    $("#list-rtrw").click(function(){
      $("#rtrw-info").fadeIn();
      $("#list-berita").fadeOut();
      $("#form-berita").fadeOut();
      $("#form-addrtrw").fadeOut();
      $("#form-kegiatan").fadeOut();
      $("#list-user").fadeOut();
    });
  });
	$(document).ready(function(){
		$("#user-info").click(function(){
			$("#list-user").fadeIn();
			$("#list-berita").fadeOut();
			$("#form-berita").fadeOut();
      $("#form-addrtrw").fadeOut();
      $("#form-kegiatan").fadeOut();
      $("#rtrw-info").fadeOut();
		});
	});
	$(document).ready(function(){
		$("#berita-info").click(function(){
			$("#list-user").fadeOut();
			$("#form-berita").fadeOut();
			$("#list-berita").fadeIn();
      $("#form-addrtrw").fadeOut();
      $("#form-kegiatan").fadeOut();
      $("#rtrw-info").fadeOut();
		});
	});
	$(document).ready(function(){
		$("#add-berita").click(function(){
			$("#list-user").fadeOut();
			$("#list-berita").fadeOut();
			$("#form-berita").fadeIn();
      $("#form-addrtrw").fadeOut();
      $("#form-kegiatan").fadeOut();
      $("#rtrw-info").fadeOut();
		});
	});
  $(document).ready(function(){
    $("#add-rtrw").click(function(){
      $("#list-user").fadeOut();
      $("#list-berita").fadeOut();
      $("#form-berita").fadeOut();
      $("#form-addrtrw").fadeIn();
      $("#form-kegiatan").fadeOut();
      $("#rtrw-info").fadeOut();
    });
  });
  $(document).ready(function(){
    $("#add-kegiatan").click(function(){
      $("#form-kegiatan").fadeIn();
      $("#list-berita").fadeOut();
      $("#form-berita").fadeOut();
      $("#form-addrtrw").fadeOut();
      $("#list-user").fadeOut();
      $("#rtrw-info").fadeOut();
    });
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
 $(document).ready(function(){
		$("#clear-form").click(function(event){
		 event.preventDefault();
		 $('.select2').val(null).trigger('change');
		 $('#goreadme').summernote('code', '');
		 $('#jdl-berita').val('');
		 $('#auth').val('');	
		});
	});
 $(document).ready(function() {
  $("#clear-keg").click(function (event){
    event.preventDefault();
    document.getElementById('proses-keg').reset();
  });
});
$(document).ready(function() {
  $("#clear-rt").click(function (event){
    event.preventDefault();
    document.getElementById('proses-rt').reset();
  });
});
$(document).ready(function() {
  $("#keg-select").change(function (event){
    var selected = $(this).children("option:selected").val();
    var form = $('#proses-keg')[0];
    // Create an FormData object 
        var data = new FormData(form);
    $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>Action_berita/get_kec",
            data: data,
            dataType:"json",
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {
            $('#kec-select').empty();
              $.each(data, function(i,item){
                $('#kec-select')
                  .append('<option>'+data[i].kecamatan+'</option>');
              });
            },
            error: function (e) {
              
            }
        });
  })
})

$(document).ready(function () {

    $("#input-rt").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#proses-rt')[0];

    // Create an FormData object 
        var data = new FormData(form);

    // If you want to add an extra field for the FormData
        //data.append("CustomField", "This is some extra data, testing");

    

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>Action_berita/inputdatartrw",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {

        $('#clear-rt').click();
              

            },
            error: function (e) {
                $("#input-rt").prop("disabled", false);

            }
        });

    });

});

$(document).ready(function () {

    $("#input-keg").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#proses-keg')[0];

    // Create an FormData object 
        var data = new FormData(form);

    // If you want to add an extra field for the FormData
        //data.append("CustomField", "This is some extra data, testing");

    

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>Action_berita/inputdatakegiatan",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {

        $('#clear-keg').click();
              

            },
            error: function (e) {
                $("#input-keg").prop("disabled", false);

            }
        });

    });

});

$(document).ready(function () {

    $("#berhenti").click(function (event) {

        //stop submit the form, we will post it manually.
        event.preventDefault();

        // Get form
        var form = $('#prosesing')[0];

		// Create an FormData object 
        var data = new FormData(form);

		// If you want to add an extra field for the FormData
        //data.append("CustomField", "This is some extra data, testing");

		

        $.ajax({
            type: "POST",
            enctype: 'multipart/form-data',
            url: "<?php echo base_url(); ?>Action_berita/inputdataberita",
            data: data,
            processData: false,
            contentType: false,
            cache: false,
            timeout: 600000,
            success: function (data) {

            	$('.select2').val(null).trigger('change');
				$('#goreadme').summernote('code', '');
				$('#jdl-berita').val('');
				$('#slg-berita').val('');
				$('#file-0').fileinput('clear');
				$('#auth').val('');
              

            },
            error: function (e) {
                $("#berhenti").prop("disabled", false);

            }
        });

    });

});

    $("#file-0").fileinput({
        theme: 'fas',
        showUpload: false,
        maxImageWidth: 260,
    	maxImageHeight: 260,
    	resizePreference: 'height',
    	maxFileCount: 1,
    	resizeImage: true
         });
</script>
  </body>
</html>  