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
                <button type="button" class="btn bg-success float-right" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-plus"></i> Tambah Data Guru</button>
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
                <th width="280">Nama</th>
                <th width="150">NIP</th>
                <th width="200">Email</th>
                <th width="100">Foto</th>
                <th width="250">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1;
            foreach ($guru as $value) : ?>
                <tr>
                    <th><?= $i++ ?></th>
                    <td><?= $value['nama_guru']; ?></td>
                    <td><?= $value['nip'];?></td>
                    <td><?= $value['email_guru'];?></td>
                    <td>
                        <img src="<?php echo base_url().'assets/foto/guru/'.$value['foto_guru'];?>" width="110">
                    </td>
                    <td>
                        <a id="detail" type="button" class="btn bg-warning" data-toggle="modal" data-target="#detailModal<?= $value['id_guru'];?>"> detail</a>
                        <a href="#" class="btn bg-success">edit</a>
                        <a href="<?= base_url(); ?>guru/hapus/<?= $value['id_guru'];?>" class="btn bg-danger" onclick="return confirm('berita akan dihapus?')" >hapus</a>
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
        <h4 class="modal-title" id="exampleModalLabel">Form tambah guru</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url('guru/simpan_post')?>" method="post" enctype="multipart/form-data">
            <h5>Nama Guru:</h5>
            <input type="text" name="nama" class="form-control" placeholder="Nama guru" required/><br/>
            <h5>NIP Guru:</h5>
            <input type="number" name="nip" class="form-control" placeholder="NIP guru" required/><br/>
            <h5>Email Guru:</h5>
            <input type="email" name="email" class="form-control" placeholder="Email guru" required/><br/>
            <h5>No HP:</h5>
            <input type="text" name="nomor" class="form-control" placeholder="No HP" required/><br/>
            <h5>Upload Foto</h5>
            <input type="file" name="fotoguru" required><br/><br/>
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

<!-- Modal Detail -->
<?php $no = 0;
foreach ($guru as $value) : $no++ ?>

<div class="modal fade" id="detailModal<?=$value['id_guru'];?>"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Detail data guru</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body table-responsive">
            <div class="modal-content pt-3">
                <center><img src="<?php echo base_url().'assets/foto/guru/'.$value['foto_guru'];?>"width="200" ></center> <br/>
                <table class="table table-bordered no-margin">
                    <tbody>
                        <tr>
                            <th style="width:35%">Nama Guru</th>
                            <td><span><?= $value['nama_guru'];?></span></td>
                        </tr>
                        <tr>
                            <th>NIP</th>
                            <td><span><?= $value['nip'];?></span></td>
                        </tr>
                        <tr>
                            <th>Email Guru</th>
                            <td><span><?= $value['email_guru'];?></span></td>
                        </tr>
                        <tr>
                            <th>No Telpon</th>
                            <td><span><?= $value['no_hp'];?></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        <div class="modal-footer">
            <button type="close" data-dismiss="modal" class="btn btn-primary">Close</button>
        </div>
    </div>
</div>
</div>
</div>
<?php endforeach; ?>
<!-- End Modal Detail -->

</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->
<!-- ============================================================== -->
