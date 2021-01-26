<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Somehow I got an error, so I comment the title, just uncomment to show -->
    <title>Login Siswa</title>
    <!-- bootstrap css -->
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= base_url ('assets/admin') ?> /css/login.css">
  </head>
  <body>
    
    <div class="wrapper">
      <!-- Flash data -->
        <?php if ($this->session->flashdata('flash') ):  ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              NIS <strong>Tidak</strong> <?= $this->session->flashdata('flash'); ?>.
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <?php endif; ?>
      <div class="title">
      MTs Bima Bhakti
      </div>
      <form action="<?php echo base_url('output_nilai/nilai')?>" enctype="multipart/form-data" method="post">
              <div class="field">
                <input type="text" name="nis" class="form-control" placeholder="Masukkan NIS" required>
              </div>
             
              <div class="field">
                <input type="submit" value="Masuk"></input>
              </div>
      </form>
</div>
</body>
</html>
