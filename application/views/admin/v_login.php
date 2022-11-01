<html>
<head>
<title>SMK Negeri 1 Garut</title>
<link rel="icon" href="#" />
<link href="<?php echo base_url() ?>assets/halaman_login/css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url() ?>tampilan/img/favicon.png">
<!-- Custom Theme files -->
<link href="<?php echo base_url() ?>assets/halaman_login/css/style.css" rel="stylesheet" type="text/css" media="all" />
      <script type="text/javascript" src="<?php echo base_url() ?>assets/halaman_login/js/jquery-1.9.1.min.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/halaman_login/js/jssor.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/halaman_login/js/jssor.slider.js"></script>
      <script type="text/javascript" src="<?php echo base_url() ?>assets/halaman_login/js/a.js"></script>
<!-- Custom Theme files -->
<script src="<?php echo base_url() ?>assets/halaman_login/js/jquery.min.js"></script>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pie Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
<!-- Owl Stylesheets -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/halaman_login/css/flexslider.css" type="text/css" media="screen" />
 <script type="text/javascript" src="<?php echo base_url() ?>assets/halaman_login/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url() ?>assets/halaman_login/js/easing.js"></script>
<script type="text/javascript">
      jQuery(document).ready(function($) {
        $(".scroll").click(function(event){   
          event.preventDefault();
          $('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
        });
      });
    </script>
<!--Animation-->
<script src="<?php echo base_url() ?>assets/halaman_login/js/wow.min.js"></script>
<link href="<?php echo base_url() ?>assets/halaman_login/css/animate.css" rel='stylesheet' type='text/css' />
<script>
  new WOW().init();
</script>
</head>
<body>
  <!-- header-section-starts -->
  <div class="header" id="home">
    <div class="container">
      <div class="call wow fadeInRight" data-wow-delay="0.4s">

        
      </div>


      
      <span class="menu"></span>
      <div class="top-menu wow fadeInLeft" data-wow-delay="0.4s">
        
      </div>
        <!-- script for menu -->
        <script>
        $( "span.menu" ).click(function() {
          $( ".top-menu" ).slideToggle( "slow", function() {
            // Animation complete.
          });
        });
      </script>
      <!-- script for menu -->

      <div class="clearfix"></div>
    </div>
  </div>  

  <div class="content">

          <div class="contact-bottom text-center">
            <img style="margin-top: 20px;" width="120"  src="<?php echo base_url() ?>tampilan/img/logo.png">
            <h2 >Selamat Datang Di</h2>
            <h2 >SMK Negeri 1 Garut</h2>
          </div>
        
          
    <div class="container wow fadeInLeft"  data-wow-delay="0.8s"><hr/>
        <div style="margin-left:0px;" class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                    <?php echo $this->session->flashdata('msg');?>
                        <h3 class="panel-title">Silahkan Masuk</h3>
                    </div>
                    <div class="panel-body">
                  <form action="<?php echo site_url().'admin/login/auth'?>" method="post">
                                <div class="form-group">
                                    <input class="form-control" name="username"  placeholder="Username"  type="text" required="">

                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="password" placeholder="Password"  type="password" required>
                                </div>
                                <div class="checkbox">
                     
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="submit"  class="btn btn-lg btn-info btn-block" value="login">
                                
                Masuk
                                </button>
                 
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

      
        
          
          <div class="contact-bottom text-center">
          <h4> hubungi kami  : </h4>
          <p class="call wow fadeInRight" data-wow-delay="0.4s"><i class="phone wow fadeInLeft" data-wow-delay="0.4s"></i> (0262) 233316</p>
            
          </div>
        
      
    </div>
    <div class="footer">
      <div class="container">
        <div class="copyright text-center wow bounceInLeft" data-wow-delay="0.4s">
          <p>Copyright <?php echo date('Y');?> SMKN 1 Garut by IT Staff SMKN 1 Garut </p>
        </div>
      </div>
    </div>
    <script type="text/javascript">
            $(document).ready(function() {
              /*
              var defaults = {
                  containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
              };
              */
              
              $().UItoTop({ easingType: 'easeOutQuart' });
              
            });
          </script>
          <a class="scroll" href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
</body>
</html>