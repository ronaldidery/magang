<!DOCTYPE html>
<html lang="en">
<head>
  <!-- site metas -->
  <title><?php echo $judul; ?></title>

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
  <!-- ajax -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/navbar.css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  </head>
  <body id="default_theme" class="home_page1">
    <!-- header -->
    <header class="header header_style1">
      <nav>
       <div class="container">
        <div class="row">
         <div class="col-md-12 col-lg-12">
          <div class="logo"><a href="index.html"><img src="<?= base_url('assets/templat') ?>/images/LOGO_MTs.png" alt="#" /></a></div>
          <div class="main_menu float-right">
           <div class="menu">
            <ul class="clearfix">
             <li><a href="<?= base_url(); ?>">Home</a></li>
             <li><a href="<?php echo site_url("profil"); ?>">Profile</a></li>
             <li><a href="service.html">Service</a></li>
             <li>
              <a href="#">Akademik</a>
              <ul>
                <li><a href="#">Fasilitas</a></li>
                <li><a href="#">Peserta Didik</a></li>
                <li><a href="#">Ekskul</a></li>
                <li><a href="#">Mapel</a></li>
                <li><a href="#">Biaya</a></li>
              </ul>
            </li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="team.html">Team</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div> 
      </div>
    </div>
  </div>
</nav>
</header>