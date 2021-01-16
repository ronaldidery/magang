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
                    <th width="380">Nama</th>
                    <th width="200">NIS</th>
                    <th width="150">Total Nilai</th>
                    <th width="250">Action</th>
                </tr>
            </thead>
            <tbody>
              <?php $i = 1;
                foreach ($nilai as $value) : ?>
                    <tr>
                        <th><?= $i++ ?></th>
                        <td><?= $value['nama_siswa']; ?></td>
                        <td><?= $value['nis_siswa']; ?></td>
                        <td></td>
                        <td>
                            <a id="detail" type="button" class="btn bg-warning" data-toggle="modal" data-target="#detailModal<?= $value['id'];?>"> detail</a>
                            <a id="detail" type="button" data-toggle="modal" data-target="#editModal<?= $value['id'];?>" class="btn bg-success">edit</a>
                            <a href="<?= base_url(); ?>admin/kelas8/hapuspts2/<?= $value['id'];?>" class="btn bg-danger" onclick="return confirm('nilai akan dihapus?')" >hapus</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</section>

<!-- Modal Tambah -->
<div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form tambah data</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url('admin/kelas8/simpan_pts')?>" method="post" enctype="multipart/form-data">
            <h4><strong>Identitas Siswa.</strong></h4>
            <hr>
            <h5>Nama Siswa:</h5>
            <input type="text" name="nama" class="form-control" placeholder="nama siswa" required/><br/>
            <h5>NIS Siswa:</h5>
            <input type="text" name="nis" class="form-control" placeholder="nis siswa" required/><br/>
            <h5>Kategori:</h5>
            <input type="text" name="kategori" class="form-control" value="PTS2" readonly/><br/>
            <h4><strong>Mata Pelajaran.</strong></h4>
            <hr>
            <h5>IPA:</h5>
            <input type="number" name="ipa" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>IPS:</h5>
            <input type="number" name="ips" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Matematika:</h5>
            <input type="number" name="mtk" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Indonesia:</h5>
            <input type="number" name="bindo" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Inggris:</h5>
            <input type="number" name="bing" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Jawa:</h5>
            <input type="number" name="bjawa" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>PKN:</h5>
            <input type="number" name="pkn" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Seni Budaya:</h5>
            <input type="number" name="sbk" class="form-control" placeholder="NIS siswa" required/><br/>
            <h5>PJOK:</h5>
            <input type="number" name="pjok" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>TIK:</h5>
            <input type="number" name="tik" class="form-control" placeholder="nilai siswa" required/><br/>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<!-- End Modal Tambah -->

<!-- Modal Detail -->
<?php $no = 0;
foreach ($nilai as $value) : $no++ ?>

<div class="modal fade" id="detailModal<?=$value['id'];?>"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Detail data nilai</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body table-responsive">
            <div class="modal-content pt-3">
                <table class="table table-bordered no-margin">
                    <h4 class="ml-2">Data Siswa :</h4>
                    <tbody>
                        <tr>
                            <th style="width:35%">Nama</th>
                            <td><span><?= $value['nama_siswa'];?></span></td>
                        </tr>
                        <tr>
                            <th>NIS</th>
                            <td><span><?= $value['nis_siswa'];?></span></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td><span><?= $value['kategori'];?></span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered no-margin">
                    <h4 class="ml-2">Nilai Mata Pelajaran :</h4>
                    <tbody>
                        <tr>
                            <th style="width:35%">IPA</th>
                            <td><span><?= $value['ipa'];?></span></td>
                        </tr>
                        <tr>
                            <th>IPS</th>
                            <td><span><?= $value['ips'];?></span></td>
                        </tr>
                        <tr>
                            <th>Matematika</th>
                            <td><span><?= $value['matematika'];?></span></td>
                        </tr>
                        <tr>
                            <th>Bahasa Indonesia</th>
                            <td><span><?= $value['bhs_indo'];?></span></td>
                        </tr>
                        <tr>
                            <th>Bahasa Inggris</th>
                            <td><span><?= $value['bhs_ing'];?></span></td>
                        </tr>
                        <tr>
                            <th>Bahasa Jawa</th>
                            <td><span><?= $value['bhs_jawa'];?></span></td>
                        </tr>
                        <tr>
                            <th>PKN</th>
                            <td><span><?= $value['pkn'];?></span></td>
                        </tr>
                        <tr>
                            <th>Seni Budaya</th>
                            <td><span><?= $value['sbk'];?></span></td>
                        </tr>
                        <tr>
                            <th>PJOK</th>
                            <td><span><?= $value['pjok'];?></span></td>
                        </tr>
                        <tr>
                            <th>TIK</th>
                            <td><span><?= $value['tik'];?></span></td>
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

<!-- Modal Edit -->
<?php $no = 0;
foreach ($nilai as $value) : $no++ ?>

<div class="modal fade" id="editModal<?=$value['id'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Form edit nilai</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        <form action="<?php echo base_url(); ?>admin/kelas8/simpan_edit_pts/<?php echo $value['id'];?>" method="post" enctype="multipart/form-data">
            <h4><strong>Identitas Siswa.</strong></h4>
            <hr>
            <h5>Nama Siswa:</h5>
            <input type="text" name="nama" value="<?= $value['nama_siswa'];?>" class="form-control" placeholder="nama siswa" required/><br/>
            <h5>NIS Siswa:</h5>
            <input type="text" name="nis" value="<?= $value['nis_siswa'];?>" class="form-control" placeholder="nis siswa" required/><br/>
            <h5>Kategori:</h5>
            <input type="text" name="kategori" value="<?= $value['kategori'];?>" class="form-control" readonly/><br/>
            <h4><strong>Mata Pelajaran.</strong></h4>
            <hr>
            <h5>IPA:</h5>
            <input type="number" name="ipa" value="<?= $value['ipa'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>IPS:</h5>
            <input type="number" name="ips" value="<?= $value['ips'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Matematika:</h5>
            <input type="number" name="mtk" value="<?= $value['matematika'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Indonesia:</h5>
            <input type="number" name="bindo" value="<?= $value['bhs_indo'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Inggris:</h5>
            <input type="number" name="bing" value="<?= $value['bhs_ing'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Bahasa Jawa:</h5>
            <input type="number" name="bjawa" value="<?= $value['bhs_jawa'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>PKN:</h5>
            <input type="number" name="pkn" value="<?= $value['pkn'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>Seni Budaya:</h5>
            <input type="number" name="sbk" value="<?= $value['sbk'];?>" class="form-control" placeholder="NIS siswa" required/><br/>
            <h5>PJOK:</h5>
            <input type="number" name="pjok" value="<?= $value['pjok'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <h5>TIK:</h5>
            <input type="number" name="tik" value="<?= $value['tik'];?>" class="form-control" placeholder="nilai siswa" required/><br/>
            <div class="modal-footer">
                <button type="reset" class="btn btn-danger">Reset</button>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<?php endforeach; ?>
<!-- End Modal Edit -->

</div>