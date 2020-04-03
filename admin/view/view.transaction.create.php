<?php if (isset($_GET['date'])): ?>
<?php
$date = $_GET['date'];
$sql = "SELECT * FROM barang_keluar a
JOIN barang b ON a.id_barang = b.id_barang
WHERE a.tanggal_keluar LIKE '%$date%'";
$mysql = mysqli_query($db, $sql);
$sum = "SELECT SUM(harga_keluar) as total, nama_admin, tanggal_keluar FROM barang_keluar a
JOIN admin c ON a.id_admin = c.id_admin
WHERE a.tanggal_keluar LIKE '%$date%'";
$mysqlsum = mysqli_query($db,$sum);
$head = mysqli_fetch_assoc($mysqlsum);
?>
  <?php if (mysqli_num_rows($mysql) === 0): ?>
    <h4 class="text-center">Tidak ada barang keluar pada tanggal ini</h4>
  <?php else: ?>
    <form class="" action="control/script.trx.php" method="post">
      <div class="table-responsive">
        <div class="row">
          <div class="col-xl-6">
            <table>
              <tr>
                <td>No Faktur :</td>
                <td><input type="text" readonly class="form-control" name="id_faktur" value="<?php echo autokode("transaksi","RH-".date("Ymd-")); ?>"> </td>
              </tr>
              <tr>
                <td>Nama Admin :</td>
                <td><?php echo $head['nama_admin']; ?>
                  <input type="text" hidden readonly name="id_admin" value="<?php echo @$_SESSION[id_admin]; ?>">
                  <input type="text" hidden readonly name="harga" value="<?php echo $head['total']; ?>">
                  <input type="text" hidden readonly name="date" value="<?php echo $date; ?>">
                </td>
              </tr>
              <tr>
                <td>Tanggal :</td>
                <td><?php echo $date; ?></td>
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
            $no = 1;
            while ($report = mysqli_fetch_assoc($mysql)) {
            ?>
            <tr>
              <td><?php echo $no++; ?></td>
              <td><?php echo $report['id_keluar']; ?></td>
              <td><?php echo $report['nama_barang']; ?></td>
              <td><?php echo $report['jumlah_keluar']; ?> <?php echo $report['satuan_barang']; ?></td>
              <td>Rp. <?php echo number_format($report['harga_keluar'],0,',','.'); ?></td>
            </tr>
            <?php } ?>
          </tbody>
          <tfoot>
            <th colspan="4">Total harga :</th>
            <th>Rp. <?php echo number_format($head['total'],0,',','.'); ?></th>
          </tfoot>
        </table>

        <button type="submit" name="faktur" class="btn btn-block btn-info"><i class="fas fa-print"></i> Cetak Faktur</button>
      </div>
    </form>

  <?php endif; ?>
<?php else: ?>
  <h4 class="text-center">Untuk melihat laporan barang keluar. mohon pilih tanggal dahulu <i class="far fa-grin-wink"></i> </h4>
<?php endif; ?>
