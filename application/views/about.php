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
</head>
<style>
  article {
    -webkit-column-width: 150px;
    -moz-column-width: 150px;
    column-width: 500px;
    margin-left: 50px;
    margin-right: 50px;
  }
</style>
<body>
  <?php $this->load->view("_partials_home/navbar.php") ?>
  <section class="billboard_about">
    <section class="caption">
      <p class="cap_title">Tentang Kami</p>
    </section>
  </section><!-- Billboard End -->
  
  <img src="<?php echo base_url('img/liquimoly_logo.png') ?>" style="margin-top: 20px; margin-bottom: 20px; margin-left: 250px;">
  <img src="<?php echo base_url('img/big_logo.png') ?>" style="margin-top: 20px; margin-bottom: 20px; margin-left: 50px;">
  <img src="<?php echo base_url('img/meguiars_logo.png') ?>" style="margin-top: 20px; margin-bottom: 20px; margin-left: 50px;">
  <br>
  <article>
  <p>
  D2 Autowash & Autocare didirikan pada tahun 2001, kemudian pada tahun 2010 berpindah di Jl. Tidar Raya No.32B, Karangbesuki, Kec. Sukun, Kota Malang, Jawa Timur. Pada saat pertama kali didirikan, istilah salon mobil masih terdengar asing di telinga bahkan dianggap usaha yang mengada-ada. Namun, seiring dengan pertumbuhan jumlah mobil dan meningkatnya konsumen, bisnis grooming ini menjadi sesuatu hal yang biasa ditemukan di beberapa kota besar, tak terkecuali di Malang. 
  </p>
  <p>
  D2 Autowash & Autocare menawarkan jasa pencucian kendaraan, servis kendaraan (tune up, ganti oli, reparasi, spooring, balancing, dll), dan berbagai produk aksesoris dan perawatan untuk kendaraan. D2 juga ditunjuk menjadi agen penjualan merek produk ternama, yaitu Liqui Moly dan Meguiar’s. Perkerjaan kami bertujuan untuk menghasilkan kendaraan yang mulus, bersih, dan berperforma sempurna, yang merupakan sektor utama kami. 
  </p>
  <p>
  Kami mengutamakan kepuasan dan perhatian penuh pada konsumen dalam layanan kami dengan harga terjangkau, serta promo-promo menarik bagi konsumen.
  </p>
  </article>
  <br>
  <?php $this->load->view("_partials_home/footer.php") ?>
</body>