<?php 
  if($this->session->userdata('user_name') == ''){
    redirect('login');
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">
  <?php $this->load->view("admin/_partials/navbar.php") ?>

  <div id="wrapper">
    <?php $this->load->view("admin/_partials/sidebar.php") ?>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <?php $this->load->view("admin/_partials/breadcrumb.php") ?>
        
        <div class="panel-body">
            <h4><p align="center">Selamat Datang <b><font color=blue><?php echo $this->session->userdata("user_name") ?></font></b></p></h4>
            <br/>
            <h4><p align="center">Ini adalah halaman administrator</p></h4>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php $this->load->view("admin/_partials/footer.php") ?>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <?php $this->load->view("admin/_partials/scrolltop.php") ?>
  <?php $this->load->view("admin/_partials/modal.php") ?>
  <?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
