<?php require "../models/member.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="../js/main.js"></script>
    <style type="text/css">
        .page{
            size: landscape;
        }
    </style>
</head>
<body class=".page">
    <div class="col-xl-7 col-lg-7">
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
    </div>
</body>
<script type="text/javascript" media="print">
    chart();
    setTimeout(function(){
        window.print();
    },1300);
</script>
<script src="../vendor/chart.js/Chart.min.js"></script>
<script src="../js/main.js"></script>
<script src="../vendor/jquery/jquery.min.js"></script>
<script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="../js/sb-admin-2.min.js"></script>
<script src="../vendor/chart.js/Chart.min.js"></script>
</html>