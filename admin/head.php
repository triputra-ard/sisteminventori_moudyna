<!DOCTYPE html>
<?php
include '../function/paging.php';
include '../function/function-by-tri.php';
include '../function/access.db.php';
date_default_timezone_set("ASIA/JAKARTA");
session_start();
/*if (empty(@$_SESSION[nama_admin])) {
  echo "<script>alert('Login dahulu');
  window.location.href='../index';</script>";
}*/
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rizky Hani | <?php echo $titlepage; ?></title>

    <link rel="stylesheet" href="<?php echo $framework; ?>bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>font-awesome/css/all.min.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>jqvmap/dist/jqvmap.min.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>bootstrap/css/style.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>design-by-tri.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>animate.css/animate.min.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo $framework; ?>datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
  </head>
