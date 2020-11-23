
<div class="container-fluid">
  <div class="row justify-content-center mt-5">
    <div class="col-md-6 col-lg-3">
      <div class="card">
        <div class="card-header bg-transparent mb-0"><h5 class="text-center">Admin <span class="font-weight-bold text-primary">LOGIN</span></h5></div>
        
        <?= $this->session->flashdata('message'); ?>

        <div class="card-body">
          <form action="<?= base_url('login'); ?>" method="post">
            <div class="form-group">
              <input type="text" name="username" class="form-control" placeholder="Username">
              <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="Password">
              <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form-group">
              <input type="submit" name="" value="Login" class="btn btn-primary btn-block">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
