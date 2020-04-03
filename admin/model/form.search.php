<form action="<?php if($currentpage == "transaction") echo "transaction.create"; elseif($currentpage == "transaction") echo "report.create"; ?>" method="get">
  <div class="row form-group">
      <div class="col-xl-2">
          <label class="form-group-label">Pilih tanggal</label>
      </div>
      <div class="col-xl-6">
        <input class="form-control" type="date" name="date" <?php $search = isset($_GET['date']) ? (string)$_GET['date'] : '';?>>
      </div>
  </div>
  <div class="form-group">
    <button type="submit" class="btn btn-block btn-primary"><i class="fas fa-dolly"></i> Lihat Barang Keluar</button>
  </div>
</form>
