 
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
							<form action="<?php echo base_url('#')?>" method="post" enctype="multipart/form-data">
								<h5>Nama Siswa:</h5>
								<input type="text" name="nama_siswa" class="form-control" placeholder="Nama siswa" required/><br/>
								<h5>NIS Siswa:</h5>
								<input type="text" name="nis_siswa" class="form-control" placeholder="NIS siswa" required/><br/>
								<h5>Kelas:</h5>
								<select class="form-control" name="kelas">
							        <option value="0">-PILIH KELAS-</option>
							        <option value="VII">VII</option>
							        <option value="VIII">VIII</option>
							        <option value="IX">IX</option>
							    </select>
								<button class="btn btn-primary btn-lg mt-2" type="submit">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>