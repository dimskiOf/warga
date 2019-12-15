<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Warga.com</title>

    <!-- Favicon -->
    <link rel="icon" href="<?php echo base_url();?>assets/img/core-img/favicon.ico">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/mainwindows.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/animate.css">

</head>

<body>
    <!-- Preloader -->
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Navbar Area -->
        <div class="mag-main-menu" id="sticker">
            <div class="classy-nav-container breakpoint-off">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="magNav">

                    <!-- Nav brand -->
                    <a href="<?php echo base_url();?>" class="nav-brand"><img src="<?php echo base_url();?>assets/img/core-img/logotest.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Nav Content -->
                    <div class="nav-content d-flex align-items-center">
                        <div class="classy-menu">

                            <!-- Close Button -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                             <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li class="active"><a href="<?php echo base_url();?>">Beranda</a></li>                                  
                                    <li><a href="<?php echo base_url();?>berita">Berita</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo base_url();?>">Politik</a></li>
                                            <li><a href="<?php echo base_url();?>archive">Pemerintah</a></li>
                                            <li><a href="<?php echo base_url();?>video-post">Hukum</a></li>
                                            <li><a href="<?php echo base_url();?>single-post">Kriminal</a></li>
                                            <li><a href="<?php echo base_url();?>about">Budaya</a></li>
                                            <li><a href="<?php echo base_url();?>contact">Lifestyle</a></li>
                                            <li><a href="<?php echo base_url();?>contact">Kesehatan</a></li>
                                            <li><a href="<?php echo base_url();?>login">Olahraga</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url();?>streaming">LIVE Streaming</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo base_url();?>index">Youtube</a></li>
                                            <li><a href="<?php echo base_url();?>archive">Radio</a></li>
                                        </ul>
                                    </li>   
                                    <li><a href="<?php echo base_url();?>informasi">Informasi RT & RW</a>
                                        <ul class="dropdown">
                                            <li><a href="<?php echo base_url();?>">Kegiatan</a></li>
                                            <li><a href="<?php echo base_url();?>archive">Data RT & RW</a></li>
                                            <li><a href="<?php echo base_url();?>video-post">UMKM RT & RW</a></li>
                                            <li><a href="<?php echo base_url();?>single-post">Kontak</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?php echo base_url();?>about">Tentang</a></li>
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <div class="top-meta-data d-flex align-items-center">
                            <!-- Top Search Area -->
                            <div class="top-search-area">
                                <form action="<?php echo base_url();?>" method="post">
                                    <input type="search" name="top-search" id="topSearch" placeholder="Cari Berita">
                                    <button type="submit" class="btn"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </form>
                            </div>
                            <!-- Login -->
                           <a href="<?php echo base_url();?>login" class="login-btn"> <i class="fa fa-user" aria-hidden="true" title="Login Akun"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->



    <!-- ##### Hero Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">
        <div class="konten mt-30 mb-30 p-30 box-shadow">
            <div class="row">
              <div class="column">
                <div class="card">
                  <div id="b1" class="hero-area owl-carousel" style="width: auto; height: auto;">

        <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="<?php echo base_url();?>assets/img/bg-img/22.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata"><font class="font-autosize">POLITIK</font></a>
                        </div>
                    </div>
                </div>
                </div>
              </div>

              <div class="column">
                <div class="card">
                  <div id="b2" class="hero-area owl-carousel" style="width: auto; height: auto;">

        <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="<?php echo base_url();?>assets/img/bg-img/22.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata"><font class="font-autosize">PEMERINTAH</font></a>
                        </div>
                    </div>
                 </div>
                </div>
              </div>
              
              <div class="column">
                <div class="card">
                  <div id="b3" class="hero-area owl-carousel" style="">

        <!-- Single Trending Post -->
                   <div class="single-trending-post">
                        <img src="<?php echo base_url();?>assets/img/bg-img/22.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata"><font class="font-autosize">HUKUM</font></a>
                        </div>
                    </div>
            </div>
                </div>
              </div>
              
              <div class="column">
                <div class="card">
                  <div id="b4" class="hero-area owl-carousel" style="">

        <!-- Single Trending Post -->
                   <div class="single-trending-post">
                        <img src="<?php echo base_url();?>assets/img/bg-img/22.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata"><font class="font-autosize">KRIMINAL</font></a>
                        </div>
                    </div>
            </div>
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="column">
                <div class="card">
                  <div id="b5" class="hero-area owl-carousel" style="width: auto; height: auto;">

        <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="<?php echo base_url();?>assets/img/bg-img/22.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata"><font class="font-autosize">BUDAYA</font></a>
                        </div>
                    </div>
                </div>
                </div>
              </div>

              <div class="column">
                <div class="card">
                  <div id="b8" class="hero-area owl-carousel" style="width: auto; height: auto;">

        <!-- Single Trending Post -->
                    <div class="single-trending-post">
                        <img src="<?php echo base_url();?>assets/img/bg-img/22.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata"><font class="font-autosize">LIFESTYLE</font></a>
                        </div>
                    </div>
                 </div>
                </div>
              </div>
              
              <div class="column">
                <div class="card">
                  <div id="b6" class="hero-area owl-carousel" style="">

        <!-- Single Trending Post -->
                   <div class="single-trending-post">
                        <img src="<?php echo base_url();?>assets/img/bg-img/22.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata"><font class="font-autosize">KESEHATAN</font></a>
                        </div>
                    </div>
            </div>
                </div>
              </div>
              
              <div class="column">
                <div class="card">
                  <div id="b7" class="hero-area owl-carousel" style="">

        <!-- Single Trending Post -->
                   <div class="single-trending-post">
                        <img src="<?php echo base_url();?>assets/img/bg-img/22.jpg" alt="">
                        <div class="post-content">
                            <a href="#" class="post-cata"><font class="font-autosize">OLAHRAGA</font></a>
                        </div>
                    </div>
                 </div>
                </div>
              </div>
            </div>     
        </div>        
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Mag Posts Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">

        <!-- >>>>>>>>>>>>>>>>>>>>
             Main Posts Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <?php 
          foreach($iniisinyaberita as $databerita)
                { 
        ?>
        <div class="mag-berita-content mt-30 mb-30 p-30 box-shadow">
        <!-- Single Blog Post -->

                <div class="single-trending-post">
                        <img src="<?php echo base_url();?>assets/img/bg-img/22.jpg" alt="" style="height: 400px;">
                        <div class="post-content">
                    </div>                   
                </div>
                <div class="single-featured-post">
                        <!-- Post Contetnt -->
                    
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#"><?php echo $databerita['tgl']; ?></a>
                                <a href="#"><?php echo $databerita['kategori_berita']; ?></a>
                            </div>
                            <a href="#" class="post-title"><?php echo $databerita['judul']; ?></a>
                            <p><?php echo $databerita['konten']; ?></p>
                        </div>
                        <!-- Post Share Area -->
                        <div class="post-share-area d-flex align-items-center justify-content-between">
                            <!-- Post Meta -->
                            <div class="post-meta pl-3">
                                <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 1034</a>
                                <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 834</a>
                                <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 234</a>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
        </div>

        <!-- >>>>>>>>>>>>>>>>>>>>
         Post Right Sidebar Area
        <<<<<<<<<<<<<<<<<<<<< -->
        <div class="post-sidebar-area right-sidebar mt-30 mb-30 box-shadow">
            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Social Followers Info -->
                <div class="social-followers-info">
                    <!-- Facebook -->
                    <a href="#" class="facebook-fans"><i class="fa fa-facebook"></i> 4,360 <span>Fans</span></a>
                    <!-- Twitter -->
                    <a href="#" class="twitter-followers"><i class="fa fa-twitter"></i> 3,280 <span>Followers</span></a>
                    <!-- YouTube -->
                    <a href="#" class="youtube-subscribers"><i class="fa fa-youtube"></i> 1250 <span>Subscribers</span></a>
                    <!-- Google -->
                    <a href="#" class="google-followers"><i class="fa fa-google-plus"></i> 4,230 <span>Followers</span></a>
                </div>
            </div>

            <!-- Sidebar Widget -->
            <div class="single-sidebar-widget p-30">
                <!-- Section Title -->
                <div class="section-heading">
                    <h5>Kategori</h5>
                </div>

                <!-- Catagory Widget -->
                <ul class="catagory-widgets">
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Politik</span> <span>0</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Pemerintah</span> <span>0</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Hukum</span> <span>0</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Kriminal</span> <span>0</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Budaya</span> <span>0</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Lifestyle</span> <span>0</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Kesehatan</span><span>0</span></a></li>
                    <li><a href="#"><span><i class="fa fa-angle-double-right" aria-hidden="true"></i>Olahraga</span><span>0</span></a></li>
                </ul>
            </div>
             <div class="single-sidebar-widget p-30">
                <div class="section-heading">
                    <h5>Mitra Kami</h5>
                </div>
                <div class="single-blog-post d-flex">
            <div class="single-sidebar-widget">
               <br> <a href="#a" class="add-img"><img src="<?php echo base_url();?>assets/img/core-img/bri.png" alt=""></a>
            </div></div>
            <div class="single-blog-post d-flex">
            <div class="single-sidebar-widget">
              <br>  <a href="#b" class="add-img"><img src="<?php echo base_url();?>assets/img/core-img/bjb.png" alt=""></a>
            </div></div>
            <div class="single-blog-post d-flex">
             <div class="single-sidebar-widget">
               <br> <a href="#a" class="add-img"><img src="<?php echo base_url();?>assets/img/core-img/bpjs-ketenagakerjaan.jpg" alt=""></a>
            </div></div>
            <div class="single-blog-post d-flex"></div>
        </div>
        </div>
    </section>
    <!-- ##### Mag Posts Area End ##### -->

        <!-- ##### Hero Area Start ##### -->
    <section class="mag-posts-area d-flex flex-wrap">
        <div class="konten mt-30 mb-30 p-30 box-shadow">
              <!-- Sports Videos -->
            <div class="sports-videos-area">
                <!-- Section Title -->
                <div class="section-heading">
                    <center><h5>JUDUL</h5></center>
                </div>

                <div class="neptune owl-carousel mb-30">
                    <!-- Single Featured Post -->
                    <div class="single-featured-post">
                        <!-- Thumbnail -->
                        <div class="post-thumbnail mb-50">
                            <img src="<?php echo base_url();?>assets/img/bg-img/22.jpg" alt="">
                            <a href="<?php echo base_url();?>video-post"></a>
                        </div>
                        <!-- Post Contetnt -->
                        <div class="post-content">
                            <div class="post-meta">
                                <a href="#">MAY 8, 2019</a>
                                <a href="<?php echo base_url();?>archive">lifestyle</a>
                            </div>
                            <a href="<?php echo base_url();?>video-post" class="post-title">Judul Berita</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <!-- Logo -->
                        <a href="index.html" class="foo-logo"><img src="<?php echo base_url();?>assets/img/core-img/logotest.png" alt=""></a>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <div class="footer-social-info">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Kategori</h6>
                        <nav class="footer-widget-nav">
                            <ul>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Life Style</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tech</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Travel</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Music</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Foods</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Fashion</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Game</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Football</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Sports</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i> TV Show</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Sport Videos</h6>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="<?php echo base_url();?>assets/img/bg-img/12.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="<?php echo base_url();?>single-post" class="post-title">Take A Romantic Break In A Boutique Hotel</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Blog Post -->
                        <div class="single-blog-post style-2 d-flex">
                            <div class="post-thumbnail">
                                <img src="<?php echo base_url();?>assets/img/bg-img/13.jpg" alt="">
                            </div>
                            <div class="post-content">
                                <a href="<?php echo base_url();?>single-post" class="post-title">Travel Prudently Luggage And Carry On</a>
                                <div class="post-meta d-flex justify-content-between">
                                    <a href="#"><i class="fa fa-eye" aria-hidden="true"></i> 34</a>
                                    <a href="#"><i class="fa fa-thumbs-o-up" aria-hidden="true"></i> 84</a>
                                    <a href="#"><i class="fa fa-comments-o" aria-hidden="true"></i> 14</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Widget Area -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="footer-widget">
                        <h6 class="widget-title">Channels</h6>
                        <ul class="footer-tags">
                            <li><a href="#">Travel</a></li>
                            <li><a href="#">Fashionista</a></li>
                            <li><a href="#">Music</a></li>
                            <li><a href="#">DESIGN</a></li>
                            <li><a href="#">NEWS</a></li>
                            <li><a href="#">TRENDING</a></li>
                            <li><a href="#">VIDEO</a></li>
                            <li><a href="#">Game</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Lifestyle</a></li>
                            <li><a href="#">Foods</a></li>
                            <li><a href="#">TV Show</a></li>
                            <li><a href="#">Twitter Video</a></li>
                            <li><a href="#">Playing</a></li>
                            <li><a href="#">clips</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Copywrite Area -->
        <div class="copywrite-area">
            <div class="container">
                <div class="row">
                    <!-- Copywrite Text -->
                    <div class="col-12 col-sm-6">
                        <p class="copywrite-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="" aria-hidden="true"></i> by <a href="" target="_blank">Developer-Teamter</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div>
                    <div class="col-12 col-sm-6">
                        <nav class="footer-nav">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Privacy</a></li>
                                <li><a href="#">Advertisement</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="<?php echo base_url();?>assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="<?php echo base_url();?>assets/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url();?>assets/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="<?php echo base_url();?>assets/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="<?php echo base_url();?>assets/js/active.js"></script>
</body>

</html>