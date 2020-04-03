<?php
$titlepage = "Tentang";
$currentpage = "about";
include 'navigation.side.php'; ?>
<div class="breadcrumbs">
    <div class="col-sm-4">
        <div class="page-header float-left">
            <div class="page-title">
                <h1>Tentang</h1>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
        <div class="page-header float-right">
            <div class="page-title">
                <ol class="breadcrumb text-right">
                    <li class="active">Informasi pengembang</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
  <div class="col-sm-4">
    <div class="card transparent">
      <div class="card-header bg-info">
        <h3 class="text-center text-white">Tentang</h3>
      </div>
      <div class="card-body">
        <div class="mx-auto d-block">
          <img class="rounded-circle mx-auto d-block" src="<?php echo $profile; ?>" alt="Profile">
          <h5 class="text-sm-center mt-2 mb-1">Moudyna Zulia Rahayu <br><small><b>Teknik Informatika - Universitas Pamulang </b></small></h5>
        </div>
      </div>
    </div>
  </div>
</div>

</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include 'foot.php'; ?>
