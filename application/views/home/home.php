<section >
 <div id="carouselExampleIndicators" class="carousel slide mt-3 ml-3 mr-3" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="<?= base_url('assets/templat') ?>/images/LOGO_MTs.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets/templat') ?>/images/LOGO_MTs.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="<?= base_url('assets/templat') ?>/images/LOGO_MTs.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</section>

<div class="container-fluid mt-3">
  <div class="container">
    <h3>Sugeng Rawuh</h3>
    <p>Selamat datang di Website Yayasan Bima Bhakti, melalui website ini kami berharap dapat dijadikan sebagai media informasi untuk para dermawan yang telah atau akan ikut beramal, bersodaqoh, menginfaqkan sebagian hartanya untuk anak-anak yatim melalui Yayasan Bima Bhakti.</p>
    <p>Silahkan Anda telusuri website kami ini, agar mengetahui lebih jauh tentang Yayasan Bima Bhakti. Akhir kata atas apa yang telah Anda Infaqkan kami mengucapkan terima kasih yang sebesar-besarnya.</p>
    <p>"Jazakumullah khairan katsira"</p>
  </div> 
</div>

<div id="page-wrap">
  <!-- end header -->
  <div class="side-footer-line"></div>
  <!-- Kolom Pendaftaran -->      
  <div class="container-fluid">
    <div class="container">
      <h4>INFORMASI PPDB MTS BIMA BHAKTI PERTIWI</h4>
      <a href="<?php  echo site_url ('home/info_ppdb'); ?>" class="white_bt bt_main">Info PPDB</a>
    </div>
  </div>
  <!-- Akhir Kolom Pendaftaran -->
  <div class="side-footer-line"></div>
  <!-- section -->

  <?php   
    function limit_words($string, $word_limit){
        $words = explode(" ",$string);
        return implode(" ",array_splice($words,0,$word_limit));
    }
    ?>

  <section class="layout_padding">
    <center>
      <h2>INFORMASI</h2>
    </center>
    <div class="row row_row">
      <?php foreach ($berita as $value) : ?>
      <div class="col-sm-6">
        <div class="card border-success">
          <div class="card-body">
            <img class="d-block w-100" src="<?php echo base_url().'assets/foto/berita/'.$value['berita_image'];?>">
            <h5 class="card-title"><?= $value['berita_judul']; ?></h5>
            <p class="card-text"><?= limit_words($value['berita_isi'],20);?></p>
            <a href="#" class="bt_main btn-dark">Go somewhere</a>
          </div>
        </div> 
      </div>
      <?php endforeach; ?> 
    </div>
  </section>
</div>

<!-- end section -->

<!-- section -->
<section class="layout_padding">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="full text_align_center">
          <div class="heading_main center_head_border heading_style_1">
            <h2>Tenaga Pengajar</h2>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <!--<?php foreach ($guru as $value) : ?>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
        <div class="full team_blog">
          <div class="team_member_img"><img src="<?= base_url('assets/templat') ?>/images/t1.png" alt="#"></div>
          <div class="team_imform">
            <p class="team_mem_name">JD Adams</p>
            <p>Designer</p>
          </div>
        </div>
      </div>
      <?php endforeach; ?> -->
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
        <div class="full team_blog">
          <div class="team_member_img"><img src="<?= base_url('assets/templat') ?>/images/t2.png" alt="#"></div>
          <div class="team_imform">
            <p class="team_mem_name">Rinkal oberol</p>
            <p>Developer</p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
        <div class="full team_blog">
          <div class="team_member_img"><img src="<?= base_url('assets/templat') ?>/images/t2.png" alt="#"></div>
          <div class="team_imform">
            <p class="team_mem_name">Rinkal oberol</p>
            <p>Developer</p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
        <div class="full team_blog">
          <div class="team_member_img"><img src="<?= base_url('assets/templat') ?>/images/t3.png" alt="#"></div>
          <div class="team_imform">
            <p class="team_mem_name">Jason Deol</p>
            <p>Seo</p>
          </div>
        </div>
      </div>
      <div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
        <div class="full team_blog">
          <div class="team_member_img"><img src="<?= base_url('assets/templat') ?>/images/t4.png" alt="#"></div>
          <div class="team_imform">
            <p class="team_mem_name">Michellel Nathan</p>
            <p>Designer</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- end section -->