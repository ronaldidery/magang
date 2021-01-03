<!-- ============================================================== -->
<!-- content wrapper  -->
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
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <section class="content">
        <div class="container-fluid">
            <div class="breadcrumb">
            <div class="card-footer clearfix">
                <a href="<?= base_url('admin') ?>">
                    <button type="button" class="btn bg-success float-right"><i class="fas fa-minus"></i>Kembali</button>
                </a>
            </div> 
        </div>
            <hr/>
            <div class="card mb-3 card-body">
                <h2 class="card-title"><?= $berita['berita_judul']; ?></h2>
                <div class="card-body">
                    <img src="<?php echo base_url().'assets/foto/berita/'.$berita['berita_image'];?>" class="card-img">
                    <p class="card-text"><?= $berita['berita_isi']; ?></p>
                    <p class="card-text"><small class="text-muted">Diupload <?= $berita['berita_tanggal']; ?></small></p>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
