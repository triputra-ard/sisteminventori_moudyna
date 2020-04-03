<div class="table-responsive">
  <table id="bootstrap-data-table-export" class="table table-bordered table-striped table-hover">
    <thead>
      <th>ID</th>
      <th>Nama Barang</th>
      <th>Jumlah</th>
      <th>Jenis Satuan</th>
      <th>Harga</th>
      <th>Tanggal Masuk</th>
      <th>Opsi</th>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM barang";
      $mysql = mysqli_query($db, $sql);
      while ($warehousein = mysqli_fetch_assoc($mysql)) {

      $currentdate = $warehousein['tanggal_barang'];
      $newdate = strtotime($currentdate);
      $warehousetime = date("D, d-m-y H:i:s",$newdate);
      include 'model/form.warehouse.out.php';
      ?>
      <tr>
        <td><?php echo $warehousein['id_barang']; ?></td>
        <td><?php echo $warehousein['nama_barang']; ?></td>
        <td><?php echo $warehousein['jumlah_barang']; ?></td>
        <td><?php echo $warehousein['satuan_barang']; ?></td>
        <td>Rp.<?php echo number_format($warehousein['harga_barang'],0,',','.'); ?></td>
        <td><?php echo $warehousetime; ?></td>
        <td><a href="warehouse.edit?id=<?php echo $warehousein['id_barang']; ?>" class="btn btn-sm btn-primary"><i class="fas fa-edit"></i> Edit</a> |
          <button data-toggle="modal" data-target="#warehouse<?php echo $warehousein['id_barang']; ?>" class="btn btn-sm btn-success"><i class="fas fa-dolly"></i> Barang keluar</button> </td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>
