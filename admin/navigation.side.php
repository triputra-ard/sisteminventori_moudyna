<?php include 'head.php'; ?>
<body class="warehouse-focus">
<?php include 'model/modal.logout.php'; ?>
<!-- Left Panel -->
<aside id="left-panel" class="left-panel">
  <font face="SEGOE UI SEMIBOLD">
    <nav class="navbar navbar-expand-sm navbar-default">

        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="#"><h4 class="text-white">Toko <b style="color:rgb(255, 255, 255);"> Rizky </b> <b style="color:rgb(255, 1, 214);"> Hani </b></h4> </a>
            <a class="navbar-brand hidden" href="#"><b style="color:rgb(255, 255, 255);">R</b><b style="color:rgb(255, 1, 214);">H</b></a>
        </div>

        <div id="main-menu" class="main-menu collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <hr>
                <li class="<?php if($currentpage == "home") echo "active"; ?>">
                    <a href="admin.dashboard"><i class="menu-icon fa fa-laptop"></i>Dasbor </a>
                </li>

                <h3 class="menu-title text-light">Barang Masuk</h3><!-- /.menu-title -->
                <li class="<?php if($currentpage == "warehousein") echo "active"; ?> menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" class="text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-warehouse"></i>Master Data Barang</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fas fa-dolly-flatbed"></i><a href="warehouse.add">Tambah Barang</a></li>
                        <li><i class="fas fa-clipboard-list"></i><a href="warehouse.view">Lihat Barang Masuk</a></li>
                    </ul>
                </li>
                <h3 class="menu-title text-light">Barang Keluar</h3>
                <li class="<?php if($currentpage == "warehouseout") echo "active"; ?> menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-dolly"></i>Master Data Barang Keluar</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fas fa-dolly"></i><a href="report.out">Lihat Barang Keluar</a></li>
                    </ul>
                </li>
                <h3 class="menu-title text-light">Transaksi</h3>
                <li class="<?php if($currentpage == "transaction") echo "active"; ?> menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fas fa-money-check-alt"></i>Data Transaksi</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fas fa-money-check-alt"></i><a href="transaction.create">Buat Transaksi</a></li>
                        <li><i class="fas fa-file-invoice-dollar"></i><a href="invoice.history">Riwayat Faktur</a></li>
                    </ul>
                </li>
                <h3 class="menu-title text-light">Laporan</h3>
                <li class="<?php if($currentpage == "report") echo "active"; ?> menu-item-has-children dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-table"></i>Data Laporan</a>
                    <ul class="sub-menu children dropdown-menu">
                        <li><i class="fas fa-print"></i><a href="report.create">Buat Laporan</a></li>
                    </ul>
                </li>
                <h3 class="menu-title text-light">Tentang</h3>
                <li class="<?php if($currentpage == "about") echo "active"; ?>">
                    <a href="about"> <i class="menu-icon fas fa-info-circle"></i>Tentang</a>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
  </font>
</aside><!-- /#left-panel -->

<!-- Left Panel -->

<!-- Right Panel -->

<div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header bg-primary">

        <div class="header-menu">

            <div class="col-sm-6">
                <a id="menuToggle" class="menutoggle pull-left"><i class="fas fa-grip-vertical"></i></a>
                <div class="header-left">
                </div>
            </div>

            <div class="col-sm-5">
                <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle text-light" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-id-badge"></i> <?php echo @$_SESSION[nama_admin]; ?>
                    </a>

                    <div class="user-menu dropdown-menu">
                        <a class="nav-link" href="information"><i class="fa fa-user"></i> Informasi Profil</a>

                        <a class="nav-link" href="#" data-toggle="modal" data-target="#Logout"><i class="fa fa-power-off"></i> Keluar</a>
                    </div>
                </div>
            </div>
        </div>

    </header><!-- /header -->
    <!-- Header-->
<?php include 'notification.code.php'; ?>
