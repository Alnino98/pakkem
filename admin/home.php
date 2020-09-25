<?php require "models/member.php" ?>
<?php require "base/navbar.php" ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->
    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total
                                Pendaftar</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <p id="total_pendaftar"><?= jumlah(0); ?></p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-users fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Anggota
                                Aktif</div>
                            <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">~</div>
                                </div>
                                <div class="col">
                                    <div class="progress progress-sm mr-2">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 50%"
                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-user-o fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Anggota Diterima</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= jumlah(1); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-thumbs-down fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Pending Requests Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Tunda
                                </br>(File Tidak Komplit)</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= jumlah(2); ?></div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-thumbs-down fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->

    <div class="row">
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">Grafik Keanggotaan</h1>
            <p class="mb-4">Grafik perkembangan jumlah anggota dan aktifitas komunitas PAKKEM.org</p>

            <!-- Content Row -->
            <div class="row">

                <div class="col-xl-8 col-lg-7">

                    <!-- Area Chart -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Jumlah Member Mendaftar Thn.
                                <?= $tahun; ?></h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="lineChart"></canvas>
                            </div>
                            <hr>
                            Info detail member bisa dilihat di
                            <a
                                href="http://localhost/pakkem/admin/templates/daftar_anggota.php">/pakkem/admin/templates/daftar_anggota.php</a>
                            di fitur kelola
                            Admin.
                        </div>
                    </div>

                    <!-- Bar Chart delete-->
                </div>

                <!-- Donut Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-2">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-1">
                            <h6 class="m-2 font-weight-bold text-primary">Rasio Member (%)</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body">
                            <div class="chart-area">
                                <canvas id="doughnutChart" style="width:100% !important;"></canvas>
                            </div>
                            <hr>
                            Info detail member bisa dilihat di
                            <code>tabel-anggota/anggota-terdaftar/anggota-aktif</code> di fitur kelola
                            Admin.
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- Content Row -->
    <div class="row">
    </div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<?php require "base/footer.php" ?>