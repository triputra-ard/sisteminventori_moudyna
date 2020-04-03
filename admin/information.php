<?php
$titlepage = "Informasi";
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
                    <li class="active">Informasi Admin</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="row justify-content-center">
  <div class="col-sm-4">
    <div class="card transparent">
      <div class="card-header bg-info">
        <h3 class="text-center text-white">Informasi</h3>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table teble-striped">
            <tbody>
              <tr>
                <td>Nama Admin</td>
                <td><?php echo @$_SESSION[nama_admin]; ?></td>
              </tr>
              <tr>
                <td>Username</td>
                <td><?php echo @$_SESSION[username]; ?></td>
              </tr>
              <tr>
                <td>Password</td>
                <td><?php echo @$_SESSION[password] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

</div><!-- /#right-panel -->

<!-- Right Panel -->
<?php include 'foot.php'; ?>
