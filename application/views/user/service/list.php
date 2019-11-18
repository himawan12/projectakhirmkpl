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

				<?php $this->load->view("user/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Nama Jasa Layanan</th>
										<th>Gambar</th>
										<th>Harga Jasa Layanan</th>
										<th>Keterangan</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($services as $service): ?>
									<tr>
										<td width="150">
											<?php echo $service->nama_jasa ?>
										</td>
										<td>
											<img src="<?php echo base_url('upload/service/'.$service->image) ?>" width="64" />
										</td>
										<td>
											<?php echo $service->harga_jasa ?>
										</td>
										<td class="small">
											<?php echo substr($service->keterangan, 0, 120) ?>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
					<div class="card-footer small text-muted">*harga dapat berubah sewaktu-waktu</div>
				</div>

			</div>
			<!-- /.container-fluid -->

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