<!--form pendaftaran-->
<div id="page-wrap">
  <h2 align="center">FORM PENDAFTARAN PESERTA DIDIK BARU MADRASAH TSANAWIYAH BIMA BHAKTI PERTIWI</h2>
</br></br>

<?php if ($this->session->flashdata('flash') ):  ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
  Pendaftaran <strong>berhasil</strong> <?= $this->session->flashdata('flash'); ?>.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<div class="container p-3 my-3 border">
 <form id="form" method="post" action="">

  <?php if( validation_errors() ): ?>
    <div class="alert alert-danger" role="alert">
      <?= validation_errors(); ?>
    </div>
  <?php endif; ?>

<div class="alert alert-primary">
  <strong>Data Diri</strong>
</div>
<div class="row">
  <div class="col-sm-7">
    <div class="form-group">
      <label> <h4>Nama Lengkap:</h4></label>
      <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap" value="<?= set_value('nama') ?>">
      <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="form-group">
      <label><h4>Nomor Identitas (NIK):</h4></label>
      <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK" value="<?= set_value('nik') ?>">
      <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Tempat Lahir:</h4></label>
      <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir" value="<?= set_value('tempat_lahir') ?>">
      <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="form-group">
      <label><h4>Tanggal Lahir:</h4></label>
      <input type="date" name="tanggal_lahir" class="form-control" value="<?= set_value('tanggal_lahir') ?>">
    </div>
  </div>
  <div class="col-sm-5">
    <div class="form-group">
      <label><h4>Jenis Kelamin:</h4></label>
      <select class="form-control" name="jk">
        <option value="0">-PILIH JENIS KELAMIN-</option>
        <option value="1">Laki-laki</option>
        <option value="2">Perempuan</option>
      </select>
    </div>
  </div>
</div>

<div class="row">

  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Kewarganegaraan:</h4></label>
      <select class="form-control" name="kewarganegaraan">
        <option value="0">-PILIH KEWARGANEGARAAN-</option>
        <option value="WNI">Warga Negara Indonesia</option>
        <option value="WNA">Warga Negara Asing</option>
      </select>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="form-group">
      <label><h4>Agama:</h4></label>
      <select class="form-control" name="agama">
        <option value="0">-PILIH AGAMA-</option>
        <option value="Islam">Islam</option>
        <option value="Kristen">Kristen</option>
        <option value="Katolik">Katolik</option>
        <option value="Hindu">Hindu</option>
        <option value="Budha">Budha</option>
        <option value="Lainnya">Lainnya</option>
      </select>
    </div>
  </div>
  <div class="col-sm-5">
    <div class="form-group">
      <label><h4>Nama Ibu Kandung:</h4></label>
      <input type="text" name="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu Kandung" value="<?= set_value('nama_ibu') ?>">
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Email:</h4></label>
      <input type="email" name="email" class="form-control" placeholder="Masukan Email" value="<?= set_value('email') ?>">
      <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
  <div class="col-sm-3">
    <div class="form-group">
      <label><h4>No Telp:</h4></label>
      <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp" value="<?= set_value('no_telp') ?>">
    </div>
  </div>
</div>
<div class="alert alert-primary">
  <strong>Data Alamat Asal</strong>
</div>
<div class="row">
  <div class="col-sm-5">
    <div class="form-group">
      <label><h4>Alamat:</h4></label>
      <textarea class="form-control" name="alamat" rows="2" id="alamat" value="<?= set_value('alamat') ?>"></textarea>
      <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
  <div class="col-sm-2">
    <div class="form-group">
      <label><h4>Kode Pos:</h4></label>
      <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos" value="<?= set_value('kode_pos') ?>">
    </div>
  </div>
</div>


<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Provinsi:</h4></label>
      <select class="form-control" name="provinsi" id="provinsi">
        <option value="0">-PILIH PROVINSI-</option>
        <?php foreach($data->result() as $row):?>
          <option value="<?php echo $row->id;?>"><?php echo $row->nama;?></option>
        <?php endforeach;?>
      </select>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Kabupaten:</h4></label>
      <select class="form-control" name="kabupaten" id="kabupaten">
        <option value="0">-PILIH KABUPATEN-</option>
        <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
      </select>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Kecamatan:</h4></label>
      <select class="form-control" name="kecamatan" id="kecamatan">
        <option value="0">-PILIH KECAMATAN-</option>
        <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
      </select>
    </div>
  </div>

</div>

<div class="alert alert-primary">
  <strong>Data Pendidikan</strong>
</div>
<div class="row">
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Pendidikan Terakhir:</h4></label>
      <select class="form-control" name="pendidikan">
        <option value="SMA-IPA">SD</option>
        <option value="SMA-IPS">MI</option>
      </select>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Nama Sekolah:</h4></label>
      <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah" value="<?= set_value('sekolah') ?>">
    </div>
  </div>
  <div class="col-sm-4">
    <div class="form-group">
      <label><h4>Rata-rata Nilai Rapor Kelas 6:</h4></label>
      <input type="text" name="nilai_raport" class="form-control"
      placeholder="Masukan Rata-rata nilai raport" value="<?= set_value('nilai_raport') ?>">
      <?= form_error('nilai_raport', '<small class="text-danger">', '</small>'); ?>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-sm-6">
    <button type="submit" name="Submit" id="Submit" class="btn btn-primary">Daftar</button>
    <button type="reset" class="btn btn-secondary">Reset</button>
  </div>

</div>
</form>
</div>
</div>

<!--end form pendataran-->

<script>
  $("#provinsi").change(function() {
                 //variabel dari nilai combo provinsi
                 var provinsi_id = $("#provinsi").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                  type: "POST",
                  dataType: "html",
                  url: "<?php echo base_url();?>form/get_kabupaten",
                  data: "provinsi=" + provinsi_id,
                  success: function(data) {
                    $("#kabupaten").html(data);
                  }
                });
              });

  $("#kabupaten").change(function() {
            // variabel dari nilai combo box kabupaten
            var kabupaten_id = $("#kabupaten").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                $.ajax({
                  type: "POST",
                  dataType: "html",
                  url: "ambil-data.php",
                  data: "kabupaten=" + kabupaten_id,
                  success: function(data) {
                    $("#kecamatan").html(data);
                  }
                });
              });
            </script>