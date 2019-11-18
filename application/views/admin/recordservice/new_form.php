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

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<a href="<?php echo site_url('admin/recordservices/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/recordservice/add') ?>" method="post" enctype="multipart/form-data" >
							
							<div class="form-group">
								<label for="nama_jasa">Nama Jasa*</label>
								<input class="form-control <?php echo form_error('nama_jasa') ? 'is-invalid':'' ?>"
								 type="text" name="nama_jasa" placeholder="Nama Jasa" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_jasa') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga_jasa">Harga Jasa*</label>
								<input class="form-control <?php echo form_error('harga_jasa') ? 'is-invalid':'' ?>"
								 type="number" name="harga_jasa" min="0" placeholder="Harga Jasa" />
								<div class="invalid-feedback">
									<?php echo form_error('harga_jasa') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="nama_konsumen">Nama Konsumen*</label>
								<input class="form-control <?php echo form_error('nama_konsumen') ? 'is-invalid':'' ?>"
								 type="text" name="nama_konsumen" placeholder="Nama Konsumen" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_konsumen') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="dikerjakan_oleh">Dikerjakan oleh*</label>
								<input class="form-control <?php echo form_error('dikerjakan_oleh') ? 'is-invalid':'' ?>"
								 type="text" name="dikerjakan_oleh" placeholder="Nama" />
								<div class="invalid-feedback">
									<?php echo form_error('dikerjakan_oleh') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="tanggal">Tanggal*</label>
								<input class="form-control <?php echo form_error('tanggal') ? 'is-invalid':'' ?>"
								 type="text" name="tanggal" placeholder="Tanggal" />
								<div class="invalid-feedback">
									<?php echo form_error('tanggal') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="jam">Jam*</label>
								<input class="form-control <?php echo form_error('jam') ? 'is-invalid':'' ?>"
								 type="text" name="jam" placeholder="Jam" />
								<div class="invalid-feedback">
									<?php echo form_error('jam') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>