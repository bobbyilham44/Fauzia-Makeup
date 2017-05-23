<!DOCTYPE html>
<html>
<head>
<title>Fauzia Makeup  </title>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/full-slider.css">


<!-- template portfolio / gallery -->
<link href="<?php echo base_url()?>assets/gallery/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/gallery/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url()?>assets/gallery/css/agency.min.css" rel="stylesheet">

<style>
  @font-face {
    font-family: Ampera;
    src: url(<?php echo base_url()?>assets/fonts/ampera.ttf);
}

@font-face {
    font-family: Raleway-Black;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-Black.ttf);
}

@font-face {
    font-family: Raleway-BlackItalic;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-BlackItalic.ttf);
}

@font-face {
    font-family: Raleway-Medium;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-Medium.ttf);
}

@font-face {
    font-family: Raleway-MediumItalic;
    src: url(<?php echo base_url()?>assets/fonts/Raleway-MediumItalic.ttf);
}

@font-face {
    font-family: Lato-Regular;
    src: url(<?php echo base_url()?>assets/fonts/Lato-Regular.ttf);
}

@font-face {
    font-family: Lato-Bold;
    src: url(<?php echo base_url()?>assets/fonts/Lato-Bold.ttf);
}

@font-face {
    font-family: Lato-Black;
    src: url(<?php echo base_url()?>assets/fonts/Lato-Black.ttf);
}
</style>

</head>
<body>
<!--..................................................HEADER..................................................-->
    <nav role="navigation" class="navbar navbar-default" style="top: 0; z-index: 500; position: fixed; width: 100%;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#home" class="navbar-brand" style="font-family: Ampera; font-size: 28px;">Fauzia Makeup</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse" style="float: right;">
          <ul class="nav navbar-nav">
            <li><a href="#about" class="w3-bar-item w3-button ">About</a> </li>
            <li><a href="#portfolio" class="w3-bar-item w3-button ">Gallery</a> </li>
            <li><a href="#testimonial" class="w3-bar-item w3-button ">Testimonial</a></li>
            <li><a href="#contact" class="w3-bar-item w3-button ">Contact</a></li>
          </ul>
        </div>
    </nav>                           

<!--..................................................SLIDER..................................................-->
    <header id="home" class="carousel slide">
        <!-- Indicators -->
        <!-- <ol class="carousel-indicators">
            <li data-target="#home" data-slide-to="0" class="active"></li>
            <li data-target="#home" data-slide-to="1"></li>
            <li data-target="#home" data-slide-to="2"></li>
        </ol> -->

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
          <?php 
          $active = true;
          foreach ($data as $x) { ?>
            <div class="item <?php if($active){
              echo 'active';
              }else{
                echo '';
                } ?>"> 
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo base_url().$x['gambar_slider']; ?>'); background-color: black;"></div>
                <div class="carousel-caption">
                    <h2><?php echo $x['caption_slider']; ?></h2>
                </div>
            </div>
            
            <?php $active=false;} ?> 
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#home" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#home" data-slide="next">
            <span class="icon-next"></span>
        </a>

</header>

<!--..................................................ABOUT..................................................-->

<!-- Page content --> 
<div class="w3-content" id="about" style="max-width:1600px; max-height: 800px;">

  <!-- About Section --> 
  <div class="w3-row w3-padding-64">
    <div class="w3-col m6 w3-padding-large">
      <img class="img-responsive" alt="about" width="1024" height="766" style="display: block; margin: auto; border: solid 10px; border-radius: 10px;" src="<?php echo base_url()?>img/1.png">
    </div>
    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center" style="font-family: Raleway-Black;">FAUZIA MAKEUP</h1><br>
      <h2 class="w3-center" style="font-family: Lato-Regular;"><strong>Jasa Rias Wajah sejak 2010</strong></h2>
      <p class="w3-large" style="text-align: justify;">
      Fauzia Makeup berpusat di Gresik, tapi tetap menerima permintaan rias luar kota dalam lingkup Jawa Timur. Kepuasan pelanggan adalah acuan kami untuk terus berkembang.
      <br>
      Fauzia Makeup melayani permintaan rias untuk segala event mulai dari:</p>
      <ul class="w3-large" style="text-align: justify; list-style-image: url('<?php echo base_url()?>img/arrow.png');">
        <li><span style="vertical-align: top;">Arisan</span></li> 
        <li><span style="vertical-align: top;">Wisuda</span></li>
        <li><span style="vertical-align: top;">Pernikahan</span></li>
        <li><span style="vertical-align: top;">Dan berbagai event lainnya</span></li> 
      </ul>
      <!-- <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
    </div>
  </div>
</div>
<!-- <hr> -->
  <div class="w3-row" >
  </div>
<!--..................................................GALLERY..................................................-->

<!-- Portfolio Grid Section -->
    <section id="portfolio" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading" style="font-family: Raleway-Black;">Gallery</h2>
                    <h3 class="section-subheading text-muted">Beberapa contoh hasil pekerjaan kami</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal1" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url()?>img/p7.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Full Makeup</h4>
                        <p class="text-muted">Graduation</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal2" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url()?>img/p3.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Facial Makeup</h4>
                        <p class="text-muted">Party</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal3" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url()?>img/p5.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Full Makeup</h4>
                        <p class="text-muted">Gathering</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal4" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url()?>img/p10.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Full Makeup<</h4>
                        <p class="text-muted">Graduation</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal5" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url()?>img/p11.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Before & After</h4>
                        <p class="text-muted">Wedding Party</p>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 portfolio-item">
                    <a href="#portfolioModal6" class="portfolio-link" data-toggle="modal">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content">
                                <i class="fa fa-plus fa-3x"></i>
                            </div>
                        </div>
                        <img src="<?php echo base_url()?>img/p1.jpg" class="img-responsive" alt="">
                    </a>
                    <div class="portfolio-caption">
                        <h4>Before & After</h4>
                        <p class="text-muted">Graduation</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio Modals -->
    <!-- Use the modals below to showcase details about your portfolio projects! -->

    <!-- Portfolio Modal 1 -->
    <div class="portfolio-modal modal" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <img class="img-responsive img-centered" src="<?php echo base_url()?>img/p8.jpg" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 2 -->
   <div class="portfolio-modal modal" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <img class="img-responsive img-centered" src="<?php echo base_url()?>img/p4.jpg" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 3 -->
    <div class="portfolio-modal modal" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <img class="img-responsive img-centered" src="<?php echo base_url()?>img/p6.jpg" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 4 -->
    <div class="portfolio-modal modal" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <img class="img-responsive img-centered" src="<?php echo base_url()?>img/p10.jpg" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 5 -->
    <div class="portfolio-modal modal" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <img class="img-responsive img-centered" src="<?php echo base_url()?>img/p11.jpg" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Modal 6 -->
    <div class="portfolio-modal modal" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-dismiss="modal">
                    <div class="lr">
                        <div class="rl">
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-lg-offset-2">
                            <div class="modal-body">
                                <!-- Project Details Go Here -->
                                <img class="img-responsive img-centered" src="<?php echo base_url()?>img/p2.jpg" alt="">
                                <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
          
    
<!--................................................TESTIMONIALS................................................-->

  <div class="container" id="testimonial">    
      <div class="row">
        <div class="col-md-12 column">    
          <h2 class="page-header" style="font-family: Raleway-Black; font-size: 35px;"><b>TESTIMONIALS</b><br><small style="font-family: Lato-Regular;">apa kata mereka?</small></h2>
        
        <div class="carousel slide" id="testimonials-rotate">
          <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#testimonials-rotate"></li>
            <li data-slide-to="1" data-target="#testimonials-rotate"></li>
            <li data-slide-to="2" data-target="#testimonials-rotate"></li>
          </ol>

        <div class="carousel-inner">
        <div class="item active" style="border: solid 5px;">
        <br> 
        <div class="col-md-2" style="bottom: 10px;"><img alt="" src="<?php echo base_url()?>img/t2.jpg" class="img-circle img-responsive"/></div>
        <div class="testimonials col-md-10">

          <h3 style="font-family: Georgia; color: black;">
            "Pelayanan yang baik dan ramah, tapi tetap profesional itu yang saya suka! Jangan ragu utk pake jasa mbak Fauzia!" <br><br>
            <b><i>- Diana</i></b>
          </h3>

        </div>

        <div class="clearfix"></div>
        </div>

        <div class="item" style="border: solid 5px;">
        <br> 
        <div class="col-md-2" style="bottom: 10px;"><img alt="" src="<?php echo base_url()?>img/t4.jpg" class="img-circle img-responsive"/></div>
        <div class="testimonials col-md-10">

          <h3 style="font-family: Georgia; color: black;">
            "Harga sesuai dengan kualitas, nggak nyesel, malah pengen lagi kalo ada acara lagi. Sukses terus untuk Fauzia Makeup!" <br><br>
            <b><i>- Evi</i></b>
          </h3>

        </div>

        <div class="clearfix"></div>
        </div>

        <div class="item" style="border: solid 5px;">
        <br> 
        <div class="col-md-2" style="bottom: 10px;"><img alt="" src="<?php echo base_url()?>img/t3.jpg" class="img-circle img-responsive"/></div>
        <div class="testimonials col-md-10">

          <h3 style="font-family: Georgia; color: black;">
            "Pernah nyoba rias di tempat lain, tapi hasilnya kurang memuaskan. Beda banget sama Fauzia Makeup, pekerjaannya rapi dan cepet banget, nggak perlu berjam-jam hasilnya udah keliatan, recommended!" <br><br>
            <b><i>- Ria</i></b>
          </h3>

        </div>

        <div class="clearfix"></div>
        </div>
        </div>
        </div>

        <div class="pull-right">
          <a class="left" href="#testimonials-rotate" data-slide="prev"><span><img src="<?php echo base_url()?>img/left.png""></span></a>
          <a class="right" href="#testimonials-rotate" data-slide="next"><span><img src="<?php echo base_url()?>img/right.png""></span></a>
        <div class="clearfix"></div>  
        </div>
        </div>
        </div>
  </div><hr> 

<!--..................................................CONTACT..................................................-->

<!-- Page content -->
<div class="w3-content" style="max-width:1000px" id="contact">
<!-- Contact Section -->
  <div class="w3-container">
    <h1 style="font-family: Raleway-Black; text-align: center; font-size: 35px;">Contact Us</h1><br>
    <p style="font-family: Lato-Regular; font-size: 20px;">Kami menawarkan full-service makeup untuk segala event besar maupun kecil. Jangan ragu untuk menghubungi kami dan bertanya, kami akan menjawab kebutuhan anda secara profesional.</p>
    <p class="w3-text-blue-grey w3-large"><b>Fauzia Makeup, Perumahan ABR A5-01</b></p>
    <p style="font-family: Lato-Regular;">Anda juga dapat menghubungi kami by phone 0813-3249-6292 atau hubungi kami dengan mengirim pesan di:</p>
    <?php echo form_open(site_url('My_Controller/create'));?>
    <form method="POST" name="komentar">
      <p><b>Nama</b></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Ex: John" required name="Name"></p>
      <p><b>Reply Email</b></p>
      <p><input class="w3-input w3-padding-16" type="email" placeholder="Ex: yourname@mail.com" required name="Email"></p>
      <p><b>Jumlah Orang</b></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Ex: 1 orang" required name="People"></p>
      <p><b>Tanggal dan Waktu Rias</b></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Ex: 1 Januari 2018" required name="Date"></p>
      <p><b>Pesan</b></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Masukkan pesan anda disini" required name="Message"></p>
      <p><button type="submit" name="submit" value="Submit" class="btn btn-default">Send Message</button></p>
    </form>
    <!-- <div style="position: absolute; top: 100px; z-index: 1000; background-color: yellow;">
      <?php echo $this->session->flashdata('sukses'); ?> -->
    </div>
    <!-- <?php echo $_SESSION['sukses'] ?> -->
  </div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="#" title="" target="_blank" class="w3-hover-text-green">5215100090</a></p>
</footer>
    
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url()?>assets/bootstrap-assets/js/npm.js"></script>
    <script src="<?php echo base_url()?>assets/js/index.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.easing.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/custom.js"></script>
    <script src="<?php echo base_url()?>assets/gallery/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/gallery/vendor/bootstrap/js/bootstrap.min.js"></script>




</body>
</html>