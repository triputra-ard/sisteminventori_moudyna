<?php
include '../../function/access.db.php';

if (isset($_POST['faktur'])) {
  $id = $_POST['id_faktur'];
  $id_admin = $_POST['id_admin'];
  $harga = $_POST['harga'];
  $tanggal = date("Y-m-d H:i:s");
  $date = $_POST['date'];
  $sql = "INSERT INTO transaksi
  VALUES('$id','$harga' ,'$tanggal', '$id_admin');";
  $mysql = mysqli_query($db, $sql);

  if ($mysql) {
    header('location:../printout?trx&invoice='.$id.'&date='.$date);
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}

 ?>
