<div class="table-responsive">
  <table id="bootstrap-data-table-export" class="table table-bordered table-striped table-hover">
    <thead>
      <th>ID</th>
      <th>Nama Barang</th>
      <th>Jumlah Keluar</th>
      <th>Harga Total</th>
      <th>Tanggal Keluar</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM barang_keluar a
      JOIN barang b ON a.id_barang = b.id_barang";
      $mysql = mysqli_query($db, $sql);
      while ($warehouseout = mysqli_fetch_assoc($mysql)) {

      $currentdate = $warehouseout['tanggal_barang'];
      $newdate = strtotime($currentdate);
      $warehousetime = date("D, d-m-y H:i:s",$newdate);
      ?>
      <tr>
        <td><?php echo $warehouseout['id_keluar']; ?></td>
        <td><?php echo $warehouseout['nama_barang']; ?></td>
        <td><?php echo $warehouseout['jumlah_keluar']; ?> <?php echo $warehouseout['satuan_barang']; ?></td>
        <td>Rp.<?php echo number_format($warehouseout['harga_keluar'],0,',','.'); ?></td>
        <td><?php echo $warehousetime; ?></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
