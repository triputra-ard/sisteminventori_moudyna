<?php
$id = $_GET['id'];
$sql = "SELECT * FROM barang WHERE id_barang = '$id'";

$mysql = mysql_query($sql);
while ($editor = mysql_fetch_assoc($mysql)) {
 ?>
<form class="text-dark" action="control/script.barang?edit" method="post">
  <div class="row form-group">
    <div class="col-md-2">
      <label class="form-control-label">ID Barang</label>
    </div>
    <div class="col-md-6">
      <input class="form-control" type="text" readonly name="id" value="<?php echo $editor['id_barang']; ?>">
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-2">
      <label class="form-control-label">Nama Barang</label>
    </div>
    <div class="col-md-6">
      <input class="form-control" type="text" name="nama" placeholder="Masukkan nama barang" required value="<?php echo $editor['nama_barang']; ?>">
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-2">
      <label class="form-control-label">Jumlah</label>
    </div>
    <div class="col-md-6">
      <input class="form-control" min="0" type="number" name="jumlah" onkeypress="return OnlyNumber(event)" placeholder="Masukkan jumlah barang" required value="<?php echo $editor['jumlah_barang']; ?>">
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-2">
      <label class="form-control-label">Satuan barang</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" name="satuan" required>
        <option value="<?php echo $editor['satuan_barang'] ?>"><?php echo $editor['satuan_barang'];?></option>
        <option value="">Pilih</option>
        <option value="bks">Bungkus(bks)</option>
        <option value="pak">Pak(pak)</option>
        <option value="kgm">Kilogram(kgm)</option>
        <option value="lbr">Lembar(lbr)</option>
        <option value="lsn">Lusin(lsn)</option>
        <option value="kdi">Kodi(kdi)</option>
        <option value="dus">Dus(dus)</option>
        <option value="krg">Karung(krg)</option>
      </select>
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-2">
      <label class="form-control-label">Harga Barang</label>
    </div>
    <div class="col-md-6">
      <input class="form-control" type="text" name="harga" placeholder="Masukkan harga" onkeypress="return OnlyNumber(event)" required value="<?php echo $editor['harga_barang']; ?>">
    </div>
  </div>
  <hr>
  <button type="submit" name="edit" class="btn btn-primary btn-block"><i class="fas fa-edit"></i> Edit barang</button>
</form>
<?php } ?>
