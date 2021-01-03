<!-- ============================================================== -->
<!-- Page wrapper  --> 
<!-- ============================================================== -->
<div class="content-wrapper"> 

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
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
                <a href="<?= base_url('galeri/tambah_galeri') ?>">
                    <button type="button" class="btn bg-success float-right"><i class="fas fa-plus"></i> Tambah Galeri</button>
                </a>
            </div>
        </div>
        <hr/>
        <?php if ($this->session->flashdata('flash') ):  ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Galeri <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>

    <?php   
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
    ?>

<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable Galeri</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

    <table class="table table-bordered table-striped" id="mydata">
        <thead>
            <tr>
                <th width="20">No</th>
                <th width="380">Judul</th>
                <th width="200">Tanggal upload</th>
                <th width="200">Foto</th>
                <th width="200">Action</th>
            </tr>
        </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($galeri as $value) : ?>
                                <tr>
                                    <th><?= $i++ ?></th>
                                    <td><?= $value['judul_galeri']; ?></td>
                                    <td><?= $value['tanggal_galeri']; ?></td>
                                    <td>
                                        <img src="<?php echo base_url().'assets/foto/galeri/'.$value['foto_galeri'];?>" width="150">
                                    </td>
                                    <td>
            <a href="<?= base_url(); ?>galeri/detail/<?= $value['id_galeri'];?>" class="btn bg-warning">detail</a>
            <a href="#" class="btn bg-success">edit</a>
            <a href="<?= base_url(); ?>galeri/hapus/<?= $value['id_galeri'];?>" class="btn bg-danger" onclick="return confirm('berita akan dihapus?')" >hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?> 
                </tbody>
            </table>
        </div>
    </div>
        </div>
    </section>
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
