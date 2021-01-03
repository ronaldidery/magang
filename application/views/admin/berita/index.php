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
                <a href="<?= base_url('admin/tambah_berita') ?>">
                    <button type="button" class="btn bg-success float-right"><i class="fas fa-plus"></i> Tambah Berita</button>
                </a>
            </div>
            <div class="card-footer clearfix">
                <button type="button" class="btn bg-success float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Berita</button>
            </div>
        </div>
        <?php if ($this->session->flashdata('flash') ):  ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Berita <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
        <h3 class="card-title">DataTable Berita</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table class="table table-bordered table-striped" id="mydata">
            <thead>
                <tr>
                    <th width="20">No</th>
                    <th width="200">Judul</th>
                    <th width="380">Deskripsi</th>
                    <th width="200">Foto</th>
                    <th width="200">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($berita as $value) : ?>
                    <tr>
                        <th><?= $i++ ?></th>
                        <td><?= $value['berita_judul']; ?></td>
                        <td><?= limit_words($value['berita_isi'],20);?>..</td>
                        <td>
                            <img src="<?php echo base_url().'assets/foto/berita/'.$value['berita_image'];?>" width="150">
                        </td>
                        <td>
                            <a href="<?= base_url(); ?>admin/detail/<?= $value['berita_id'];?>" class="btn bg-warning">detail</a>
                            <a href="#" class="btn bg-success">edit</a>
                            <a href="<?= base_url(); ?>admin/hapus/<?= $value['berita_id'];?>" class="btn bg-danger" onclick="return confirm('berita akan dihapus?')" >hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?> 
            </tbody>
        </table>
    </div>
</div>
</div>
</section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form tambah berita</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url('admin/simpan_post')?>" method="post" enctype="multipart/form-data">
            <h5>Judul Berita:</h5>
            <input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
            <h5>Deskripsi Berita:</h5>
            <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
            <h5>Upload Foto</h5>
            <input type="file" name="filefoto" required><br/>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
