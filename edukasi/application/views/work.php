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
    
    <link href="assets/https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="assets/https://fonts.googleapis.com/css?family=Barlow+Condensed:900&display=swap" rel="stylesheet">
    <link href="assets/https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">

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
	        	<li class="nav-item active"><a href="<?php echo site_url('work')?>" class="nav-link">OWASP Top 10</a></li>
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
            <h2 class="mb-3 bread">OWASP Top 10</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('./')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>OWASP Top 10 <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-portfolio">
    	<div class="container">
    		<div class="row">
			<div class="col-md-6 portfolio-wrap ftco-animate">
					<div class="row align-items-center">
						<div class="col-md-12">
							<div class="img js-fullheight" style="background-image: url(assets/images/rd.png);">
							</div>
						</div>
						<div class="col-md-12">
							<div class="text">
								<div class="px-0 pt-5">
									<div class="desc">
										<div class="top top-relative">
											<span class="subheading"></span>
											<h2 class="mb-4"><a href="<?php echo site_url('readme')?>">Read me first! Before you start reading the other post here</a></h2> 
										</div>
										<div class="absolute relative">
											<p>Baca terlebih dahulu postingan ini, untuk mempermudah pembaca dalam memahami apa yang ada di website ini!</p>
											<p><a href="<?php echo site_url('readme')?>" class="custom-btn">Lebih Lengkap</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	  			<div class="col-md-6 portfolio-wrap ftco-animate">
	  				<div class="row align-items-center">
	  					<div class="col-md-12">
		  					<div class="img js-fullheight" style="background-image: url(assets/images/work-1.png);">
		  						
		  					</div>
	  					</div>
	  					<div class="col-md-12">
	  						<div class="text">
	  							<div class="px-0 pt-5">
	  								<div class="desc">
		  								<div class="top top-relative">
			  								<span class="subheading">A1:2017</span>
				  							<h2 class="mb-4"><a href="<?php echo site_url('a1')?>">Injection</a></h2> 
			  							</div>
			  							<div class="absolute relative">
				  							<p>Kerentanan Injection seperti SQL, NoSQL, OS, dan Injeksi LDAP, terjadi saat data tidak terpercaya dikirim kepada interpreter sebagai bagian dari perintah atau query.</p>
				  							<p><a href="<?php echo site_url('a1')?>" class="custom-btn">Lebih Lengkap</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="col-md-6 portfolio-wrap ftco-animate">
	  				<div class="row align-items-center">
	  					<div class="col-md-12">
		  					<div class="img js-fullheight" style="background-image: url(assets/images/work-2.png);">
		  						
		  					</div>
	  					</div>
	  					<div class="col-md-12">
	  						<div class="text">
	  							<div class="px-0 pt-5">
	  								<div class="desc">
		  								<div class="top top-relative">
			  								<span class="subheading">A2:2017</span>
				  							<h2 class="mb-4"><a href="<?php echo site_url('a2')?>">Broken Authentication</a></h2>
			  							</div>
			  							<div class="absolute relative">
				  							<p>Sering kali fungsi aplikasi berupa autentikasi dan manajemen session diimplementasikan secara keliru sehingga mengakibatkan attacker dapat membocorkan password, kunci, atau session token atau juga untuk melakukan eksploitasi kerawanan lain untuk menentukan akun user baik bersifat sementara atau tetap.</p>
				  							<p><a href="<?php echo site_url('a2')?>" class="custom-btn">Lebih Lengkap</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="col-md-6 portfolio-wrap ftco-animate">
	  				<div class="row align-items-center">
	  					<div class="col-md-12">
		  					<div class="img js-fullheight" style="background-image: url(assets/images/work-3.png);">
		  						
		  					</div>
	  					</div>
	  					<div class="col-md-12">
	  						<div class="text">
	  							<div class="px-0 pt-5">
	  								<div class="desc">
		  								<div class="top top-relative">
			  								<span class="subheading">A3:2017</span>
				  							<h2 class="mb-4"><a href="<?php echo site_url('a3')?>">Sensitive Data Exposure</a></h2>
			  							</div>
			  							<div class="absolute relative">
				  							<p>Banyaknya aplikasi web dan API yang tidak mengamankan data sensitif secara benar mengakibatkan terjadinya pencurian atau pengubahan data oleh attacker.</p>
				  							<p><a href="<?php echo site_url('a3')?>" class="custom-btn">Lebih Lengkap</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="col-md-6 portfolio-wrap ftco-animate">
	  				<div class="row align-items-center">
	  					<div class="col-md-12">
		  					<div class="img js-fullheight" style="background-image: url(assets/images/work-4.png);">
		  						
		  					</div>
	  					</div>
	  					<div class="col-md-12">
	  						<div class="text">
	  							<div class="px-0 pt-5">
	  								<div class="desc">
		  								<div class="top top-relative">
			  								<span class="subheading">A4:2017</span>
				  							<h2 class="mb-4"><a href="<?php echo site_url('a4')?>">XML External Entities (XXE) </a></h2>
			  							</div>
			  							<div class="absolute relative">
				  							<p>Banyaknya XML prosesor yang belum update atau dikonfigurasi secara asal mengakibatkan referensi entitas luar ikut dievaluasi bersama dokumen XML yang dapat berujung pada bocornya file internal.</p>
				  							<p><a href="<?php echo site_url('a4')?>" class="custom-btn">Lebih Lengkap</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  			<div class="col-md-6 portfolio-wrap ftco-animate">
	  				<div class="row align-items-center">
	  					<div class="col-md-12">
		  					<div class="img js-fullheight" style="background-image: url(assets/images/work-5.png);">
		  						
		  					</div>
	  					</div>
	  					<div class="col-md-12">
	  						<div class="text">
	  							<div class="px-0 pt-5">
	  								<div class="desc">
		  								<div class="top top-relative">
			  								<span class="subheading">A5:2017</span>
				  							<h2 class="mb-4"><a href="<?php echo site_url('a5')?>">Broken Access Control</a></h2>
			  							</div>
			  							<div class="absolute relative">
				  							<p>Kesalahan pembatasan hak akses kepada pengguna terautentikasi mengakibatkan attacker dapat mendapatkan akses untuk menggunakan fungsi dan/atau data yang bukan aksesnya.</p>
				  							<p><a href="<?php echo site_url('a5')?>" class="custom-btn">Lebih Lengkap</a></p>
			  							</div>
		  							</div>
	  							</div>
	  						</div>
	  					</div>
	  				</div>
	  			</div>
	  		</div>
    	</div>

    </section>

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
  <script src="assets/https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="assets/js/google-map.js"></script>
  <script src="assets/js/main.js"></script>
    
  </body>
</html>