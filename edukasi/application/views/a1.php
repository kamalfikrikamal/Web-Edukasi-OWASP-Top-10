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
            <h2 class="mb-3 bread">A1:2017 Injection</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('./')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Injection <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 order-md-last ftco-animate">            
            <h2 class="mb-3 h1">A1:2017 Injection</h2>
            <p> Berdasarkan OWASP Top 10 2017, Injection secara umum dapat digambarkan seperti gambar dibawah ini : </p>
            <p> <img src="assets/images/t1.png" alt="" class="img-fluid"> 
            Berdasarkan gambar diatas, agen ancaman Injection bergantung kepada spesifikasi aplikasi yang dimiliki. 
            Kerentanan Injection dapat dieksploitasi secara mudah oleh agen ancaman dan memiliki skor 3 didalam OWASP Risk Rating.
            Kerentanan ini keberadaanya umum pada aplikasi-aplikasi dan mudah untuk dideteksi kerentanannya.
            Dampak teknis dari kerentanan Injetion termasuk kedalam dampak yang berat dan untuk dampak bisnis bergantung pada kebutuhan aplikasi dan data.
             </p>
            <p>Kerentanan injeksi, seperti injeksi SQL, NoSQL, OS dan LDAP, terjadi ketika data yang tidak terpercaya dikirim ke penerjemah sebagai bagian dari perintah atau kueri. Data tersebut dapat membuat aplikasi menjalankan perintah yang tidak diinginkan atau mengakses data tanpa otorisasi yang tepat. Pada kali ini, akan dijelaskan mengenai kerentanan SQL Injection yang ada pada sebuah aplikasi.</p>
            <h2 class="mb-3 h1">Kode rentan yang dapat menyebabkan SQL Injection adalah sebagai berikut :</h2>
            <p>Jika menggunakan kode tersebut, dapat menyebabkan attacker melakukan injeksi kode kedalam kueri SQL.</p>
            <figure>
              <figcaption>Contoh Source Code: </figcaption>
              <pre>
                <code>
                  String query = "SELECT account balance FROM user_data WHERE user_name = "
                  + request.getParameter("customerName");
                  
                  try {
                      Statement statement = connection.createStatement( ... );
                      ResultSet results = statement.executeQuery( query );
                  }
                </code>
              </pre>
            </figure>
            <h2 class="mb-3 h1">Cara melakukan eksploit SQL Injection pada sebuah aplikasi dapat digambarkan dari scenario dibawah ini seperti berikut :</h2>
            <p>
              <img src="assets/images/injection.png" alt="" class="img-fluid">
            </p>
            <p>Tautology Based Attack : Tujuan dari tautology based attack adalah untuk menginjeksi kode pada satu atau lebih baris perintah SQL dengan kondisi bersyarat sehingga baris perintah tersebut akan selalu dieksekusi dengan nilai benar atau true. </p>
            <p>Terdapat sebuah login form pada sebuah aplikasi, seorang attacker ingin melakukan bypass terhadap mekanisme otentikasi yang ada pada aplikasi tersebut. Untuk dapat melakukan bypass, attacker mengisi form login seperti berikut:</p>
            <p>attacker menuliskan field username dengan admin' or '1'='1'-- sedangkan untuk password diisi oleh attacker secara sembarang. Setelah attacker menekan tombol login, attacker akan berhasil melakukan bypass pada aplikasi tersebut.</p>
            <h2 class="mb-3 mt-5 h1">Mitigasi yang dapat dilakukan untuk menghindari adanya serangan SQL Injection adalah sebagai berikut:</h2>
            <p>
              <ol type="1">
                <li>Menggunakan Parameterized SQL Query atau prepared statement.</li>
                <li>Melakukan Pengecekan Pola (Pattern Check): Validasi input data</li>
                <li>Menambahkan Escape Karakter</li>
                <li>Menonaktifkan informasi pesan kesalahan aplikasi (error)</li>
              </ol> 
            </p>
            <h2 class="mb-3 mt-5 h1">Alasan mengapa mitigasi itu berhasil dilakukan dan proses mitigasi nya bagaimana</h2>
            <p>1. Penggunaan parameterized query ditujukan agar database dapat membedakan mana yang merupakan SQL statement dan mana yang merupakan data yang diinputkan oleh pengguna.
              <figure>
                <pre>
                  <code>
                    if (!($stmt = $mysqli->prepare("INSERT INTO test(id) VALUES (?)"))) {
                      echo "Prepare failed:(" . $mysqli->errno .") " . $mysqli->error;
                  }
                  </code>
                </pre>
              </figure>
            </p>
            <p>2. Dapat melakukan validasi input dengan menolak input data yang memang benar-benar diketahui tidak baik seperti berikut :</p>
            <p>
              <figure>
              <pre>
                <code>
                  [(' OR)] | ('(''|[^'])*')|(;)|((ALTER|CREATE|DELETE|DROP|EXECUTE){0,1}|INSERT
                  (+INTO){0,1}|MERGE|SELECT|UPDATE|UNION(+ALL){0,1})}]
                </code>
              </pre>
            </figure>
          </p>
            <p>3. Untuk menghindari kesalahan eksekusi dalam database, tambahkan karakter escape seperti back slash, misal (\’). Sehingga karakter single quote akan tetap diartikan sebagai single quote oleh database.</p>
            <p>4. Untuk menghindari Sql Injection, maka non-aktifkan mode debug pada aplikasi untuk mencegah pesan error yang ditampilkan dimanfaatkan oleh pihak penyerang.</p>
            <h2 class="mb-3 mt-5 h1">Saran dalam membangun software untuk kasus tersebut:</h2>
            <p>
              <figure>
                <pre>
                  <code>
                    // This should REALLY be validated too
                    String custname = request.getParameter("customerName");
                    // Perform input validation to detect attacks
                    Stri</p>ng query = "SELECT account_balance FROM user_data WHERE user_name = ? ";
                    PreparedStatement pstmt = connection.prepareStatement( query );
                    pstmt.setString( 1, custname);
                    ResultSet results = pstmt.executeQuery( );
                  </code>
                </pre>
              </figure>
            </p>
            <p><a href="https://juice-shop.herokuapp.com/"  class="btn btn-black py-3 px-4">Latihan Eksploit Web Rentan</a></p>
            <p><a href="<?php echo site_url('komentar/detail/1')?>" class="btn btn-black py-3 px-4">Forum Diskusi</a></p>
           <p>Sumber : </p>
           <p>OWASP Proactive Controls: Secure Database Access</p>
           <p>OWASP ASVS: V5 Input Validation and Encoding</p>
           <p>OWASP Testing Guide: SQL Injection, Command Injection, and ORM Injection</p>
           <p>OWASP Cheat Sheet: Injection Prevention</p>
           <p>OWASP Cheat Sheet: SQL Injection Prevention</p>
           <p>OWASP Cheat Sheet: Injection Prevention in Java</p>
           <p>OWASP Cheat Sheet: Query Parameterization</p>
           <p>OWASP Automated Threats to Web Applications – OAT-014</p>
              </div>
            </div>

          </div> <!-- .col-md-8 -->

        </div>
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