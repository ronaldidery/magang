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
                <button type="button" class="btn bg-success float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Event</button>
            </div>
        </div>
        <hr/>
        <?php if ($this->session->flashdata('flash') ):  ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Event <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
                <h3 class="card-title">DataTable Event</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

    <table class="table table-bordered table-striped" id="mydata">
        <thead>
            <tr>
                <th width="20">No</th>
                <th width="380">Judul</th>
                <th width="200">Tanggal upload</th>
                <th width="150">Foto</th>
                <th width="250">Action</th>
            </tr>
        </thead>
                        <tbody>
                             <?php $i = 1;
                            foreach ($event as $value) : ?>
                                <tr>
                                    <th><?= $i++ ?></th>
                                    <td><?= $value['jdl_event']; ?></td>
                                    <td><?= $value['tanggal_event']; ?></td>
                                    <td>
                                        <img src="<?php echo base_url().'assets/foto/event/'.$value['event_image'];?>" width="150">
                                    </td>
                                    <td>
            <a href="<?= base_url(); ?>event/detail/<?= $value['id_event'];?>" class="btn bg-warning">detail</a>
            <a href="#" class="btn bg-success">edit</a>
            <a href="<?= base_url(); ?>event/hapus/<?= $value['id_event'];?>" class="btn bg-danger" onclick="return confirm('event akan dihapus?')" >hapus</a>
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
        <h4 class="modal-title" id="exampleModalLabel">Form tambah event</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url('event/simpan_post')?>" method="post" enctype="multipart/form-data">
            <h5>Judul Event:</h5>
                <input type="text" name="judul" class="form-control" placeholder="Judul event" required/><br/>
                <h5>Upload Foto</h5>
                <input type="file" name="filefoto" required><br/><br/>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<!-- End Modal -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->