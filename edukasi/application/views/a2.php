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
            <h2 class="mb-3 bread">A2:2017</h2>
            <h2 class="mb-3 bread">Broken Authentication</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('./')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Broken Authentication <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 order-md-last ftco-animate">            
            <h2 class="mb-3 h1">A2:2017 Broken Authentication</h2>
            <p> <img src="assets/images/t2.png" alt="" class="img-fluid"> 
            Berdasarkan gambar diatas, agen ancaman kerentanan Broken Authentication bergantung kepada spesifikasi aplikasi yang dimiliki. 
            Kerentanan Broken Authentication dapat dieksploitasi secara mudah oleh agen ancaman dan memiliki skor 3 didalam OWASP Risk Rating.
            Kerentanan ini keberadaanya umum pada aplikasi-aplikasi dan memiliki skor rata-rata untuk dideteksi kerentanannya.
            Dampak teknis dari kerentanan Broken Authentication termasuk kedalam dampak yang berat dan untuk dampak bisnis bergantung kepada aplikasi.
             </p>

            <p>Penyerang memiliki akses ke ratusan atau jutaan nama pengguna yang valid dan kombinasi kata sandi untuk pengisian kredensial, administrasi default, daftar akun, brute-force, dan dictionary attack. Manajemen sesi serangan harus dipahami, terutama dalam kaitannya dengan token sesi yang belum kedaluwarsa.</p>
            <p>Prevalensi broken authentication tersebar luas karena desain dan implementasi sebagian besar dari identitas dan kontrol akses. Pengelolaan sesi adalah landasan otentikasi dan akses kontrol, dan ada di semua aplikasi stateful.</p>
            <p>Penyerang dapat mendeteksi otentikasi yang cacat menggunakan cara manual dan memanfaatkannya dengan menggunakan alat otomatis dengan daftar kata sandi dan serangan dictionary.</p>
            <h2 class="mb-3 h1">Cara melakukan eksploit Broken Authentication pada sebuah aplikasi dapat digambarkan dari scenario dibawah ini seperti berikut:</h2>
            <p>
              <img src="assets/images/brokenauth.png" alt="" class="img-fluid">
            </p>
            <p>Scenario #1 : Pengisian kredensial, penggunaan daftar kata serangan sandi yang dikenal, adalah serangan yang umum. Jika aplikasi tidak menerapkan ancaman otomatis atau perlindungan isian kredensial, aplikasi dapat digunakan sebagai oracle sandi atau password oracle untuk menentukan apakah kredensial itu valid.</p>
            <p>Scenario #2: Waktu tunggu sesi aplikasi atau timeout session tidak disetel dengan benar. Seorang pengguna menggunakan komputer publik untuk mengakses aplikasi. Namun pengguna tersebut terlupa untuk melakukan "logout", pengguna hanya menutup tab browser dan pergi. Penyerang menggunakan browser yang sama satu jam kemudian, dan pengguna masih diautentikasi.</p>
            <h2 class="mb-3 mt-5 h1">Mitigasi yang dapat dilakukan untuk menghindari adanya kerentanan Broken Authentication adalah sebagai berikut:</h2>
            <p>
              <ol type="1">
                <li>Terapkan otentikasi multi-faktor untuk mencegah pengisian otomatis, kredensial, dan pencurian kredensial menggunakan re-use attack. Multi-faktor Authentication sejauh ini merupakan pertahanan terbaik terhadap sebagian besar serangan yang berkaitan dengan password atau kata sandi termasuk serangan brute-force, dengan analisis yang dilakukan oleh Microsoft menunjukkan bahwa itu akan menghentikan 99,9% penyusupan akun.</li>
                <li>Jangan mengirim atau menyebarkan dengan kredensial default apa pun, khususnya untuk pengguna admin.</li>
                <li>Menerapkan pemeriksaan kata sandi yang lemah, seperti pengujian baru atau mengubah kata sandi terhadap daftar 10.000 teratas kata sandi terburuk.</li>
                <li>Sejajarkan panjang sandi, kompleksitas, dan kebijakan rotasi dengan Pedoman NIST 800-63 B Guidelines di bagian 5.1.1 for memorized secrets or other modern, evidence-based password policies.</li>
                <li>Pastikan pendaftaran, pemulihan kredensial, dan jalur API tersedia dipeerkuat terhadap serangan pencacahan akun dengan menggunakan pesan yang sama untuk semua hasil.</li>
                <li>Membatasi atau menunda upaya login yang gagal. Catat semua kegagalan dan beri tahu administrator saat memasukkan kredensial, brute force, atau serangan lain yang terdeteksi.</li>
                <li>Gunakan sisi server, aman, manajer sesi built-in yang menghasilkan ID sesi acak baru dengan entropi tinggi setelah login. ID sesi tidak boleh ada di URL, disimpan dengan aman dan tidak valid setelah waktu keluar atau logout.</li>
              </ol> 
            </p>
            <h2 class="mb-3 mt-5 h1">Saran dalam membangun software untuk kasus tersebut:</h2>
            <p>Berikut contoh kode yang baik, untuk menghindari kerentanan broken authentication :
              <figure>
                <pre>
                  <code>
                    // Generate password hash
                      var salt = bcrypt.genSaltSync();
                      var passwordHash = bcrypt.hashSync(password, salt);

                      // Create user document
                      var user = {
                          userName: userName,
                          firstName: firstName,
                          lastName: lastName,
                          password: passwordHash
                      };
                  </code>
                </pre>
              </figure>
            </p>
        
            <p><a href="https://juice-shop.herokuapp.com/#/" class="btn btn-black py-3 px-4">Latihan Eksploit Web Rentan</a></p>
            <p><a href="<?php echo site_url('komentar/detail/2')?>" class="btn btn-black py-3 px-4">Forum Diskusi</a></p>
            <p>Sumber</p>
            <p>OWASP Proactive Controls: Implement Identity and Authentication Controls</p>
            <p>OWASP ASVS: V2 Authentication, V3 Session Management  </p>
            <p>OWASP Testing Guide: Identity, Authentication  </p>
            <p>OWASP Cheat Sheet: Authentication  </p>
            <p>OWASP Cheat Sheet: Credential Stuffing  </p>
            <p>OWASP Cheat Sheet: Forgot Password  </p>
            <p>OWASP Cheat Sheet: Session Management </p>
            <p>OWASP Automated Threats Handbook  </p>
            <p>NIST 800-63b: 5.1.1 Memorized Secrets  </p>
            <p>CWE-287: Improper Authentication  </p>
            <p>CWE-384: Session Fixation  </p>

      </div>
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

