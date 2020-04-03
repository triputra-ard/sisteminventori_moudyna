<form class="text-dark" action="control/script.barang?add" method="post">
  <div class="row form-group">
    <div class="col-md-2">
      <label class="form-control-label">ID Barang</label>
    </div>
    <div class="col-md-6">
      <input class="form-control" type="text" readonly name="id" value="<?php echo autokode("barang", date("Ymd")."-"); ?>">
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-2">
      <label class="form-control-label">Nama Barang</label>
    </div>
    <div class="col-md-6">
      <input class="form-control" type="text" name="nama" placeholder="Masukkan nama barang" required>
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-2">
      <label class="form-control-label">Jumlah</label>
    </div>
    <div class="col-md-6">
      <input class="form-control" min="0" type="number" name="jumlah" onkeypress="return OnlyNumber(event)" placeholder="Masukkan jumlah barang" required>
    </div>
  </div>
  <div class="row form-group">
    <div class="col-md-2">
      <label class="form-control-label">Satuan barang</label>
    </div>
    <div class="col-md-6">
      <select class="form-control" name="satuan" required>
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
      <input class="form-control" type="text" name="harga" placeholder="Masukkan harga" onkeypress="return OnlyNumber(event)" required>
    </div>
  </div>
  <hr>
  <button type="submit" name="add" class="btn btn-primary btn-block"><i class="fas fa-dolly-flatbed"></i> Tambahkan barang</button>
</form>
