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
                        <a href="<?= base_url('admin/tambah_berita') ?>" class="btn btn-primary">Tambah Berita</a>
                        <hr/>

                        <h4>Daftar Berita</h4>

                        <?php   
                        function limit_words($string, $word_limit){
                            $words = explode(" ",$string);
                            return implode(" ",array_splice($words,0,$word_limit));
                        }
                        ?>

                        <table class="table table-bordered table-striped" id="mydata">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Judul</th>
                                    <th>Deskripsi</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($berita as $brt) : ?>
                                <tr>
                                    <th><?= $i++ ?></th>
                                    <td><?= $brt['berita_judul']; ?></td>
                                    <td><?php echo limit_words($brt['berita_isi'],20);?>..</td>
                                    <td>
                                        <img src="<?php echo base_url().'assets/images/'.$brt['berita_image'];?>" width="70">
                                    </td>
                                    <td>
                                        <a href="#" class="badge badge-warning">detail</a>
                                        <a href="#" class="badge badge-success">edit</a>
                                        <a href="#" class="badge badge-danger">delete</a>
                                    </td>
                                </tr>
                                <?php endforeach; ?> 
                            </tbody>
                        </table>

                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- ============================================================== -->
  <!-- End Container fluid  -->
  <!-- ============================================================== -->
  <!-- ============================================================== -->
