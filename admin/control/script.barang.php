<?php
include '../../function/access.db.php';

if (isset($_POST['add'])) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $jumlah = $_POST['jumlah'];
  $satuan = $_POST['satuan'];
  $harga = $_POST['harga'];
  $tanggal = date("Y-m-d H:i:s");

  $sql = "INSERT INTO barang
  VALUES('$id', '$nama' ,'$jumlah' ,'$satuan' ,'$harga' ,'$tanggal')";
  $mysql = mysqli_query($db, $sql);

  if ($mysql) {
    header('location:../warehouse.view?info=SuccessAdd');
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}elseif (isset($_POST['edit'])) {

  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $jumlah = $_POST['jumlah'];
  $satuan = $_POST['satuan'];
  $harga = $_POST['harga'];
  $tanggal = date("Y-m-d H:i:s");

  $sql = "UPDATE barang SET nama_barang='$nama'
  ,jumlah_barang = '$jumlah'
  ,satuan_barang = '$satuan'
  ,harga_barang = '$harga'
  ,tanggal_barang = '$tanggal'
  WHERE id_barang = '$id'
  ";
  $mysql = mysqli_query($db, $sql);

  if ($mysql) {
    header('location:../warehouse.view?info=SuccessEdit');
  }else {
    echo "<script>alert('Gagal');
    window.history.back();</script>";
  }
}

 ?>
