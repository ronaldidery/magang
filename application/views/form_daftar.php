<!DOCTYPE html>
<html lang="en">
<head>
  <!-- basic -->


  <!-- site metas -->
  <title>MTs Bima Bhakti Pertiwi</title>

  <!-- site icons -->
  <link rel="icon" href="<?= base_url('assets/templat') ?>/images/fevicon/fevicon.png" type="image/png" />
  <!-- bootstrap css -->
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/bootstrap.min.css" />
  <!-- site css -->
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/style.css" />
  <!-- responsive css -->
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/responsive.css" />
  <!-- colors css -->
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/colors.css" />
  <!-- wow animation css -->
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/animate.css" />
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body id="default_theme" class="home_page1">
    <!-- header -->
    <header class="header header_style1">
     <div class="container">
      <div class="row">
        <div class="col-md-9 col-lg-10">
        <div class="logo"><a href="index.html"><img src="<?= base_url('assets/templat') ?>/images/LOGO_MTs.png" alt="#" /></a></div>
        <div class="main_menu float-right">
         <div class="menu">
          <ul class="clearfix">
           <li><a href="<?php echo site_url ('home/index/home'); ?>">Home</a></li>
           <li class="active"><a href="about.html">About</a></li>
           
           <li><a href="contact.html">Contact</a></li>
         </ul>
       </div>
     </div>
   </div>
 </div>
</div>
</header>
<!-- end header-->

<!--form pendaftaran-->
<div id="page-wrap">
  <h2 align="center">FORM PENDAFTARAN PESERTA DIDIK BARU MADRASAH TSANAWIYAH BIMA BHAKTI PERTIWI</h2>
</br></br>

<div class="container p-3 my-3 border">

  <?php
    //Include file koneksi, untuk koneksikan ke database
 //   include "koneksi.php";

    //Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
 //   //Cek apakah ada kiriman form dari method post
 //   if ($_SERVER["REQUEST_METHOD"] == "POST") {

 //       $nama=input($_POST["nama"]);
 //       $nik=input($_POST["nik"]);
 //       $tempat_lahir=input($_POST["tempat_lahir"]);
 //       $tanggal_lahir=input($_POST["tanggal_lahir"]);
 //       $jk=input($_POST["jk"]);
 //       $kewarganegaraan=input($_POST["kewarganegaraan"]);
 //       $agama=input($_POST["agama"]);
 //       $nama_ibu=input($_POST["nama_ibu"]);
 //       $email=input($_POST["email"]);
 //       $no_telp=input($_POST["no_telp"]);
 //       $alamat=input($_POST["alamat"]);
 //       $kode_pos=input($_POST["kode_pos"]);
 //       $provinsi=input($_POST["provinsi"]);
 //       $kabupaten=input($_POST["kabupaten"]);
 //       $kecamatan=input($_POST["kecamatan"]);
 //       $pendidikan=input($_POST["pendidikan"]);
 //       $sekolah=input($_POST["sekolah"]);
 //       $nilai_raport=input($_POST["nilai_raport"]);
 //       $prog1=input($_POST["prog1"]);
 //       $prog2=input($_POST["prog2"]);

 //       //Query input menginput data kedalam tabel pendaftaraan
 //       $sql="insert into pendaftaraan (nama,nik,tempat_lahir,tanggal_lahir,jk,kewarganegaraan,agama,nama_ibu,email,no_telp,alamat,kode_pos,provinsi,kabupaten,kecamatan,pendidikan,sekolah,nilai_raport,prog1,prog2) values
 //   ('$nama','$nik','$tempat_lahir','$tanggal_lahir',$jk,'$kewarganegaraan','$agama','$nama_ibu','$email','$no_telp','$alamat','$kode_pos','$provinsi','$kabupaten','$kecamatan','$pendidikan','$sekolah',$nilai_raport,'$prog1','$prog2')";

        //Mengeksekusi/menjalankan query diatas
  //      $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
  //      if ($hasil) { 
  //          echo "<div class='alert alert-success'> Selamat $nama anda telah berhasil mendaftar.</div>"; 
   //     }
   //     else {
  //        echo "<div class='alert alert-danger'> Pendaftaraan Gagal.</div>";
   //     }
   // }
   // ?>

   <form id="form" method="post">
    <div class="alert alert-primary">
      <strong>Data Diri</strong>
    </div>
    <div class="row">
      <div class="col-sm-7">

        <div class="form-group">
          <label> <h4>Nama Lengkap:</h4></label>
          <input type="text" name="nama" class="form-control" placeholder="Masukan Nama Lengkap">
        </div>
      </div>
      <div class="col-sm-5">
        <div class="form-group">
          <label><h4>Nomor Identitas (NIK):</h4></label>
          <input type="text" name="nik" class="form-control" placeholder="Masukan Nomor NIK">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label><h4>Tempat Lahir:</h4></label>
          <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukan Tempat Lahir">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label><h4>Tanggal Lahir:</h4></label>
          <input type="date" name="tanggal_lahir" class="form-control">
        </div>
      </div>
      <div class="col-sm-5">
        <div class="form-group">
          <label><h4>Jenis Kelamin:</h4></label>
          <select class="form-control" name="jk">
            <option>Pilih</option>
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
            <option>Pilih</option>
            <option value="WNI">Warga Negara Indonesia</option>
            <option value="WNA">Warga Negara Asing</option>
          </select>
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label><h4>Agama:</h4></label>
          <select class="form-control" name="agama">
            <option>Pilih</option>
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
          <input type="text" name="nama_ibu" class="form-control" placeholder="Masukan Nama Ibu Kandung">
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label><h4>Email:</h4></label>
          <input type="email" name="email" class="form-control" placeholder="Masukan Email">
        </div>
      </div>
      <div class="col-sm-3">
        <div class="form-group">
          <label><h4>No Telp:</h4></label>
          <input type="text" name="no_telp" class="form-control" placeholder="Masukan No Telp" required>
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
          <textarea class="form-control" name="alamat" rows="2" id="alamat"></textarea>
        </div>
      </div>
      <div class="col-sm-2">
        <div class="form-group">
          <label><h4>Kode Pos:</h4></label>
          <input type="text" name="kode_pos" class="form-control" placeholder="Kode Pos">
        </div>
      </div>
    </div>


    <div class="row">
      <div class="col-sm-4">
        <div class="form-group">
          <label><h4>Provinsi:</h4></label>
          <select class="form-control" name="provinsi" id="provinsi">
            <?php
            include "koneksi.php";
                            //Perintah sql untuk menampilkan semua data pada tabel provinsi
            $sql="select * from provinsi";
            $hasil=mysqli_query($kon,$sql);
            while ($data = mysqli_fetch_array($hasil)) {
              ?>
              <option value="<?php echo $data['id_prov'];?>"><?php echo $data['nama'];?></option>
              <?php
            }
            ?>
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label><h4>Kabupaten:</h4></label>
          <select class="form-control" name="kabupaten" id="kabupaten">
            <!-- Kabupaten akan diload menggunakan ajax, dan ditampilkan disini -->
          </select>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="form-group">
          <label><h4>Kecamatan:</h4></label>
          <select class="form-control" name="kecamatan" id="kecamatan">
            <!-- Kecamatan akan diload menggunakan ajax, dan ditampilkan disini -->
          </select>
        </div>
      </div>

    </div>
    <script>
            //$("#provinsi").change(function() {
                // variabel dari nilai combo provinsi
                //var id_provinsi = $("#provinsi").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
                //$.ajax({
                   // type: "POST",
                   // dataType: "html",
                   // url: "ambil-data.php",
                   // data: "provinsi=" + id_provinsi,
                  //  success: function(data) {
                  //      $("#kabupaten").html(data);
                 //   }
               // });
           // });

           // $("#kabupaten").change(function() {
                // variabel dari nilai combo box kabupaten
           //     var id_kabupaten = $("#kabupaten").val();

                // Menggunakan ajax untuk mengirim dan dan menerima data dari server
           //     $.ajax({
            //        type: "POST",
            //        dataType: "html",
            //        url: "ambil-data.php",
            //        data: "kabupaten=" + id_kabupaten,
            //        success: function(data) {
            //            $("#kecamatan").html(data);
            //        }
             //   });
           // });
         </script>
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
              <input type="text" name="sekolah" class="form-control" placeholder="Masukan Nama Sekolah">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label><h4>Rata-rata Nilai Rapor Kelas 6:</h4></label>
              <input type="text" name="nilai_raport" class="form-control"
              placeholder="Masukan Rata-rata nilai raport">
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

  <!-- footer -->
  <div class="side-footer-line"></div>
  <footer class="dark_footer footer_style_2">
   <div class="footer_top">
    <div class="container">
     <div class="row">
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4 margin_bottom_30">
       <div class="full width_9" style="margin-bottom:25px;"> <a href="index.html"><img class="img-responsive" width="250" src="images/logo.png" alt="#"></a> </div>
       <div class="full width_9">
        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
      </div>
      <div class="full width_9">
        <p>the vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati..</p>
      </div>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 margin_bottom_30">
     <div class="full">
      <div class="footer_blog_2 width_9">
       <h4>Twitter Feed</h4>
       <p><i class="fa fa-twitter"></i> Creative_Talent - 26 mins
        Te invitamos a seguir la cta. de WEntrepreneur_ ¡Atrévete! #Emprendimiento #PyMES #Economía #Bussines #Negocios https://t.co/Y7tZMmxGHn
      </p>
      <p><i class="fa fa-twitter"></i> Creative_Talent - 26 mins
        Te invitamos a seguir la cta. de WEntrepreneur_ ¡Atrévete! #Emprendimiento #PyMES #Economía #Bussines #Negocios https://t.co/Y7tZMmxGHn
      </p>
    </div>
  </div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-2 margin_bottom_30">
 <div class="full">
  <div class="footer_blog_2">
   <h4>Social</h4>
 </div>
</div>
<div class="full">
  <ul class="footer-links">
   <li><a href="#"><i class="fa fa-facebook"></i> 256 Likes</a></li>
   <li><a href="#"><i class="fa fa-github"></i> 57+ Projects</a></li>
   <li><a href="#"><i class="fa fa-twitter"></i> 1,258 Followers</a></li>
   <li><a href="#"><i class="fa fa-pinterest"></i> 2538+ Pins</a></li>
 </ul>
</div>
</div>
<div class="col-xs-12 col-sm-6 col-md-6 col-lg-3 margin_bottom_30">
 <div class="full">
  <div class="footer_blog_2 width_9">
   <h4>Blog</h4>
 </div>
 <div class="blog_post_footer">
   <div class="blog_post_img"> <img width="80" height="80" src="images/scr1.png" alt="#"> </div>
   <div class="blog_post_cont">
    <p class="date">July 22, 2015</p>
    <p class="post_head">Round and round like a carousel</p>
  </div>
</div>
<div class="blog_post_footer">
 <div class="blog_post_img"> <img width="80" height="80" src="images/scr2.png" alt="#"> </div>
 <div class="blog_post_cont">
  <p class="date">July 22, 2015</p>
  <p class="post_head">Round and round like a carousel</p>
</div>
</div>
<div class="blog_post_footer">
 <div class="blog_post_img"> <img width="80" height="80" src="images/scr3.png" alt="#"> </div>
 <div class="blog_post_cont">
  <p class="date">July 22, 2015</p>
  <p class="post_head">Round and round like a carousel</p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- footer bottom -->
<div class="footer_bottom">
  <p>Dessigned and developed by <strong>Ahsegar Team</strong></p>
</div>
</footer>
<!-- end footer -->
<!--=========== js section ===========-->
<!-- jQuery (necessary for Bootstrap's JavaScript) -->
<script src="<?= base_url('assets/templat') ?>/js/jquery.min.js"></script>
<script src="<?= base_url('assets/templat') ?>/js/popper.min.js"></script>
<script src="<?= base_url('assets/templat') ?>/js/bootstrap.min.js"></script>
<!-- wow animation -->
<script src="<?= base_url('assets/templat') ?>/js/wow.js"></script>
<!-- custom js -->
<script src="<?= base_url('assets/templat') ?>/js/custom.js"></script>
<!-- google map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
<!-- end google map js -->
</body>
</html>