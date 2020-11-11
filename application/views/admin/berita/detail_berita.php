<!-- ============================================================== -->
<!-- Page wrapper  -->
<!-- ============================================================== -->
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title"><?php echo $judul; ?></h4>

            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid" id="kontenTemplate">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <a href="<?= base_url('admin') ?>" class="btn btn-primary">Kembali</a>
                        <hr/>
                        <div class="card mb-3 card-body">
                            <h2 class="card-title"><?= $berita['berita_judul']; ?></h2>
                          <div class="card-body">
                            <img src="<?php echo base_url().'assets/images/'.$berita['berita_image'];?>" class="card-img-top">
                            <p class="card-text"><?= $berita['berita_isi']; ?></p>
                            <p class="card-text"><small class="text-muted">Diupload <?= $berita['berita_tanggal']; ?></small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
