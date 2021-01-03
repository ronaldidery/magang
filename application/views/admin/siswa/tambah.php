
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
                <h3 class="card-title">Form Tambah Data Siswa</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
			<form action="<?php echo base_url('siswa/simpan_post')?>" method="post" enctype="multipart/form-data">
				<h5>Nama Siswa:</h5>
				<input type="text" name="nama_siswa" class="form-control" placeholder="Nama siswa" required/><br/>
				<h5>NIS Siswa:</h5>
				<input type="text" name="nis_siswa" class="form-control" placeholder="NIS siswa" required/><br/>
				<h5>Kelas:</h5>
				<select class="form-control mb-4 col-sm-3" name="kelas">
					<option value="NULL">-PILIH KELAS-</option>
					<option value="VII">VII</option>
					<option value="VIII">VIII</option>
					<option value="IX">IX</option>
				</select>
				<h5>No HP:</h5>
				<input type="text" name="nomor" class="form-control" placeholder="Nomor HP" required/><br/>
				<button class="btn btn-primary btn-lg mt-2" type="submit">Submit</button>
			</form>
			</div>
</div>
		</div>
	</section>
</div>