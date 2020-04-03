<?php
$sql = "SELECT * FROM transaksi a
JOIN admin b ON a.id_admin = b.id_admin";
$mysql = mysqli_query($db, $sql);
?>
<div class="table-responsive">
  <table id="bootstrap-data-table-export" class="table table-bordered table-stripped table-hover">
    <thead>
      <th>No.</th>
      <th>ID Faktur</th>
      <th>Harga</th>
      <th>Tanggal</th>
      <th>Nama Admin</th>
    </thead>
    <tbody>
      <?php
      $no = 1;
      while ($report = mysqli_fetch_assoc($mysql)) {
      ?>
      <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $report['id_faktur']; ?></td>
        <td>Rp. <?php echo number_format($report['harga_total'],0,',','.'); ?></td>
        <td><?php echo date("D, d-m-y", strtotime($report['tanggal_faktur'])); ?></td>
        <td><?php echo $report['nama_admin']; ?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>

</div>
