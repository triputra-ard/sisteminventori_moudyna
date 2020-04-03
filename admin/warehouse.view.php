<?php
$titlepage = "Lihat Barang";
$currentpage = "warehousein";
include 'navigation.side.php'; ?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Master Data Barang</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Lihat Barang</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-12">
  <div class="card transparent animated bounceInDown">
    <div class="card-header bg-success">
      <h4 class="text-center text-light">Data Barang</h4>
    </div>
    <div class="card-body">
      <?php include 'view/view.warehouse.in.php'; ?>
    </div>
  </div>
</div>


</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include 'foot.php'; ?>
