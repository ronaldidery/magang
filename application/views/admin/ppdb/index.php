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
                    <a href="<?= base_url('ppdb/print_data') ?>">
                        <button type="button" class="btn bg-danger float-right"><i class="fas fa-print"></i> Print</button>
                    </a>
                </div>
                <div class="card-footer clearfix">
                    <div class="dropdown">
                      <button class="btn bg-warning dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"><i class="fas fa-download"></i> Export
                        <span class="caret"></span>
                      </button>
                      <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="<?= base_url('ppdb/pdf') ?>">PDF</a></li>
                        <li><a class="dropdown-item" href="<?= base_url('ppdb/excel') ?>">Excel</a></li>
                      </ul>
                    </div>
                </div>
            </div>  
            <hr/>
            <?php if ($this->session->flashdata('flash') ):  ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                  Print <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
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
            <h3 class="card-title">Data Pendaftaran</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table class="table table-bordered table-striped" id="mydata">
                <thead>
                    <tr>
                        <th width="20">No</th>
                        <th width="330">Nama</th>
                        <th width="130">NISN</th>
                        <th width="150">NIK</th>
                        <th width="150">No HP</th>
                        <th width="220">Action</th>
                    </tr>
                </thead>
                        <tbody>
                            <?php $i = 1;
                            foreach ($pendaftaran as $value) : ?>
                                <tr>
                                    <th><?= $i++ ?></th>
                                    <td><?= $value['nama']; ?></td>
                                    <td><?= $value['nisn']; ?></td>
                                    <td><?= $value['nik']; ?></td>
                                    <td><?= $value['no_tlp']; ?></td>
                                    <td>
            <a id="detail" type="button" class="btn bg-warning" data-toggle="modal" data-target="#detailModal<?= $value['id_pendaftar'];?>"> detail</a>
            <a href="<?= base_url(); ?>ppdb/print_data_pendaftar/<?= $value['id_pendaftar'];?>" class="btn bg-success"><i class="fas fa-download"></i></a>
            <a href="<?= base_url(); ?>ppdb/hapus/<?= $value['id_pendaftar'];?>" class="btn bg-danger" onclick="return confirm('Yakin akan dihapus?')" >hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?> 
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal Detail -->
<?php $no = 0;
foreach ($pendaftaran as $value) : $no++ ?>

<div class="modal fade" id="detailModal<?=$value['id_pendaftar'];?>"tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="exampleModalLabel">Detail data pendaftar</h4>
        <button type="button" class="btn-remove" data-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body table-responsive">
            <div class="modal-content pt-3">
                <!-- <center><img src="<?php echo base_url().'assets/foto/guru/'.$value['foto_guru'];?>"width="200" ></center> <br/> -->
                <table class="table table-bordered no-margin">
                    <h4 class="ml-2">Data Diri :</h4>
                    <tbody>
                        <tr>
                            <th style="width:35%">Nama</th>
                            <td><span><?= $value['nama'];?></span></td>
                        </tr>
                        <tr>
                            <th>NIK</th>
                            <td><span><?= $value['nik'];?></span></td>
                        </tr>
                        <tr>
                            <th>Tempat Lahir</th>
                            <td><span><?= $value['tmp_lahir'];?></span></td>
                        </tr>
                        <tr>
                            <th>Tanggal Lahir</th>
                            <td><span><?= $value['tt_lahir'];?></span></td>
                        </tr>
                        <tr>
                            <th>Jenis Kelamin</th>
                            <td><span><?= $value['jenis_kelamin'];?></span></td>
                        </tr>
                        <tr>
                            <th>Kewarganegaraan</th>
                            <td><span><?= $value['kewarganegaraan'];?></span></td>
                        </tr>
                        <tr>
                            <th>Agama</th>
                            <td><span><?= $value['agama'];?></span></td>
                        </tr>
                        <tr>
                            <th>Nama Wali</th>
                            <td><span><?= $value['nama_wali'];?></span></td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><span><?= $value['email'];?></span></td>
                        </tr>
                        <tr>
                            <th>No Telpon</th>
                            <td><span><?= $value['no_tlp'];?></span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered no-margin">
                    <h4 class="ml-2">Data Alamat Asal :</h4>
                    <tbody>
                        <tr>
                            <th style="width:35%">Alamat</th>
                            <td><span><?= $value['alamat_pendaftar'];?></span></td>
                        </tr>
                        <tr>
                            <th>Kode Pos</th>
                            <td><span><?= $value['pos'];?></span></td>
                        </tr>
                        <tr>
                            <th>Provinsi</th>
                            <td><span><?= $value['id_provinsi'];?></span></td>
                        </tr>
                        <tr>
                            <th>Kabupaten</th>
                            <td><span><?= $value['id_kabupaten'];?></span></td>
                        </tr>
                        <tr>
                            <th>Kecamatan</th>
                            <td><span><?= $value['id_kecamatan'];?></span></td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered no-margin">
                    <h4 class="ml-2">Data Pendidikan :</h4>
                    <tbody>
                        <tr>
                            <th style="width:35%">Pendidikan Terakhir</th>
                            <td><span><?= $value['pend_akhir'];?></span></td>
                        </tr>
                        <tr>
                            <th>Nama Sekolah</th>
                            <td><span><?= $value['nama_sekolah'];?></span></td>
                        </tr>
                        <tr>
                            <th>Rata Nilai Raport</th>
                            <td><span><?= $value['nilai_raport'];?></span></td>
                        </tr>
                        <tr>
                            <th>NISN</th>
                            <td><span><?= $value['nisn'];?></span></td>
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
