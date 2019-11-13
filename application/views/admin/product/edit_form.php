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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/products/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/product/edit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $product->id_produk?>" />

							<div class="form-group">
								<label for="nama_produk">Nama Produk*</label>
								<input class="form-control <?php echo form_error('nama_produk') ? 'is-invalid':'' ?>"
								 type="text" name="nama_produk" placeholder="Nama Produk" value="<?php echo $product->nama_produk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('nama_produk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="name">Gambar</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="old_image" value="<?php echo $product->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="kategori">Kategori*</label>
								<input class="form-control <?php echo form_error('kategori') ? 'is-invalid':'' ?>"
								 type="text" name="kategori" placeholder="Kategori" value="<?php echo $product->kategori ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('kategori') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="harga_produk">Harga Produk*</label>
								<input class="form-control <?php echo form_error('harga_produk') ? 'is-invalid':'' ?>"
								 type="number" name="harga_produk" min="0" placeholder="Harga Produk" value="<?php echo $product->harga_produk ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('harga_produk') ?>
								</div>
							</div>

							<div class="form-group">
								<label for="keterangan">Keterangan*</label>
								<textarea class="form-control <?php echo form_error('keterangan') ? 'is-invalid':'' ?>"
								 name="keterangan" placeholder="Keterangan"><?php echo $product->keterangan ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('keterangan') ?>
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