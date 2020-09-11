<!DOCTYPE html>
<html lang="en">
  <head>
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
            <h2 class="mb-3 bread">A4:2017</h2>
            <h2 class="mb-3 bread">XML External Entities (XXE)</h2>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?php echo site_url('./')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>XML External Entities (XEE) <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10 order-md-last ftco-animate">            
            <h2 class="mb-3 h1">A4:2017 XML External Entities (XXE) </h2>
            <p>Penyerang dapat melakukan eksploitasi kerawanan kepada pemrosesan XML jika mereka dapat mengunggah XML atau memasukkan kode-kode jahat pada dokumen XML untuk mengeksploitasi kode yang memiliki kerawanan.</p>
            <p>XXE dapat terjadi biasanya karena banyak XML lama yang mengizinkan spesifikasi yang berasal dari entitas eksternal, yaitu URL yang sedang ditangguhkan dan dievaluasi selama pemrosesan XML. SAST (Source Code Analysis Tools) dapat menemukan masalah ini dengan memeriksa konfigurasinya. tester manual perlu mengetahui cara menguji kerawanan XXE, karena pada tahun 2017 masih belum umum untuk diuji.</p>
            <p>Dampak dari kerawanan ini adalah dapat digunakan untuk mengekstrak data, menjalankan permintaan untuk dapat mengendalikan server dari jarak jauh, memindai sistem internal, melakukan serangan DOS (denial-of-service), serta serangan lainnya.</p>
            <h2 class="mb-3 h1">Cara melakukan eksploit XML External Entities dapat digambarkan dari scenario dibawah ini seperti berikut :</h2>
            <p>
                <img src="assets/images/xxe.png" alt="" class="center">
              <p>Scenario #1 : Penyerang mencoba untuk mengekstrak data dari server</p>
              <figure>
                <pre>
                  <code>
                    &lt;?xml version="1.0" encoding="ISO-8859-1"?&gt;
                    &lt;!DOCTYPE foo[
                    &lt;!ELEMENT foo ANY &gt;
                    &lt;!ENTITY xxe SYSTEM "file:///etc/passwd"&gt;]&gt;
                    &lt;foo&gt;&xxe;&lt;/foo&gt;
                  </code>
                </pre>
              </figure>

              Scenario #2 : Penyerang dapat menyelidiki jaringan pribadi server dengan mengubah baris entitas diatas menjadi :
              <figure>
                <pre>
                  <code>
                    &lt;!ENTITY xxe SYSTEM "https://192.168.1.1/private"&gt;]&gt;
                  </code>
                </pre>
              </figure>

              Scenario #3 : Penyerang dapat melakukan serangan DOS dengan menambahkankan file yang berpotensi merusak
              <figure>
                <pre>
                  <code>
                    &lt;!ENTITY xxe SYSTEM "file:///dev/random"&gt;]&gt;
                  </code>
                </pre>
              </figure>
            </p>
            <h2 class="mb-3 h1">Mitigasi yang dapat dilakukan untuk menghindari serangan ini adalah :</h2>
            <p>
              <ol type="1">
                <li>Jika memungkinkan, gunakan format data yang tidak terlalu kompleks seperti JSON, dan hindari melakukan serialisasi pada data sensitif</li>
                <li>Lakukan peningkatan pada semua prosesor dan pustaka XML yang digunakan oleh aplikasi atau pada sistem operasi yang digunakan.</li>
                <li>Nonaktifkan entitas external XML dan pemrosesan DTD di semua aplikasi yang menggunakan XML.</li>
                <li>Implementasikan "whitelisting" pada validasi input pada sisi server, atau lakukan sanitasi untuk mencegah adanya data perusak yang masuk pada dokumen XML.</li>
                <li>SAST dapat membantu mendeteksi XXE pada kode sumber, walaupun begitu peninjauan secara manual adalah alternatif terbaik pada aplikasi yang besar dan kompleks</li>
              </ol> 
            </p>
            <h2 class="mb-3 mt-5 h1">Saran Pembangunan Software</h2>
            <p>Berikut beberapa contoh penulisan kode sumber yang baik untuk menghindari kerawanan XXE.</p>
            <p> 
              <ul>
                <li>Secara umum</li>
                <p>
                  selalu menonaktifkan DTDs (Entitas Eksternal)
                  <figure>
                    <pre>
                      <code>
                        factory.setFeature("http://apache.org/xml/features/disallow-doctype-decl", true);
                      </code>
                    </pre>
                  </figure>
                </p>
                <li>C/C++</li>
                <p>
                  Menggunakan SAXParses :
                  <figure>
                    <pre>
                      <code>
                        XercesDOMParser *parser = new XercesDOMParser;
                        parser->setCreateEntityReferenceNodes(true);
                        parser->setDisableDefaultEntityResolution(true);
                      </code>
                    </pre>
                  </figure>
                </p>
              </ul> 
              
            </p>
            <p><a href="https://juice-shop.herokuapp.com/#/" class="btn btn-primary py-3 px-4">Latihan Eksploit Web Rentan</a></p>
            <p><a href="<?php echo site_url('komentar/detail/4')?>" class="btn btn-primary py-3 px-4">Forum Diskusi</a></p>
           
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