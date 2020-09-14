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
            <h2 class="mb-3 bread">A3:2017</h2>
            <h2 class="mb-3 bread">Sensitive Data Exposure</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('./')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Sensitive Data Exposure <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 order-md-last ftco-animate">            
            <h2 class="mb-3 h1">A3:2017 Sensitive Data Exposure</h2>

            <p> Berdasarkan OWASP Top 10 2017, Sensitive Data Exposure secara umum dapat digambarkan seperti gambar dibawah ini : </p>
            <p> <img src="assets/images/t3.png" alt="" class="img-fluid"> 
            Berdasarkan gambar diatas, agen ancaman kerentanan Sensitive Data Exposure bergantung kepada spesifikasi aplikasi yang dimiliki. 
            Kerentanan Sensitive Data Exposure memiliki skor rata-rata untuk dapat dieksploitasi oleh agen ancaman dan memiliki skor 2 didalam OWASP Risk Rating.
            Kerentanan ini keberadaanya tersebar pada aplikasi-aplikasi dan memiliki skor rata-rata untuk dideteksi kerentanannya.
            Dampak teknis dari kerentanan Sensitive Data Exposure termasuk kedalam dampak yang berat dan untuk dampak bisnis bergantung kepada aplikasi.
             </p>

            <p>Pada kerawanan ini, penyerang lebih banyak melakukan kegiatan seperti pencurian kunci, menjalankan man-in-the-middle attack, atau mencuri data plain teks yang ditransmisikan dari server, ketika sedang ditransmisikan, atau dari pengguna.</p>
            <p>Serangan ini menjadi salah satu serangan yang berdampak besar dalam beberapa tahun terakhir. Kesalahan yang umum yang dapat membuka celah untuk serangan ini adalah tidak mengenkripsi data yang bersifat sensitif. Selain itu, menyimpan data penting pada source code untuk kunci_rahasia, token, password, atau salt juga memberi celah pada kerawanan ini.</p>
            <p>Penyerang dapat mendeteksi otentikasi yang cacat menggunakan cara manual dan memanfaatkannya dengan menggunakan alat otomatis dengan daftar kata sandi dan serangan dictionary.Serangan ini juga dapat terjadi jika menggunakan algoritma yang lemah atau teknik penyimpanan kata sandi yang lemah. Serangan ini membahayakan semua data atau informasi yang seharusnya dilindungi. Informasi tersebut biasanya berupa kata sandi, catatan kesehatan, data pribadi dan sebagainya.</p>
            <p>
              Berikut ini adalah contoh kode yang rentan terhadap kerawanan Sensitive Data Exposure:
              <p>
                1. Penyimpanan data sensitif yaitu kata sandi dalam bentuk clear text. Jika source code ditulis demikian, maka data yang tersimpan pada database akan berbentuk clear text, misalkan untuk nilai password.
              </p>
              <figure>
                <pre>
                  <code>
                    $username = mysqli_real_escape_string($_POST[$username]);
                    $password = mysqli_real_escape_string($_POST[$password]);
                    $sql = "INSERT INTO tbl_login (username, password) VALUES ('$username', '$password')";
                  </code>
                </pre>
              </figure>
            </p>
            <h2 class="mb-3 h1">Cara melakukan eksploit Broken Authentication pada sebuah aplikasi dapat digambarkan dari scenario dibawah ini seperti berikut:</h2>
            <p>
            <p>
              2. Penggunaan algoritma yang lemah atau tanpa salt.
              <figure>
                <pre>
                  <code>
                    $hash = hash('md5', $password);
                  </code>
                </pre>
              </figure>
              Penggunaan algoritma yang lemah seperti md5 atau SHA-1 dapat dengan mudah di-crack menggunakan rainbow tables. Fungsi hash yang lemah dapat juga dapat di-crack menggunakan GPU emskipun menggunakan salt. Tidak adanya salt membuat hash lebih mudah di-crack karena salt berfungsi untuk menambah nilai yang unik pada data sehingga akan mempersulit penyerang.
            </p>
            <p>
              3. Penyimpanan nilai-nilai sensitif pada source code.
              <figure>
                <pre>
                  <code>
                    $salt = "P3nd3k4r54w0"
                  </code>
                </pre>
              </figure>
            </p>
              <img src="assets/images/sensi.png" alt="" class="img-fluid">
            </p>
            <p>Cara penyerang mengeksploit berdasarkan kerawanan ini adalah jika pengembang tidak melindungi data sensitif pada database lalu penyerang berhasil mengakses database misalkan menggunakan SQL injection, maka semua data tersebut berada dalam bahaya.</p>
            <p>Selain itu, penggunaan algoritma yang lemah dapat memperlebar celah kerawanan untuk penyerang. Penyerang juga dapat melihat celah kerawanan dari penulisan source code oleh pengembang. Ia dapat memanfaatkan nilai-nilai penting yang ditulis oleh pengembang seperti nilai salt yang didefinisikan pada source code sehingga membantu penyerang mencapai tujuannya.</p>
            <h2 class="mb-3 mt-5 h1">Mitigasi yang dapat dilakukan untuk menghindari adanya kerentanan Sensitive Data Exposure adalah sebagai berikut:</h2>
            <p>
              Mitigasi yang dapat dilakukan untuk mengurangi resiko kerawanan ini adalah sebagai berikut :
              <ol type="1">
                <li>Klasifikasikan data yang diproses, disimpan atau ditransmisikan oleh aplikasi anda. Identifikasi juga data yang dianggap sensitif.</li>
                <li>Pastikan semua data yang perlu dilindungi dienkripsi dengan baik.</li>
                <li>Hindari penggunaan algoritma yang lemah</li>
                <li>Simpan Data sensitif menggunakan algoritma hashing yang kuat serta penambahan salt.</li>
                <li>Hindari penyimpanan nilai nilai yang sensitif pada source code.</li>
              </ol> 
              Mitigasi yang disebutkan diatas dapat membantu menurunkan resiko kerawanan karena data-data yang bersifat sensitif dilindungi dengan enkripsi sehingga meskipun penyerang memiliki akses ke database namun ia tidak akan mendapatkan informasi yang penting. 
            </p>
            <p>Pemilihan algoritma untuk melakukan hashing dan/atau salting juga berpengaruh pada kerawanan ini. pemilihan algoritma yang lemah seperti md5 atau SHA-1 tidak disarankan karena algoritma tersebut sudah dapat di-crack dengan mudah. Selain itu, perlu diperhatikan juga penulisan pada source code anda. jangan menyimpan nilai-nilai yang sensitif pada source code</p>
            <h2 class="mb-3 mt-5 h1">Saran Pembangunan Software</h2>
            <p>Data yang dianggap sensitif harus diklasifikasikan dan dilindungi contohnya data password dengan algoritma yang lebih kuat. Penyimpanan nilai-nilai yang sensitif harus dihindari seperti nilai untuk $salt yang didefinisikan pada source code.</p>
            <p>Mengingat prinsip Kerckhoffs, hal ini dilakukan agar terhindar dari kemungkinan penyerang memiliki akses ke source code (terutama jika dikembangkan menggunakan free/open source software) sehingga disarankan agar menggunakan salt yang dibangkitkan secara random serta penambahan pepper.</p>
            <p>Atau untuk hasil yang lebih optimal dapat menggunakan Bcrypt yang membagkitkan salt secara default tanpa perlu menyimpan nilai salt pada database, karena salt sudah termasuk dalam nilai hash.</p>
            <p>Berikut contoh kode yang baik, untuk menghindari kerentanan broken authentication :
              <figure>
                <pre>
                  <code>
                    $hash = password_hash($password, PASSWORD_DEFAULT);
                  </code>
                </pre>
              </figure>
            </p>
            <p><a href="https://juice-shop.herokuapp.com/#/" class="btn btn-black py-3 px-4">Latihan Eksploit Web Rentan</a></p>
            <p><a href="<?php echo site_url('komentar/detail/3')?>" class="btn btn-black py-3 px-4">Forum Diskusi</a></p>
            
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