
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
                <h3 class="card-title">Form Tambah Data Guru</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			<!-- ============================================================== -->
			<!-- Disini ada Simpan Post untuk memanggil Fungsi *Simpan Post* dalam controllers Admin -->
			<!-- ============================================================== -->
			<form action="<?php echo base_url('guru/simpan_post')?>" method="post" enctype="multipart/form-data"> 
				<h5>Nama Guru:</h5>
				<input type="text" name="nama" class="form-control" placeholder="Nama guru" required/><br/>
				<h5>NIP Guru:</h5>
				<input type="number" name="nip" class="form-control" placeholder="NIP guru" required/><br/>
				<h5>Email Guru:</h5>
				<input type="email" name="email" class="form-control" placeholder="Email guru" required/><br/>
				<h5>No HP:</h5>
				<input type="text" name="nomor" class="form-control" placeholder="No HP" required/><br/>
				<h5>Upload Foto</h5>
				<input type="file" name="fotoguru" required><br>
				<button class="btn btn-primary btn-lg mt-2" type="submit">Submit</button>
			</form>
			</div>
</div>
		</div>
	</section>
</div>