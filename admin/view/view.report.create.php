<?php if (isset($_GET['date'])): ?>
<?php
$date = $_GET['date'];
$sql = "SELECT * FROM barang_keluar a
JOIN barang b ON a.id_barang = b.id_barang
WHERE a.tanggal_keluar LIKE '%$date%'";
$mysql = mysqli_query($db, $sql);
?>
  <?php if (mysqli_num_rows($mysql) === 0): ?>
    <h4 class="text-center">Tidak ada barang keluar pada tanggal ini</h4>
  <?php else: ?>

    <div class="table-responsive">
      <a target="_blank" href="printout?&report&date=<?php echo $date; ?>" class="btn btn-block btn-info"><i class="fas fa-print"></i> Cetak Laporan</a>
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
          $no = 1;
          while ($report = mysqli_fetch_assoc($mysql)) {
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo $report['id_keluar']; ?></td>
            <td><?php echo $report['nama_barang']; ?></td>
            <td><?php echo $report['jumlah_keluar']; ?> <?php echo $report['satuan_barang']; ?></td>
            <td>Rp. <?php echo number_format($report['harga_keluar'],0,',','.'); ?></td>
            <td><?php echo $report['tanggal_keluar']; ?></td>
          </tr>
        <?php } ?>
        </tbody>
      </table>
    </div>
  <?php endif; ?>
<?php else: ?>
  <h4 class="text-center">Untuk melihat laporan barang keluar. mohon pilih tanggal dahulu <i class="far fa-grin-wink"></i> </h4>
<?php endif; ?>
