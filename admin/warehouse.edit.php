<?php
$titlepage = "Edit Barang";
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
                    <li class="active">Edit Barang</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-12">
  <div class="card transparent animated bounceInDown">
    <div class="card-header bg-success">
      <h4 class="text-center text-light">Form Edit Barang</h4>
    </div>
    <div class="card-body">
      <?php include 'model/form.warehouse.edit.php'; ?>
    </div>
  </div>
</div>


</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include 'foot.php'; ?>
