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
                <button type="button" class="btn bg-success float-right" data-toggle="modal" data-target="#tambahModal"><i class="fas fa-plus"></i> Tambah Nilai</button>
            </div>
        </div>
        
        <!-- Flash data -->
        <?php if ($this->session->flashdata('flash') ):  ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Nilai <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
                    <th width="200">Nama</th>
                    <th width="380">NIS</th>
                    <th width="150">Total Nilai</th>
                    <th width="250">Action</th>
                </tr>
            </thead>
            <tbody>
              <!-- <?php $i = 1;
                foreach ($berita as $value) : ?>
                    <tr>
                        <th><?= $i++ ?></th>
                        <td><?= $value['berita_judul']; ?></td>
                        <td><?= limit_words($value['berita_isi'],20);?>..</td>
                        <td>
                            <img src="<?php echo base_url().'assets/foto/berita/'.$value['berita_image'];?>" width="150">
                        </td>
                        <td>
                            <a id="detail" type="button" class="btn bg-warning" data-toggle="modal" data-target="#detailModal<?= $value['berita_id'];?>"> detail</a>
                            <a id="detail" type="button" data-toggle="modal" data-target="#editModal<?= $value['berita_id'];?>" class="btn bg-success">edit</a>
                            <a href="<?= base_url(); ?>admin/hapus/<?= $value['berita_id'];?>" class="btn bg-danger" onclick="return confirm('berita akan dihapus?')" >hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?> -->
            </tbody>
        </table>
    </div>
</div>
</div>
</section>
</div>