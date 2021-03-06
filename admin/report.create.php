<?php
$titlepage = "Buat Laporan";
$currentpage = "report";
include 'navigation.side.php'; ?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Laporan</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Buat Laporan</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<!-- Search Form -->
<div class="col-xl-12">
  <div class="card transparent">
    <div class="card-header bg-primary">
      <h4 class="text-center text-white">Cari Laporan</h4>
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
      <h4 class="text-center text-white">Laporan : <?php echo $search; ?></h4>
    </div>
    <div class="card-body">
      <?php include 'view/view.report.create.php'; ?>
    </div>
  </div>
</div>

</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include 'foot.php'; ?>
