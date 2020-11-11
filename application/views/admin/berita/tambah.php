
<!--<div class="container">

</div>

	============================================================== -->
	<!-- Bread crumb and right sidebar toggle -->
	<!-- ============================================================== -->
<div class="page-wrapper">
	<div class="page-breadcrumb">
		<div class="row">
			<div class="col-12 d-flex no-block align-items-center">
				<h4 class="page-title"><?php echo $judul; ?></h4>

			</div>
		</div>
	</div>


	<div class="container-fluid" id="kontenTemplate">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-body">
						<div class="col-md-10 col-md-offset-2">
							<h3>Form Tambah Berita</h3><hr/>
							<form action="<?php echo base_url('admin/simpan_post')?>" method="post" enctype="multipart/form-data">
								<h5>Judul Berita:</h5>
								<input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
								<h5>Deskripsi Berita:</h5>
								<textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
								<h5>Upload Foto</h5>
								<input type="file" name="filefoto" required><br>
								<button class="btn btn-primary btn-lg mt-2" type="submit">Post Berita</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>