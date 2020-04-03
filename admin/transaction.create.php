<?php
$titlepage = "Buat Laporan";
$currentpage = "transaction";
include 'navigation.side.php'; ?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Transaksi</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Buat Transaksi</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Search Form -->
<div class="col-xl-12">
  <div class="card transparent">
    <div class="card-header bg-warning">
      <h4 class="text-center text-white">Transaksi</h4>
    </div>
    <div class="card-body">
      <?php include 'model/form.search.php'; ?>
    </div>
  </div>
</div>
<!-- Table view -->
<div class="col-xl-12">
  <div class="card transparent">
    <div class="card-header bg-success">
      <h4 class="text-center text-white">Transaksi : <?php echo $search; ?></h4>
    </div>
    <div class="card-body">
      <?php include 'view/view.transaction.create.php'; ?>
    </div>
  </div>
</div>

</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include 'foot.php'; ?>
