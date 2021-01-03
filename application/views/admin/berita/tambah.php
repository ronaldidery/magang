  
<!--<div class="container">

</div>

============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="content-wrapper">

	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<b><h1 class="page-title"><?php echo $judul; ?></h1></b>
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.container-fluid -->
	</div>
	
	<section class="content">
		<div class="container-fluid"> 
			<div class="card">
              <div class="card-header">
                <h3 class="card-title">Form Tambah Berita</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			<!-- ============================================================== -->
			<!-- Disini ada Simpan Post untuk memanggil Fungsi *Simpan Post* dalam controllers Admin -->
			<!-- ============================================================== -->
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
	</section>
</div>