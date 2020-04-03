<?php
include '../../function/access.db.php';

if (isset($_POST['export'])) {
  $id = $_POST['id'];
  $id_admin = $_POST['id_admin'];
  $id_barang = $_POST['id_barang'];
  $jumlah_keluar = $_POST['jumlah_keluar'];
  $harga_keluar = $_POST['harga_barang'];
  $jumlah_barang = $_POST['jumlah_barang'];
  $total = $harga_keluar*$jumlah_keluar;
  $tanggal = date("Y-m-d H:i:s");
  $pengurangan = $jumlah_barang-$jumlah_keluar;
  $sql = "INSERT INTO barang_keluar
  VALUES('$id', '$id_barang' ,'$jumlah_keluar' ,'$total' ,'$tanggal', '$id_admin');";
  $mysql = mysqli_query($db, $sql);

  if ($mysql) {
    $sqlupdate = "UPDATE barang SET jumlah_barang = '$pengurangan' WHERE id_barang = '$id_barang'";
    $mysqlupdate = mysqli_query($db,$sqlupdate);
    header('location:../warehouse.view?info=Exported');
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}

 ?>
