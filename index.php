<?php
$titlepage = "Beranda - Masuk";
include 'navigation.head.php';
?>
<br><br><br>
<div class="page-wrapper">
  <!--Start page -->
  <div class="container">

    <div class="sufee-login align-content-center">

      <div class="login-content animated bounceInDown">
        <div class="login-logo">
          <h4 class="text-center text-white">Aplikasi Inventori</h4>
        </div>
        <div class="login-form bg-primary text-white">
          <form class="" action="control/script.login.php" method="post">
            <div class="row form-group">
              <div class="col col-md-4">
                <label class="form-control-label text-white"><i class="fa fa-user"></i> Username</label>
              </div>
              <div class="col-6 col-md-8">
                <input class="form-control" type="text" name="username" placeholder="Masukkan username" required>
              </div>
            </div>
            <div class="row form-group">
              <div class="col col-md-4">
                <label class="form-control-label text-white"><i class="fa fa-key"></i> Password</label>
              </div>
              <div class="col-6 col-md-8">
                <input class="form-control" type="password" name="password" placeholder="Masukkan password" required>
              </div>
            </div>
            <hr>
            <div class="form-group">
              <button type="submit" name="login" class="btn btn-success btn-block">Masuk <i class="fa fa-sign-in"></i> </button>
            </div>
          </form>
        </div>
      </div>

    </div>



  </div>
  <!--End page -->
</div>
<?php include 'navigation.foot.php'; ?>
