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
                <a href="<?= base_url('guru/tambah_guru') ?>">
                    <button type="button" class="btn bg-success float-right"><i class="fas fa-plus"></i> Tambah Data Guru</button>
                </a>
            </div>
        </div>
        <hr/>
        <?php if ($this->session->flashdata('flash') ):  ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              Guru <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    <?php endif; ?>
<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTabel Guru</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">

    <table class="table table-bordered table-striped" id="mydata">
        <thead>
            <tr>
                <th width="20">No</th>
                <th width="330">Nama</th>
                <th width="150">NIP</th>
                <th width="200">Email</th>
                <th width="100">Foto</th>
                <th width="200">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($guru as $gru) : ?>
                <tr>
                    <th><?= $i++ ?></th>
                    <td><?= $gru['nama_guru']; ?></td>
                    <td><?= $gru['nip'];?></td>
                    <td><?= $gru['email_guru'];?></td>
                    <td>
                        <img src="<?php echo base_url().'assets/foto/guru/'.$gru['foto_guru'];?>" width="110">
                    </td>
                    <td>
                        <a href="<?= base_url();?>" class="btn bg-warning">detail</a>
                        <a href="#" class="btn bg-success">edit</a>
                        <a href="<?= base_url(); ?>guru/hapus/<?= $gru['id_guru'];?>" class="btn bg-danger" onclick="return confirm('berita akan dihapus?')" >hapus</a>
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
