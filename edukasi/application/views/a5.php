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
  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>
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
            <h2 class="mb-3 bread">A5:2017</h2>
            <h2 class="mb-3 bread"> Broken Access Control</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('./')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Broken Access Control <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 order-md-last ftco-animate">            
            <h2 class="mb-3 h1">A5:2017 Broken Access Control</h2>
            <p> Berdasarkan OWASP Top 10 2017, Broken Access Control secara umum dapat digambarkan seperti gambar dibawah ini : </p>
            <p> <img src="assets/images/t5.png" alt="" class="img-fluid"> 
            Berdasarkan gambar diatas, agen ancaman kerentanan Broken Access Control bergantung kepada spesifikasi aplikasi yang dimiliki. 
            Kerentanan Broken Access Control memiliki skor rata-rata untuk dapat dieksploitasi oleh agen ancaman dan memiliki skor 2 didalam OWASP Risk Rating.
            Kerentanan ini keberadaanya umum pada aplikasi dan memiliki skor rata-rata untuk dideteksi kerentanannya.
            Dampak teknis dari kerentanan Broken Access Control termasuk kedalam dampak yang berat dan untuk dampak bisnis bergantung kepada aplikasi.
             </p>
            <p>
              <img src="assets/images/bac.png" alt="" class="img-fluid">
            </p>
            <p>
              <ol type="1">
                <li>Melewati pemeriksaan kontrol akses dengan memodifikasi URL, status aplikasi internal, atau halaman HTML, atau cukup menggunakan alat serangan API khusus</li>
                <li>Mengizinkan kunci utama untuk diubah ke pengguna lain merekam, mengizinkan melihat atau mengedit akun orang lain</li>
                <li>Peninggian hak istimewa. Bertindak sebagai pengguna tanpa masuk, atau bertindak sebagai admin saat masuk sebagai pengguna</li>
                <li>Manipulasi metadata, seperti memutar ulang atau merusak sebuah JSON Web Token (JWT) token kontrol akses atau cookie atau bidang tersembunyi dimanipulasi untuk meningkatkan hak istimewa, atau menyalahgunakan JWT penghapusan</li>
                <li>Kesalahan konfigurasi CORS memungkinkan akses API yang tidak sah.</li>
                <li>Paksa penjelajahan ke halaman yang diautentikasi sebagai tidak diautentikasi pengguna atau ke halaman istimewa sebagai pengguna standar. Mengakses API dengan kontrol akses yang hilang untuk POST, PUT dan DELETE.</li>
              </ol> 
            </p>
            <h2 class="mb-3 h1">Kode rentan yang dapat menyebabkan Broken Access Control adalah sebagai berikut :</h2>
            <p>
              Skenario # 1: Aplikasi menggunakan data yang belum diverifikasi dalam panggilan SQL yang mengakses informasi akun:
              <figure>
                <figcaption>Contoh Source Code: </figcaption>
                <pre>
                  <code>
                    pstmt.setString (1, request.getParameter ("acct"));
                    Hasil ResultSet = pstmt.executeQuery ();
                  </code>
                </pre>
              </figure>

              Seorang penyerang cukup mengubah parameter 'acct' di browser menjadi kirim nomor rekening apapun yang mereka inginkan. Jika tidak benar diverifikasi, penyerang dapat mengakses akun pengguna mana pun.
              <figure>
                <figcaption>Contoh Source Code: </figcaption>
                <pre>
                  <code>
                    http://example.com/app/accountInfo?acct=notmyacct
                  </code>
                </pre>
              </figure>

              Skenario # 2: Penyerang memaksa penjelajahan ke URL target. Hak admin diperlukan untuk mengakses halaman admin.
              <figure>
                <figcaption>Contoh Source Code: </figcaption>
                <pre>
                  <code>
                    http://example.com/app/getappInfo
                    http://example.com/app/admin_getappInfo
                  </code>
                </pre>
              </figure>
              Jika pengguna yang tidak diautentikasi dapat mengakses salah satu halaman, itu cacat. Jika sebuah non-admin dapat mengakses halaman admin, ini cacat.
            </p>
            
            <h2 class="mb-3 h1">Bagaimana mitigasi untuk Broken Access Control?</h2>
            <p>
              <ul>
                <li>Melakukan pembagian jenis pengguna.</li>
                <li>Tentukan terlebih dahulu daftar kontrol akses dan hak yang dimilkinya.</li>
                <li>Jangan hanya menyembunyikan fungsi tapi lakukan pengamanan pada fungsi tersebut.</li>
              </ul> 
            </p>
            <p><a href="https://juice-shop.herokuapp.com/" class="btn btn-primary py-3 px-4">Latihan Eksploit Web Rentan</a></p>
            <p><a href="<?php echo site_url('komentar/detail/5')?>" class="btn btn-primary py-3 px-4">Forum Diskusi</a></p>
           
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