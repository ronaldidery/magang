<!DOCTYPE html>
<html lang="en">
<head>
  <title>Login Admin</title>
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/bootstrap.min.css" />
 
  <link rel="stylesheet" href="<?= base_url('assets/templat') ?>/css/style.css" />
</head>
 <body>
    <div class="container-fluid">
      <div class="row justify-content-center mt-5">
        <div class="col-md-6 col-lg-3">
          <div class="card">
            <div class="card-header bg-transparent mb-0"><h5 class="text-center">Admin <span class="font-weight-bold text-primary">LOGIN</span></h5></div>
            <div class="card-body">
              <form action="">
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                  <input type="text" name="" class="form-control" placeholder="Password">
                </div>
                <div class="form-group custom-control custom-checkbox">
                  <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                  <label class="custom-control-label" for="customControlAutosizing">Remember me</label>
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