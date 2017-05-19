<!DOCTYPE html>
<html>
<title>Female Wardrobe  </title>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/w3.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-assets/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/bootstrap-assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/full-slider.css">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<script src="<?php echo base_url()?>assets/bootstrap-assets/js/jquery.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap-assets/js/bootstrap.js"></script>
<script src="<?php echo base_url()?>assets/bootstrap-assets/js/npm.js"></script>
<script src="<?php echo base_url()?>assets/js/index.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url()?>assets/js/custom.js"></script>

<body>
            
    <nav role="navigation" class="navbar navbar-default" style="top: 0; z-index: 100; position: fixed; width: 100%;">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- <div class="navbar-header"> -->
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#home" class="navbar-brand" style="font-family: Ampera; font-size: 28px;">Fauzia Makeup</a>
        </div>
        <!-- Collection of nav links and other content for toggling -->
        <div id="navbarCollapse" class="collapse navbar-collapse" style="float: right;">
          <!-- <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url()?>index.php/My_Controller/about" class="w3-bar-item w3-button">About</a> </li>
            <li><a href="<?php echo base_url()?>index.php/My_Controller/testimonial" class="w3-bar-item w3-button">Testimonial</a></li>
            <li><a href="<?php echo base_url()?>index.php/My_Controller/contact" class="w3-bar-item w3-button">Contact</a></li>
          </ul> -->
          <ul class="nav navbar-nav">
            <li><a href="#about" class="w3-bar-item w3-button">About</a> </li>
            <li><a href="#testimonial" class="w3-bar-item w3-button">Testimonial</a></li>
            <li><a href="#contact" class="w3-bar-item w3-button">Contact</a></li>
          </ul>
        </div>
    </nav>                           

<!-- Navbar (sit on top)
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card-2" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">Female Wardrobe</a>
    <!-- Right-sided navbar links. Hide them on small screens -->
    <!--<div class="w3-right w3-hide-small">

      <a href="<?php echo 'index.php/My_Controller/about'; ?>" class="w3-bar-item w3-button">About</a>
      <a href="<?php echo 'index.php/My_Controller/catalog'; ?>" class="w3-bar-item w3-button">Catalog</a>
      <a href="<?php echo 'index.php/My_Controller/contact'; ?>" class="w3-bar-item w3-button">Contact</a>
      <a href="#login" class="w3-bar-item w3-button">Login</a>
    </div>
  </div>
</div> -->

<!-- Full Page Image Background Carousel Header -->
    <header id="home" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#home" data-slide-to="0" class="active"></li>
            <li data-target="#home" data-slide-to="1"></li>
            <li data-target="#home" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for Slides -->
        <div class="carousel-inner">
            <div class="item active">
                <!-- Set the first background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo base_url()?>img/3.png'); background-color: black;"></div>
                <div class="carousel-caption">
                    <h2>Photoshoot after makeup</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the second background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo base_url()?>img/4.png'); background-color: black;"></div>
                <div class="carousel-caption">
                    <h2>Done by professionals</h2>
                </div>
            </div>
            <div class="item">
                <!-- Set the third background image using inline CSS below. -->
                <div class="fill" style="background-image:url('<?php echo base_url()?>img/2.png'); background-color: black;"></div>
                <div class="carousel-caption">
                    <h1>Wanted to know more? <b>Contact us</b></h1>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#home" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#home" data-slide="next">
            <span class="icon-next"></span>
        </a>

</header>

<!-- </header>
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
  <img class="img-responsive" alt="277" width="637" height="635" style="display: block; margin: auto;" src="<?php echo base_url().'img/2.png'; ?>" > -->
  <!-- <div class="w3-display-bottomleft w3-padding-large w3-opacity">-->
     <!--<h1 class="w3-xxlarge">Le Catering</h1>-->
   <!--</div> -->
 <!--</header> -->
  
  <hr>

<!-- Page content --> 
<div class="w3-content" style="max-width:1600px; max-height: 800px; background: url();">

  <!-- About Section --> 
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large">
      <img class="img-responsive" alt="about" width="1024" height="766" style="display: block; margin: auto; border: solid 10px; border-radius: 10px;" src="<?php echo base_url()?>img/1.png">
    </div>
    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center" style="font-family: Raleway-Black;">FAUZIA MAKEUP</h1><br>
      <h2 class="w3-center" style="font-family: Raleway-Medium;"><strong>Jasa Rias Wajah sejak 2010</strong></h2>
      <p class="w3-large" style="text-align: justify;">
      Fauzia Makeup berpusat di Gresik, tapi tetap menerima permintaan rias luar kota dalam lingkup Jawa Timur. Kepuasan pelanggan adalah acuan kami untuk terus berkembang.
      <br>
      Fauzia Makeup melayani permintaan rias untuk segala event mulai dari:</p>
      <ul class="w3-large" style="text-align: justify; list-style-image: url('<?php echo base_url()?>img/checklist2.png');">
        <li>Arisan</li> 
        <li>Wisuda</li>
        <li>Pernikahan</li>
        <li>Dan berbagai event lainnya</li> 
      </ul>
      <!-- <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p> -->
    </div>
  </div>
</div>
<br>
<hr>

<!-- Page content -->
<!-- <div class="w3-content" style="max-width:1100px"> -->
<!-- Testimonial Section -->
  <div class="w3-row" id="testimonial" style="margin: 0px;">
    <!-- <div class="w3-col l6 w3-padding-large" > -->
      <!-- <h1 class="w3-center">Testimonial</h1><br> -->
          
    
<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <div class="container" id="testimonial" style="background: #ffa221;">    
      <div class="row">
        <div class="col-md-12 column">    
          <h2 class="page-header" style="font-family: impact; color: black;">Testimonials<br><small style="font-family: courier; color: #fff;">apa kata mereka?</small></h2>
        
        <div class="carousel slide" id="testimonials-rotate">
          <ol class="carousel-indicators">
            <li class="active" data-slide-to="0" data-target="#testimonials-rotate"></li>
            <li data-slide-to="1" data-target="#testimonials-rotate"></li>
            <li data-slide-to="2" data-target="#testimonials-rotate"></li>
          </ol>

        <div class="carousel-inner">
        <div class="item active" style="background: #ffdc5e;">
        <br> 
        <div class="col-md-2"><img alt="" src="<?php echo base_url()?>img/t2.jpg" class="img-circle img-responsive"/></div>
        <div class="testimonials col-md-10">

          <h3 style="font-family: Georgia; color: black;">
            "Pelayanan yang baik dan ramah, tapi tetap profesional itu yang saya suka! Jangan ragu utk pake jasa mbak Fauzia!" <br><br>
            <b><i>- Diana</i></b>
          </h3>

        </div>

        <div class="clearfix"></div>
        </div>

        <div class="item" style="background: #ffdc5e;">  
        <br>
        <div class="col-md-2"><img alt="" src="<?php echo base_url()?>img/t4.jpg" class="img-circle img-responsive"/></div>
        <div class="testimonials col-md-10">

          <h3 style="font-family: Georgia; color: black;">
            "Harga sesuai dengan kualitas, nggak nyesel, malah pengen lagi kalo ada acara lagi. Sukses terus untuk Fauzia Makeup!" <br><br>
            <b><i>- Evi</i></b>
          </h3>

        </div>

        <div class="clearfix"></div>
        </div>

        <div class="item" style="background: #ffdc5e;">
        <br>
        <div class="col-md-2"><img alt="" src="<?php echo base_url()?>img/t3.jpg" class="img-circle img-responsive"/></div>
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
        <hr style="outline: solid;">
        </div>
</div><!--end of container-->
<!-- !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->

    <!-- <div class="w3-col l6 w3-padding-large">
      <img class="img-responsive" alt="about" width="1024" height="766" style="display: block; margin: auto;" src="<?php echo base_url()?>img/4.png">
    </div>
 -->
<hr>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">
<!-- Contact Section -->
  <div class="w3-container" id="contact">
    <h1>Contact Us</h1><br>
    <p>Kami menawarkan full-service makeup untuk segala event besar maupun kecil. Jangan ragu untuk menghubungi kami dan bertanya, kami akan menjawab kebutuhan anda secara profesional.</p>
    <p class="w3-text-blue-grey w3-large"><b>Fauzia Makeup, Perumahan ABR A5-01</b></p>
    <p>Anda juga dapat menghubungi kami by phone 0813-3249-6292 atau hubungi kami dengan mengirim pesan di:</p>
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

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="#" title="Female Wardrobe" target="_blank" class="w3-hover-text-green">5215100090</a></p>
</footer>

</body>
</html>