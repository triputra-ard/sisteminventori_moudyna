<?php
include '../function/access.db.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";
$mysql = mysqli_query($db, $sql);
$session = mysqli_fetch_assoc($mysql);

if (mysqli_num_rows($mysql) > 0) {
  session_start();
  $_SESSION[id_admin] = $session['id_admin'];
  $_SESSION[nama_admin] = $session['nama_admin'];
  $_SESSION[username] = $session['username'];
  $_SESSION[password] = $session['password'];

  header('location:../admin/admin.dashboard');
}else {
  echo "<script> alert('Data tidak ditemukan');
  window.history.back();</script>";
}

 ?>
