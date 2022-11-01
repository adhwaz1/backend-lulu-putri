<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/news2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 08:07:39 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SMKN 1 Garut</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>tampilan/img/favicon.png">
    <!-- Normalize CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/css/normalize.css">
    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/css/main.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/css/bootstrap.min.css">
    <!-- Animate CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/css/animate.min.css">
    <!-- Font-awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/css/font-awesome.min.css">
    <!-- Owl Caousel CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/vendor/OwlCarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/vendor/OwlCarousel/owl.theme.default.min.css">
    <!-- Main Menu CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/css/meanmenu.min.css">
    <!-- nivo slider CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/vendor/slider/css/nivo-slider.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/vendor/slider/css/preview.css" type="text/css" media="screen" />
    <!-- Datetime Picker Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/css/jquery.datetimepicker.css">
    <!-- Select2 CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/css/select2.min.css">
    <!-- Magic popup CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/css/magnific-popup.css">
    <!-- Switch Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/css/hover-min.css">
    <!-- Nouislider Style CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/vendor/noUiSlider/nouislider.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>tampilan/style.css">
    <!-- Modernizr Js -->
    <script src="<?php echo base_url() ?>tampilan/js/modernizr-2.8.3.min.js"></script>
    <?php
        function limit_words($string, $word_limit){
            $words = explode(" ",$string);
            return implode(" ",array_splice($words,0,$word_limit));
        }
    ?>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- Add your site or application content here -->
    <div id="wrapper">
        <!-- Header Area Start Here -->
        <header>
            <div id="header2" class="header2-area">
                <div class="header-top-area">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-left">
                                   
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="header-top-right">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-menu-area bg-textPrimary" id="sticker">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-3">
                                <div class="logo-area">
                                    <img class="img-responsive" src="<?php echo base_url() ?>tampilan/img/logo.png" alt="logo" style="height:50px; width:50px">
                                    
                               </div>

                            </div>
                            <div class="col-lg-9 col-md-9 col-sm-9">
                            <nav id="desktop-nav">
                                <?php echo $header; ?>
                                </nav>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area Start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                           
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                <a href="index.html"><img class="logo-mobile-menu" src="<?php echo base_url() ?>tampilan/img/logo.png" alt="logo" style="height:50px; width:50px"></a>
                            
                                <?php echo $header; ?>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu Area End -->
        </header>
        <!-- Header Area End Here -->
        <!-- Inner Page Banner Area Start Here -->
        <div class="inner-page-banner-area" style="background-image: url('<?php echo base_url() ?>tampilan/img/banner/smkn1.jpg');">
            <div class="container">
                <div class="pagination-area">
                    <h1>Informasi</h1>
                    <ul>
                    <li>Daftar Download Informasi SMK 1 Garut</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Inner Page Banner Area End Here -->
        <!-- News Page Area Start Here -->
        <div class="news-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-9 col-sm-8 col-xs-12">
                        <div class="row">
                        <div class="col-md-12">
              <div class="table-responsive">
                <table class="table table-striped" id="display">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Berkas</th>
                      <th>Tanggal</th>
                      <th>Oleh</th>
                      <th style="text-align:right;">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no=1;
                      foreach ($data->result() as $row):
                    ?>
                    <tr>
                      <td><?php echo $no++;?></td>
                      <td><?php echo $row->file_judul;?></td>
                      <td><?php echo $row->tanggal;?></td>
                      <td><?php echo $row->file_oleh;?></td>
                      <td style="text-align:right;"><a href="<?php echo site_url('download/get_file/'.$row->file_id);?>" class="btn btn-info">Download</a></td>
                    </tr>
                  <?php endforeach;?>
                  </tbody>
                </table>
              </div>
            </div>

                            
                            
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- News Page Area End Here -->
        <!-- Footer Area Start Here -->
        <!-- Footer Area Start Here -->
        <footer>
            <div class="footer-area-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                <a href="#"><img class="img-responsive" src="<?php echo base_url() ?>tampilan/img/logo.png"></a>
                                <div class="footer-about">
                                    <p>SMK NEGERI 1 GARUT <br> JALAN CIMANUK NO 309 A
                                    Kecamatan Tarogong Kidul
                                    Kabupaten Garut
                                    Provinsi Jawa Barat</p>
                                </div>
                                <ul class="footer-social">
                                    <li><a href="https://www.facebook.com/SmkNegeri1Garut" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.youtube.com/channel/UClXQjtwnaRlwJV7-5kTNReQ" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.instagram.com/smkn1garut_official/?hl=id"  target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                   
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                            <div class="footer-box">
                            <h3>Link Terkait</h3>
                                <ul class="featured-links">
                                    <li>
                                        <ul>
                                        <li><a href="https://jabarprov.go.id/" target="_blank">Pemerintah Provinsi Jawa Barat</a></li>
                                            <li><a href="https://www.garutkab.go.id/" target="_blank">Pemerintah Kabupaten Garut</a></li>
                                            <li><a href="https://www.smknegeri1garut.sch.id/ppdbs/" target="_blank">PPDB</a></li>
                                            <li><a href="https://bnp2tki.go.id/" target="_blank">Lowongan Kerja</a></li>
                                            <li><a href="https://www.youtube.com/channel/UClXQjtwnaRlwJV7-5kTNReQ" target="_blank">Youtube SMKN 1 Garut</a></li>
                                           
                                        </ul>
                                    </li>
                                   
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="footer-box">
                                <h3>Informasi</h3>
                                <ul class="corporate-address">
                                    <li><i class="fa fa-phone" aria-hidden="true"></i><a href="Phone:(0262) 233316">(0262) 233316 </a></li>
                                    <li><i class="fa fa-google" aria-hidden="true"></i>www.smknegeri1garut.sch.id</li>
                                </ul>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-area-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                            <p><?php echo date('Y');?> © copyright SMK Negeri 1 Garut Created By <a target="_blank" href="http://andriansyah.my.id/">IT Staff</a></p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                            
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Area End Here -->
    </div>
    <!-- Preloader Start Here -->
    <div id="preloader"></div>
    <!-- Preloader End Here -->
    <!-- jquery-->
    <script src="<?php echo base_url() ?>tampilan/js/jquery-2.2.4.min.js" type="text/javascript"></script>
    <!-- Plugins js -->
    <script src="<?php echo base_url() ?>tampilan/js/plugins.js" type="text/javascript"></script>
    <!-- Bootstrap js -->
    <script src="<?php echo base_url() ?>tampilan/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- WOW JS -->
    <script src="<?php echo base_url() ?>tampilan/js/wow.min.js"></script>
    <!-- Nivo slider js -->
    <script src="<?php echo base_url() ?>tampilan/vendor/slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>tampilan/vendor/slider/home.js" type="text/javascript"></script>
    <!-- Owl Cauosel JS -->
    <script src="<?php echo base_url() ?>tampilan/vendor/OwlCarousel/owl.carousel.min.js" type="text/javascript"></script>
    <!-- Meanmenu Js -->
    <script src="<?php echo base_url() ?>tampilan/js/jquery.meanmenu.min.js" type="text/javascript"></script>
    <!-- Srollup js -->
    <script src="<?php echo base_url() ?>tampilan/js/jquery.scrollUp.min.js" type="text/javascript"></script>
    <!-- jquery.counterup js -->
    <script src="<?php echo base_url() ?>tampilan/js/jquery.counterup.min.js"></script>
    <script src="<?php echo base_url() ?>tampilan/js/waypoints.min.js"></script>
    <!-- Countdown js -->
    <script src="<?php echo base_url() ?>tampilan/js/jquery.countdown.min.js" type="text/javascript"></script>
    <!-- Isotope js -->
    <script src="<?php echo base_url() ?>tampilan/js/isotope.pkgd.min.js" type="text/javascript"></script>
    <!-- Select2 Js -->
    <script src="<?php echo base_url() ?>tampilan/js/select2.min.js" type="text/javascript"></script>
    <!-- Nouislider Js -->
    <script src="<?php echo base_url() ?>tampilan/vendor/noUiSlider/nouislider.min.js" type="text/javascript"></script>
    <!-- Validator js -->
    <script src="<?php echo base_url() ?>tampilan/js/validator.min.js" type="text/javascript"></script>
    <!-- Magic Popup js -->
    <script src="<?php echo base_url() ?>tampilan/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
    <!-- Custom Js -->
    <script src="<?php echo base_url() ?>tampilan/js/main.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>theme/js/jquery.dataTables.min.js" type="text/javascript"></script>
     <script src="<?php echo base_url() ?>theme/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
</body>


<!-- Mirrored from www.radiustheme.com/demo/html/academics/academics/news2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Jul 2020 08:07:44 GMT -->
</html>
