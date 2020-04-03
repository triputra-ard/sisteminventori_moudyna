<?php
if (!empty($_GET['info'])) {
  if ($_GET['info'] == "SuccessAdd") {
    echo '
    <div class="alert suffee-alert alert-success alert-dismissable animated fadeInDown">
      <span class="badge badge-pill badge-success"><i class="fas fa-dolly-flatbed"></i></span>
      Barang ditambahkan
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
    </div>
    ';
  }
  elseif ($_GET['info'] == "SuccessEdit") {
    echo '
    <div class="alert suffee-alert alert-success alert-dismissable animated fadeInDown">
      <span class="badge badge-pill badge-success"><i class="fas fa-dolly-flatbed"></i></span>
      Barang diperbarui
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
    </div>
    ';
  }
  elseif ($_GET['info'] == "Exported") {
    echo '
    <div class="alert suffee-alert alert-success alert-dismissable animated fadeInDown">
      <span class="badge badge-pill badge-success"><i class="fas fa-dolly"></i></span>
      Barang ditambahkan <a href="report.out" class="alert-link"> Cek disini</a>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">x</button>
    </div>
    ';
  }
}
 ?>
