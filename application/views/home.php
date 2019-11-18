<?php 
  if($this->session->userdata('user_name') != ''){
    redirect('admin');
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php $this->load->view("_partials_home/head.php") ?>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/reset.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css') ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
  <script type="text/javascript" src="<?php echo base_url('js/main.js') ?>"></script>
  <style>
    * {box-sizing: border-box}
	body {font-family: Verdana, sans-serif; margin:0}
	.mySlides {display: none}
	img {vertical-align: middle;}

	/* Slideshow container */
	.slideshow-container {
	  max-width: 500px;
	  position: relative;
	  margin: auto;
	  margin-top: 20px;
	}

	/* Next & previous buttons */
	.prev, .next {
	  cursor: pointer;
	  position: absolute;
	  top: 50%;
	  width: auto;
	  padding: 16px;
	  margin-top: -22px;
	  color: white;
	  font-weight: bold;
	  font-size: 18px;
	  transition: 0.6s ease;
	  border-radius: 0 3px 3px 0;
	  user-select: none;
	}

	/* Position the "next button" to the right */
	.next {
	  right: 0;
	  border-radius: 3px 0 0 3px;
	}

	/* On hover, add a black background color with a little bit see-through */
	.prev:hover, .next:hover {
	  background-color: rgba(0,0,0,0.8);
	}
	
	/* Number text (1/3 etc) */
	.numbertext {
	  color: #f2f2f2;
	  font-size: 12px;
	  padding: 8px 12px;
	  position: absolute;
	  top: 0;
	}

	/* The dots/bullets/indicators */
	.dot {
	  cursor: pointer;
	  height: 15px;
	  width: 15px;
	  margin: 0 2px;
	  background-color: #bbb;
	  border-radius: 50%;
	  display: inline-block;
	  transition: background-color 0.6s ease;
	}

	.active, .dot:hover {
	  background-color: #717171;
	}

	/* On smaller screens, decrease text size */
	@media only screen and (max-width: 300px) {
	  .prev, .next,.text {font-size: 11px}
	}

	/* Gallery Enlarge Image*/
	.modal {
		z-index:1;
		display:none;
		padding-top: 10px;
		position:fixed;
		left:0;
		top:0;
		width:100%;
		height:100%;
		overflow:auto;
		background-color:rgb(0,0,0);
		background-color:rgba(0,0,0,0.8);
	}

	
	.modal-content{
		/*
		margin: auto;
		display: block;
		position: absolute;
		transform: translate(-50%, -50%);
		*/
		width:80%;
		height:100%;
		top: 10%;
		left: 10%;
	}
	
	.modal-hover-opacity {
	opacity:1;
	filter:alpha(opacity=100);
	-webkit-backface-visibility:hidden;
	}

	.modal-hover-opacity:hover {
	opacity:0.60;
	filter:alpha(opacity=60);
	-webkit-backface-visibility:hidden;
	}

	.close {
		text-decoration:none;
		float:right;
		font-size:24px;
		font-weight:bold;
		color:white;
		cursor: pointer;
	}
	
	.modal-content, #caption {   
	    -webkit-animation-name: zoom;
	    -webkit-animation-duration: 0.6s;
	    animation-name: zoom;
	    animation-duration: 0.6s;
	}

	@-webkit-keyframes zoom {
	    from {-webkit-transform:scale(0)} 
	    to {-webkit-transform:scale(1)}
	}

	@keyframes zoom {
	    from {transform:scale(0)} 
	    to {transform:scale(1)}
	}


  	/* Social Media Icon */
  	.fa {
	  padding: 20px;
	  width: 60px;
	  text-align: center;
	  text-decoration: none;
	  margin: 5px 2px;
	}

	.fa:hover {
	    opacity: 0.7;
	}

	.fa-facebook {
	  background: #3B5998;
	  color: white;
	  font-size: 30px;
	  margin-left: 610px;
	}

	.fa.fa-instagram {
	  color: transparent;
	  background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
	  background: -webkit-radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%, #d6249f 60%, #285AEB 90%);
	  background-clip: text;
	  -webkit-background-clip: text;
	  font-size: 40px;
	}
  </style>
</head>
<body>

  <?php $this->load->view("_partials_home/navbar.php") ?>

  <section class="billboard">
    <section class="caption">
      <p class="cap_title">Selamat Datang di Website D2 Kami</p>
      <p class="cap_desc">Cek produk dan jasa layanan kami di sini</p>
    </section>
  </section><!-- Billboard End -->


  <section class="services wrapper">
      <div class="S_icons">
        <a href="<?php echo site_url('user/products') ?>"><img src="<?php echo base_url('img/S1.png') ?>" /></a>
        <hr class="sp"/>
        <a href='https://play.google.com/store/apps/details?id=elsa.idekuliner.d2autocare&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'>
          <img alt='Get it on Google Play' class='google_button' src='https://play.google.com/intl/en_us/badges/images/generic/en_badge_web_generic.png'/>
        </a>
        <hr class="sp"/>
        <a href="<?php echo site_url('user/services') ?>"><img src="<?php echo base_url('img/S3.png') ?>" /></a>
      </div>
      <ul class="desc">
        <li>
          <h3>Produk Kami</h3>
          <p>Cek tawaran produk kami dengan mengklik tombol di atas.</p>
        </li>
        <li>
          <h3>Download Aplikasi Kami di Google Play</h3>
          <p>Dan dapatkan penawaran diskon menarik!</p>
        </li>
        <li>
          <h3>Jasa Layanan Kami</h3>
          <p>Lihat semua jasa layanan kami dengan mengklik tombol di atas.</p>
        </li>
      </ul>
  </section><!-- services End -->
  
  <div class="slideshow-container">
	<div class="mySlides">
	  <div class="numbertext">1 / 3</div>
	  <img src="<?php echo base_url('img/promo1.jpg') ?>" style="width:100%">
	</div>
	<div class="mySlides">
	  <div class="numbertext">2 / 3</div>
	  <img src="<?php echo base_url('img/promo2.jpg') ?>" style="width:100%">
	</div>
	<div class="mySlides">
	  <div class="numbertext">3 / 3</div>
	  <img src="<?php echo base_url('img/promo3.jpg') ?>" style="width:100%">
	</div>
	<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
	<a class="next" onclick="plusSlides(1)">&#10095;</a>
  </div>
  <br>
  <div style="text-align:center">
	<span class="dot" onclick="currentSlide(1)"></span> 
	<span class="dot" onclick="currentSlide(2)"></span> 
	<span class="dot" onclick="currentSlide(3)"></span> 
  </div>

  <script>
	var slideIndex = 1;
	showSlides(slideIndex);

	function plusSlides(n) {
	  showSlides(slideIndex += n);
	}

	function currentSlide(n) {
	  showSlides(slideIndex = n);
	}

	function showSlides(n) {
	  var i;
	  var slides = document.getElementsByClassName("mySlides");
	  var dots = document.getElementsByClassName("dot");
	  if (n > slides.length) {slideIndex = 1}    
	  if (n < 1) {slideIndex = slides.length}
	  for (i = 0; i < slides.length; i++) {
	      slides[i].style.display = "none";  
	  }
	  for (i = 0; i < dots.length; i++) {
	      dots[i].className = dots[i].className.replace(" active", "");
	  }
	  slides[slideIndex-1].style.display = "block";  
	  dots[slideIndex-1].className += " active";
	}
  </script>


  <!-- Map -->
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3182916162664!2d112.60701591432846!3d-7.966020981601259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78828639d8b727%3A0x4bab7e1702eb86ef!2sD2+Autowash+%26+Autocare!5e0!3m2!1sen!2sid!4v1561400214778!5m2!1sen!2sid" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  
  <!-- Google 360 -->
  <iframe src="https://www.google.com/maps/embed?pb=!4v1562816859538!6m8!1m7!1s7YTCjTbIyQNio-suZATG-w!2m2!1d-7.966091646645501!2d112.6091692519499!3f356.97590601497575!4f-6.856538116075853!5f0.7820865974627469" width="500" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

  <section class="clock_description">
    <h3 align="center">Jam Buka</h3>
    <p style="font-size:20px; font-style:"LatoRegular",arial;" align="center">
      Senin   : 07.00-21.00
      </br>
      Selasa  : 07.00-21.00
      </br>
      Rabu    : 07.00-21.00
      </br>
      Kamis   : 07.00-21.00
      </br>
      Jum'at  : 07.00-16.00
      </br>
      Sabtu   : 18.00-22.00
      </br>
      Minggu  : Tutup
    </p>
  </section>

  <br>

  <script type="text/javascript">
  // 1 detik = 1000
    window.setTimeout("waktu()",1000);  
    function waktu() {   
      var tanggal = new Date();  
      setTimeout("waktu()",1000);  
      document.getElementById("jam").innerHTML = tanggal.getHours()+":"+tanggal.getMinutes()+":"+tanggal.getSeconds();
    }
  </script>
  <script language="JavaScript">
    var tanggallengkap = new String();
    var namahari = ("Minggu Senin Selasa Rabu Kamis Jumat Sabtu");
    namahari = namahari.split(" ");
    var namabulan = ("Januari Februari Maret April Mei Juni Juli Agustus September Oktober November Desember");
    namabulan = namabulan.split(" ");
    var tgl = new Date();
    var hari = tgl.getDay();
    var tanggal = tgl.getDate();
    var bulan = tgl.getMonth();
    var tahun = tgl.getFullYear();
    tanggallengkap = namahari[hari] + ", " +tanggal + " " + namabulan[bulan] + " " + tahun;
  </script>
  <div class='current_time'>
    <div id='jam' align="center" style="font-size:40px; font-style:"LatoRegular",arial;"></div>
    <h3 align="center"><script language='JavaScript'>document.write(tanggallengkap);</script></h3>
  </div>


  <section class="call_to_action">
    <div class="wrapper">
	    <img src="<?php echo base_url('img/review1.jpg') ?>" onclick="onClick(this)" class="modal-hover-opacity">
	    <img src="<?php echo base_url('img/review3.jpg') ?>" onclick="onClick(this)" class="modal-hover-opacity">
	    <img src="<?php echo base_url('img/review2.jpg') ?>" onclick="onClick(this)" class="modal-hover-opacity">
	    <img src="<?php echo base_url('img/review9.jpg') ?>" onclick="onClick(this)" class="modal-hover-opacity">
	    <img src="<?php echo base_url('img/review8.jpg') ?>" onclick="onClick(this)" class="modal-hover-opacity">
	    <img src="<?php echo base_url('img/review4.jpg') ?>" onclick="onClick(this)" class="modal-hover-opacity">
	  	<img src="<?php echo base_url('img/review5.jpg') ?>" onclick="onClick(this)" class="modal-hover-opacity">
	  	<img src="<?php echo base_url('img/review6.jpg') ?>" onclick="onClick(this)" class="modal-hover-opacity">
	  	<img src="<?php echo base_url('img/review7.jpg') ?>" onclick="onClick(this)" class="modal-hover-opacity">
    </div>
  </section>
  <div id="modal01" class="modal" onclick="this.style.display='none'">
	<span class="close">&times;&nbsp;&nbsp;&nbsp;&nbsp;</span>
	<div class="modal-content">
	  <img id="img01" style="max-width:100%">
	</div>
  </div>
  <script>
  	function onClick(element) {
	  document.getElementById("img01").src = element.src;
	  document.getElementById("modal01").style.display = "block";
	}
  </script>


  <section class='contact'>
      <h3 align="center">Kontak kami:</h3>
      <p align="center">Telp: 08113575000</p>
      <p align="center" style="margin-bottom: 20px;">E-mail: d2ccad@yahoo.com</p>
  </section>


  <section class='soc_med'>
  	<h3 align="center" style="font-family: 'LatoBold', arial; font-weight: bold; font-size: 25px;">Follow kami di social media:</h3>
    <a href="https://www.facebook.com/dedua.autowashautocare" class="fa fa-facebook"></a>
    <a href="https://www.instagram.com/d2autocarewash/?hl=id" class="fa fa-instagram"></a>
  </section>

  <?php $this->load->view("_partials_home/footer.php") ?>
</body>