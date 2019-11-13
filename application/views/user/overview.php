<?php 
  if($this->session->userdata('user_name') != ''){
    redirect('admin');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("user/_partials/head.php") ?>
</head>

<body id="page-top">
  <?php $this->load->view("user/_partials/navbar.php") ?>

  <div id="wrapper">
    <?php $this->load->view("user/_partials/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
        
        <div class="panel-body">
            <h4><p align="center">Selamat Datang</p></h4>
            <br/>
            <h4><p align="center">Klik pada tulisan Produk di menu bar kiri untuk melihat produk kami</p></h4>
            <br/>
            <h4><p align="center">Atau lihat layanan kami dengan menekan tulisan Jasa Layanan pada menu bar kiri</p></h4>
        </div>

      <!-- Sticky Footer -->
      <?php $this->load->view("user/_partials/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("user/_partials/scrolltop.php") ?>
  <?php $this->load->view("user/_partials/js.php") ?>

</body>

</html>
