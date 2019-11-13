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
  <meta name="author" content="">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/reset.css') ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('css/main.css') ?>">
    <script type="text/javascript" src="<?php echo base_url('js/jquery.js') ?>"></script>
    <script type="text/javascript" src="<?php echo base_url('js/main.js') ?>"></script>
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
  
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3182916162664!2d112.60701591432846!3d-7.966020981601259!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78828639d8b727%3A0x4bab7e1702eb86ef!2sD2+Autowash+%26+Autocare!5e0!3m2!1sen!2sid!4v1561400214778!5m2!1sen!2sid" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  
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
      Minggu  : 07.00-21.00
    </p>
  </section>

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
      <img src="<?php echo base_url('img/review1.jpg') ?>" alt="" title="">
      <img src="<?php echo base_url('img/review2.jpg') ?>" alt="" title="">
      <!--
      <section class="cta_desc">
        <h3>We Design Beautiful Templates.</h3>
        <p>We Design Beautiful Templates.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore euna fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in pel culpa qui officia deserunt mollit anim id est laborum.</p>
        <a href="#" class="cta_btn">Sign Up Now!</a>
      </section>
      -->
    </div>
  </section><!-- call_to_action End -->


  <section class='contact'>
      <h3 align="center">Kontak kami:</h3>
      <p align="center">Telp: 08113575000</p>
      <p align="center" style="margin-bottom: 20px;">E-mail: d2ccad@yahoo.com</p>
  </section>
  
  <!-- 
  <section class="client_testimonials">
    <div class="wrapper">
      <h3>Our Happy Clients.</h3>
      <section class="testimonials">
        <blockquote>Fenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</blockquote> 

        </blockquote>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</blockquote>

        <a href="http://twitter.com/pixelhint" target="_blink" class="author">@Jane Doe</a>
        <img class="avatar" src="img/author.jpg" title="" atl=""/>
      </section>

      <section class="testimonials">
        <blockquote>Fenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</blockquote> 

        </blockquote>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</blockquote>
        
        <a href="http://twitter.com/pixelhint" target="_blink" class="author">@Jane Doe</a>
        <img class="avatar" src="img/author2.jpg" title="" atl=""/>
      </section>

      <section class="testimonials">
        <blockquote>Fenim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</blockquote> 

        </blockquote>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</blockquote>
        
        <a href="http://twitter.com/pixelhint" target="_blink" class="author">@Jane Doe</a>
        <img class="avatar" src="img/author3.jpg" title="" atl=""/>
      </section>
    </div>
  </section>
  testimonials End -->

  <!-- 
  <section class="newsletter">
    <div class="wrapper">
      <p>subscribe to our newsletter.</p>
      <form method="" action="" class="sub_form">
        <input type="text" id="" class="email_field" placeholder="name">
        <input type="text" id="" class="name_field" placeholder="email">
        <input type="submit" id="" class="submit_nl" value="Subscribe">
      </form>
    </div>
  </section>
  newsletter End -->
  
  <!-- 
  <footer>
    <img src="<?php echo base_url('img/footer_logo.png') ?>" alt="" title="">
    <nav>
      <ul>
        <li><a href="#">Company</a></li>
        <li><a href="#">Location</a></li>
        <li><a href="#">Help</a></li>
        <li><a href="#">Advertise</a></li>
        <li><a href="#">Terms</a></li>
        <li><a href="#">Privacy</a></li>
      </ul>
    </nav>
    <hr class="footer_sp"/>
    <p class="rights">© 2013 BrandName.com - All Rights Reserved - Find More Free Template at <a href="http://pixelhint.com">Pixelhint.com</a>.</p>
  </footer>
  footer End -->

  <?php $this->load->view("_partials_home/footer.php") ?>

</body>