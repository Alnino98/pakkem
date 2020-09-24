<?php require "../models/member.php"; ?>
<?php require "base/navbar.php"; ?>

<div class="row">
    <div class="col-xl-7 col-lg-7">
        <!-- Area Chart -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">
                    Grafik Anggota Tahun <?= $tahun; ?>
                </h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="lineChart"></canvas>
                </div>
                <hr>
            </div>
        </div>
        <!-- Bar Chart delete-->
    </div>

    <!-- Donut Chart -->
    <div class="col-xl-4 col-lg-5">
        <div class="card shadow mb-2">
            <!-- Card Header - Dropdown -->
            <div class="card-header py-1">
                <h6 class="m-2 font-weight-bold text-primary">Keterangan</h6>
            </div>
            <!-- Card Body -->
            <div class="card-body">
                <div class="chart-area">
                    <table>
                        <tr>
                            <th>Bulan</th>
                        </tr>
                        <tr>
                            <td><p>Pada bawah grafik menunjukkan bulan.</p></td>
                        </tr>
                        <tr>
                            <th>Jumlah</th>
                        </tr>
                        <tr>
                            <td><p>Pada pinggir kiri grafik menunjukkan nilai jumlah.</p></td>
                        </tr>
                    </table>
                    <a href="print_grafik_anggota.php" add target="_blank" class="btn btn-danger">Print Grafik</a>
                </div>
                <hr>
            </div>
        </div>
    </div>
</div>
<script>chart();</script>
<?php require "base/footer.php"; ?>