<!DOCTYPE html>
<html lang="en">
  <head>
    <title>BSSN</title>
    <meta charset="utf-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style type="text/css">
        .container {
            padding-left: 15%;
            padding-right: 15%;
        }
        .child{
             margin-left: 50px;
        }
        .modal {
            width: 40% !important;
        }
        textarea {
            width: 100%;
            height: 80px;
        }
    </style>
    
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900')?>" rel="stylesheet">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Barlow+Condensed:900&display=swap')?>" rel="stylesheet">
    <link href="<?php echo base_url('https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap')?>" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/open-iconic-bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/animate.css')?>">
    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/magnific-popup.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/aos.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/ionicons.min.css')?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/jquery.timepicker.css')?>">

    
    <link rel="stylesheet" href="<?php echo base_url('assets/css/flaticon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/icomoon.css')?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css')?>">
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
      <a class="navbar-brand" href="<?php echo site_url('login')?>">Login Admin</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
          
	        	<li class="nav-item"><a href="<?php echo site_url('about')?>" class="nav-link">About</a></li>
	        	<li class="nav-item"><a href="<?php echo site_url('work')?>" class="nav-link">OWASP Top 10</a></li>
	          <li class="nav-item"><a href="<?php echo site_url('contact')?>" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
          <div class="col-md-9 ftco-animate pb-5">
            
            <h2 class="mb-3 bread"> Forum Diskusi</h2>
                   </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
    <body>
    <section class="ftco-section2">
    <div class="container">
        <h1><?php echo $content_title;?></h1>
        <hr>
        <?php echo $content_body;?>
        <div class="w3-panel w3-blue">
            <p>Kolom Komentar:</p>
        </div>
        <form method="POST" action="<?php echo site_url('komentar/kirim') ?>">
            <div class="w3-row-padding">
                <div class="w3-half">
                    <input type="hidden" value="<?php echo $content_id;?>" name="id">
                    <input class="w3-input w3-border" type="text" placeholder="Nama" name="nama">
                </div>
                <div class="w3-half">
                    <input class="w3-input w3-border" type="email" placeholder="Email" name="email">
                </div>
            </div>
            <div class="w3-padding">
                <textarea style="width: 100%;" name="isi"></textarea>
            </div>
            <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Kirim Komentar</button>
        </form>
    </div>
    <?php
        $content_id =  $content_id;
        $query = $this->db->query("SELECT * FROM table_comment WHERE comment_status='0' AND comment_content_id = '$content_id'");
        foreach ($query->result() as $utama):
    ?>
    <div class="container">
        <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue">
            <p>
                <b><?php echo $utama->comment_nama?></b>
                <br><?php echo $utama->comment_isi?>
                <br><button class="w3-button w3-tiny w3-blue" onclick="document.getElementById('<?php echo $utama->comment_id?>').style.display='block'">Balas</button>
            </p>
        </div>
    </div>
        <?php
            $content_id = $content_id;
            $comment_id=$utama->comment_id;
            $query = $this->db->query("SELECT * FROM table_comment WHERE comment_status='$comment_id' AND comment_content_id = '$content_id'");
            foreach ($query->result() as $balasan):
        ?>
        <div class="container">
            <div class="w3-panel w3-pale-blue w3-leftbar w3-border-blue child">
                <p>
                    <b><?php echo $balasan->comment_nama?></b>
                    <br><?php echo $balasan->comment_isi?>
                </p>
            </div>
        </div>
        <?php endforeach;?>
        <div id="<?php echo $utama->comment_id?>" class="w3-modal">
            <div class="w3-modal-content modal">
                <header class="w3-container w3-blue">
                    <span onclick="document.getElementById('<?php echo $utama->comment_id?>').style.display='none'" class="w3-button w3-display-topright">&times;</span>
                    <h2>Balas Komentar</h2>
                </header>
                <div class="w3-container">
                    <form class="w3-container" method="POST" action="<?php echo site_url('komentar/balas') ?>">
                        <input type="hidden" name="comment_id" value="<?php echo $utama->comment_id?>">
                        <input type="hidden" name="content_id" value="<?php echo $content_id?>">
                        <div class="w3-section">
                            <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Nama" name="nama" required>
                            <input class="w3-input w3-border" type="email" placeholder="Email" name="email" required> 
                            <br>         
                            <textarea style="width: 100%;" name="isi"></textarea>
                            <button class="w3-button w3-block w3-blue w3-section w3-padding" type="submit">Kirim</button>
                        </div>
                    </form>
                </div>
                <footer class="w3-container w3-blue w3-border-top w3-padding-16"></footer>
            </div>
        </div>
    <?php endforeach;?>
</body>
           </section>
    </section> <!-- .section -->

    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Badan Siber dan Sandi Negara adalah lembaga pemerintah Republik Indonesia yang didirikan pada tahun 2017. </p>
              <p>BSSN mempunyai tugas melaksanakan keamanan siber secara efektif dan efisien dengan memanfaatkan, mengembangkan, dan mengonsolidasikan semua unsur yang terkait dengan keamanan siber.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="https://twitter.com/bssn_ri"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="https://www.facebook.com/badansiberdansandinegara/"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://www.instagram.com/bssn_ri/"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Jalan Raya Muchtar 70
                    Duren Mekar, Bojong Sari, Depok
                    16518</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+6221 77973360</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">humas[at]bssn.go.id</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery-migrate-3.0.1.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/popper.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.easing.1.3.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.waypoints.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.stellar.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/owl.carousel.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.magnific-popup.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/aos.js')?>"></script>
  <script src="<?php echo base_url('assets/js/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo base_url('assets/js/scrollax.min.js')?>"></script>
  <script src="<?php echo base_url('assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false')?>"></script>
  <script src="<?php echo base_url('assets/js/google-map.js')?>"></script>
  <script src="<?php echo base_url('assets/js/main.js')?>"></script>
    
  </body>
</html>