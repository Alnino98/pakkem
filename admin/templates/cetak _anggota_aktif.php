<?php require "../models/member.php"; ?>

<!DOCTYPE html>
<html>

<head>
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">
    <title>CETAK PRINT DATA ANGGOTA TERPILIH</title>
</head>

<body>

    <center>

        <h2>DATA LAPORAN ANGGOTA TERPILIH</h2>

    </center>

    <?php
        $month = date('m');
        $year = date('Y');
        $aktif = "SELECT * FROM `log` WHERE MONTH(timestamp) = '$month' AND YEAR(timestamp) = '$year'";
        $anggota_aktif = mysqli_query($link, $aktif);
        
     ?>

    <div class="container-fluid" id="print">

        <!-- Page Heading -->
        <table class="small table">
            <tr>
            <th>Nomor</th>
            <th>Email</th>
            <th>Nama</th>
            <th>Nomor Hp</th>
            <th>Terakhir Login</th>
            </tr>
              <?php $i=1; ?>
             <?php while ($row = mysqli_fetch_array($anggota_aktif)) {?>
                <?php $email = $row['email']; ?>
                
                <?php $anggota = "SELECT * FROM anggota WHERE email = '$email'"; ?>
                <?php $detail = mysqli_query($link, $anggota); ?>
                
                <?php if (!$detail) {
                    echo mysqli_error($link);
                } ?>
          <tr>
                <td><?php echo $i++; ?></td>
                <td><?php echo $row['email']; ?></td>
                <?php while ($row_detail = mysqli_fetch_array($detail)) {?>
                    <td><?= $row_detail['nama']; ?></td>
                    <td><?= $row_detail['no_hp']; ?></td>
                <?php } ?>
                    <td><?= $row['timestamp']; ?></td>
             <?php } ?>
          </tr>  
            
        </table>
        <td>Jumlah Anggota Aktif: <?= mysqli_num_rows($anggota_aktif) ?></td>
    </div>
    <script>
    window.print();
    printTest();
    </script>

    <script src="../js/print.js"></script>
</body>

</html>