<?php
$titlepage = "Dasbor - Admin";
$currentpage = "home";
include 'navigation.side.php'; ?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Dasbor</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Menu Utama</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content mt-3">

  <div class="row">
      <div class="col-md-6 col-lg-4">
        <a href="warehouse.view">
        <div class="card text-white bg-flat-color-1">
          <div class="card-body pb-0">
            <?php
            $sql1 = "SELECT COUNT(*) FROM barang";
            $mysql1 = mysql_query($sql1);
            $goodsavailable = mysql_result($mysql1,0);
             ?>
            <h4 class="count"><?php echo $goodsavailable; ?></h4>
            <p class="text-light"><i class="fas fa-dolly-flatbed"></i> Barang Tersedia</p>
          </div>
        </div>
      </a>
      </div>

    <div class="col-md-6 col-lg-4">
      <a href="report.out">
        <div class="card text-white bg-flat-color-3">
          <div class="card-body pb-0">
            <?php
            $sql2 = "SELECT COUNT(*) FROM barang_keluar";
            $mysql2 = mysql_query($sql2);
            $warehouseout = mysql_result($mysql2,0);
             ?>
            <h4 class="count"><?php echo $warehouseout; ?></h4>
            <p class="text-light"><i class="fas fa-dolly"></i> Barang Keluar</p>
          </div>
        </div>
      </a>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="card text-white bg-flat-color-4">
        <div class="card-body pb-0">
          <?php
          $sql3 = "SELECT COUNT(*) FROM barang WHERE jumlah_barang < 10 ";
          $mysql3 = mysql_query($sql3);
          $stockless10 = mysql_result($mysql3,0);
           ?>
          <h4 class="count"><?php echo $stockless10; ?></h4>
          <p class="text-light"><i class="fas fa-boxes"></i> Stok kurang dari 10</p>
        </div>
      </div>
    </div>
  </div>

</div> <!-- .content -->

</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include 'foot.php'; ?>
