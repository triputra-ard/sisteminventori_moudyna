<?php
$titlepage = "Cetak";
include 'head.php';

?>
<?php if (isset($_GET['report'])): ?>
  <?php
  $date = $_GET['date'];
   ?>
   <body>
     <table class="table table-bordered table-stripped table-hover">
       <thead>
         <th>No.</th>
         <th>ID</th>
         <th>Nama Barang</th>
         <th>Jumlah Keluar</th>
         <th>Harga</th>
         <th>Tanggal</th>
       </thead>
       <tbody>
         <?php
         $sql = "SELECT * FROM barang_keluar a
         JOIN barang b ON a.id_barang = b.id_barang
         WHERE a.tanggal_keluar LIKE '%$date%'";
         $mysql = mysqli_query($db, $sql);
         $no = 1;
         while ($report = mysql_fetch_assoc($mysql)) {
         ?>
         <tr>
           <td><?php echo $no++; ?></td>
           <td><?php echo $report['id_keluar']; ?></td>
           <td><?php echo $report['nama_barang']; ?></td>
           <td><?php echo $report['jumlah_keluar']; ?> <?php echo $report['satuan_barang']; ?></td>
           <td>Rp.<?php echo number_format($report['harga_keluar'],0,'.',','); ?></td>
           <td><?php echo $report['tanggal_keluar']; ?></td>
         </tr>
       <?php } ?>
       </tbody>
     </table>
     <h4 class="text-center">Dicetak : <?php echo date("D,d - M - Y H:i:s").@$_SESSION[nama_admin]; ?></h4>
     <script> window.print(); </script>
   </body>
<?php elseif (isset($_GET['trx'])): ?>
  <?php
  $date = $_GET['date'];
  $invoice = $_GET['invoice'];

  $replacedate = strtotime($date);
  $currentdate = date("D, d-m-Y",$replacedate);

  $sum = "SELECT * FROM transaksi a
  JOIN admin c ON a.id_admin = c.id_admin
  WHERE a.id_faktur = '$invoice'";
  $mysqlsum = mysqli_query($db, $sum);
  $head = mysqli_fetch_assoc($mysqlsum);
   ?>
   <body>
     <div class="row">
       <div class="col-xl-6">
         <table>
           <tr>
             <td>No Faktur :</td>
             <td><?php echo $invoice; ?></td>
           </tr>
           <tr>
             <td>Nama Admin :</td>
             <td><?php echo $head['nama_admin']; ?></td>
           </tr>
           <tr>
             <td>Tanggal :</td>
             <td><?php echo $currentdate; ?></td>
           </tr>
         </table>
       </div>
     </div>
     <table class="table table-bordered table-stripped table-hover">
       <thead>
         <th>No.</th>
         <th>ID</th>
         <th>Nama Barang</th>
         <th>Jumlah Keluar</th>
         <th>Harga</th>
       </thead>
       <tbody>
         <?php
         $sql = "SELECT * FROM barang_keluar a
         JOIN barang b ON a.id_barang = b.id_barang
         WHERE a.tanggal_keluar LIKE '%$date%'";
         $mysql = mysqli_query($db, $sql);
         $no = 1;
         while ($report = mysqli_fetch_assoc($mysql)) {
         ?>
         <tr>
           <tr>
             <td><?php echo $no++; ?></td>
             <td><?php echo $report['id_keluar']; ?></td>
             <td><?php echo $report['nama_barang']; ?></td>
             <td><?php echo $report['jumlah_keluar']; ?> <?php echo $report['satuan_barang']; ?></td>
             <td>Rp. <?php echo number_format($report['harga_keluar'],0,',','.'); ?></td>
           </tr>
         </tr>
       <?php } ?>
       </tbody>
       <tfoot>
         <th colspan="4">Total harga :</th>
         <th>Rp. <?php echo number_format($head['harga_total'],0,',','.'); ?></th>
       </tfoot>
     </table>
     <script> window.print(); </script>
   </body>
<?php endif; ?>


<?php include 'foot.php'; ?>
