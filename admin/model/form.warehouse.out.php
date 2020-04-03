<div class="modal fade" id="warehouse<?php echo $warehousein['id_barang']; ?>" tabindex="-1" role="dialog" aria-labelledby="staticModalLabel" aria-hidden="true" data-backdrop="false">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title text-light"><i class="fas fa-dolly"></i> Form Barang Keluar</h5>
                <button type="button" class="close text-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="" action="control/script.barang.keluar.php" method="post">
              <div class="modal-body">
                <div class="row form-group">
                  <div class="col-md-3">
                    <label class="form-control-label">ID</label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="id" value="<?php echo autokode("barang_keluar", date("Y-m-d")."-"); ?>" readonly required>
                    <input type="text" hidden readonly name="id_barang" value="<?php echo $warehousein['id_barang']; ?>">
                    <input type="text" hidden readonly name="harga_barang" value="<?php echo $warehousein['harga_barang']; ?>">
                    <input type="text" hidden readonly name="jumlah_barang" value="<?php echo $warehousein['jumlah_barang']; ?>">
                    <input type="text" hidden readonly name="id_admin" value="<?php echo @$_SESSION[id_admin]; ?>">
                  </div>
                </div>
                <div class="row form-group">
                  <div class="col-md-3">
                    <label class="form-control-label">Kuantitas</label>
                  </div>
                  <div class="col-md-6">
                    <input class="form-control" type="number" name="jumlah_keluar" min="0" max="<?php echo $warehousein['jumlah_barang']; ?>" required onkeypress="return OnlyNumber(event)" placeholder="Masukkan jumlah kuantitas">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-dismiss="modal">Batal</button>
                  <button type="submit" name="export" class="btn btn-success"><i class="fas fa-dolly"></i> Lanjutkan</button>
              </div>
            </form>
        </div>
    </div>
</div>
