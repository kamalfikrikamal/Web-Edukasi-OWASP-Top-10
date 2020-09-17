<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
		#myBtn {
		display: none;
		position: fixed;
		bottom: 20px;
		right: 30px;
		z-index: 99;
		font-size: 18px;
		border: none;
		outline: none;
		background-color: red;
		color: white;
		cursor: pointer;
		padding: 15px;
		border-radius: 4px;
	}

		#myBtn:hover {
		background-color: #555;
		}

	</style>
    <title>BSSN</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">

    <link rel="stylesheet" href="assets/css/aos.css">

    <link rel="stylesheet" href="assets/css/ionicons.min.css">

    <link rel="stylesheet" href="assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="assets/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="assets/css/flaticon.css">
    <link rel="stylesheet" href="assets/css/icomoon.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
  <button onclick="topFunction()" id="myBtn" title="Go to top">Kembali Keatas</button>
	<script>
		//Get the button
		var mybutton = document.getElementById("myBtn");
		
		// When the user scrolls down 20px from the top of the document, show the button
		window.onscroll = function() {scrollFunction()};
		
		function scrollFunction() {
		  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
			mybutton.style.display = "block";
		  } else {
			mybutton.style.display = "none";
		  }
		}
		
		// When the user clicks on the button, scroll to the top of the document
		function topFunction() {
		  document.body.scrollTop = 0;
		  document.documentElement.scrollTop = 0;
		}
		</script>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?php echo site_url('login')?>">Login Admin</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="<?php echo site_url('about')?>" class="nav-link">About</a></li>
	        	<li class="nav-item active"><a href="<?php echo site_url('overview')?>" class="nav-link">OWASP Top 10</a></li>
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
            <h2 class="mb-3 bread">Risiko-Risiko Keamanan Aplikasi</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('overview')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Readme <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 order-md-last ftco-animate"> 
            <img src="assets/images/boi.png" style="float:left;" >            
            <h2 class="mb-3 h1">Apa Saja Risiko-Risiko Keamanan Aplikasi? </h2>
            <p>Penyerang berpotensi menggunakan berbagai macam cara melalui aplikasi untuk membahayakan bisnis atau organisasi Anda. Setiap cara mewakili risiko, yang mungkin cukup serius hingga memperoleh perhatian oleh orang-orang. </p>
            <p>Sebelum, menjelaskan bagaimana attacker melakukan penyerangan, pembaca harus mengerti terlebih dahulu istilah-istilah yang akan digunakan pada postingan di web ini.</p>
            <p>Untuk setiap risiko yang akan dijelaskan pada web ini, akan diberikan informasi umum mengenai kemungkinan dan dampak teknis dengan menggunakan skema penilaian sederhana berikut, yang berdasarkan pada OWASP Risk Rating Methodology.</p>
            
            <figure>
              <figcaption>Tabel Skema Penilaian Berdasarkan OWASP Risk Rating Methodology</figcaption>
                      <img src="assets/images/rate.png" class="img-fluid"> 
            </figure>
            
            <h2 class="mb-3 h1">1. Threat Agents: </h2>
            <p>Threat Agents atau juga dikenal dengan agen ancaman adalah pelaku yang melakukan penyerangan terhadap aplikasi. </p>
            <h2 class="mb-3 h1">2. Attack Vectors: </h2>
            <p>Attack Vectors adalah jalur atau cara yang dapat digunakan oleh attacker untuk melakukan penyerangan atau mengakses sebuah system. </p>
            <h2 class="mb-3 h1">3. Security Weaknesses: </h2>
            <p>
              Security weaknesses adalah kelemahan-kelemahan yang dapat dimanfaatkan oleh seorang penyerang
            </p>
            <h2 class="mb-3 mt-5 h1">4. Security Controls: </h2>
            <p>
              Security controls adalah parameter yang diterapkan untuk melindungi berbagai bentuk data dan infrastruktur yang penting bagi bisnis atau organisasi.
            </p>            
            <h2 class="mb-3 mt-5 h1">5. Technical Impact: </h2>
            <p>Technical impact adalah dampak teknis yang ditimbulkan dari gangguan terhadap sistem keamanan
            </p>
            <h2 class="mb-3 mt-5 h1">6. Business Impact: </h2>
            <p>
            Business impact adalah dampak yang ditimbulkan pada bidang bisnis dari gangguan terhadap kegiatan yang mendukung layanan keamanan
            </p>
            <h2 class="mb-3 mt-5 h1"># </h2>
            <p> Dengan adanya tabel diatas, diharapkan tabel tersebut dapat membantu pembaca web ini dalam menghitung kemungkinan dan dampak risiko yang ada pada aplikasi pembaca</p>
            <p>Setiap organisasi adalah unik, dan begitu pula aktor ancaman untuk organisasi tersebut, tujuan mereka, dan dampak dari pelanggaran apa pun</p>
            <p>Penting untuk memahami risiko bagi organisasi Anda berdasarkan agen ancaman dan dampak bisnis yang berlaku. Oleh karena itu, pada web ini akan memberikan informasi tersebut untuk memudahkan pembaca dalam memahami risiko bagi perusahaan atau organisasi pembaca</p>
           
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


  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="assets/js/popper.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/jquery.easing.1.3.js"></script>
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/owl.carousel.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>
  <script src="assets/js/aos.js"></script>
  <script src="assets/js/jquery.animateNumber.min.js"></script>
  <script src="assets/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
    
  </body>
</html>