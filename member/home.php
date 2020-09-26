<?php require "models/member.php" ?>
<?php require "base/navbar.php" ?>
<?php
    if(isset($_POST['logout'])){
        session_destroy();
        header("location: index.php");
    }
    $email = $_SESSION['username'];
    $agenda_diikuti = "SELECT * FROM agenda_diikuti WHERE email = '$email' ORDER BY id ASC";
    $sql = mysqli_query($link, $agenda_diikuti);
    $jumlah_agenda_diikuti = mysqli_num_rows($sql);

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $id_agenda = $_POST['id_agenda'];
        $hapus = "DELETE FROM agenda_diikuti WHERE id_agenda = '$id_agenda' AND email = '$email'";
        $hapus_agenda = mysqli_query($link, $hapus);
        if($hapus_agenda){
            echo "<script>window.location.href='home.php'</script>";
        }
    }
?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        <a href="templates/modul.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-download fa-sm text-white-50"></i> Download Modul</a>
    </div>

    <!-- Content Row -->
    <div class="row float-center">

        <!-- Total Agenda -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Agenda</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <p><?= jumlah(1); ?></p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-calendar fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

         <!-- Total Modul -->
         <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Modul</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <p><?= jumlah(2); ?></p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fa fa-file fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

       <!-- Jadawal agenda -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Total Agenda Diikuti</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                <p><?= $jumlah_agenda_diikuti; ?></p>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
<div class="container">
    <h5 class="text-dark">Agenda Diikuti</h5>
    <table class="table">
        <tr class="thead-dark">
            <th>Nomor</th>
            <th>Agenda</th>
            <th>Tanggal</th>
            <th>Ubah</th>
        </tr>
        <tr>
            <?php $i=1; ?>
            <?php while ($row = mysqli_fetch_array($sql)) { ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= $row['kegiatan'];?></td>
                    <td><?= $row['waktu_agenda'];?></td>
                    <form action="" method="post">
                        <td>
                            <input type="hidden" name="id_agenda" value="<?= $row['id_agenda']; ?>">
                            <input type="hidden" name="email" value="<?= $row['email']; ?>">
                            <button class="btn btn-danger" type="submit" name="submit">Batalkan</button>
                        </td>
                    </form>
                </tr>
            <?php } ?>
            
        </tr>
    </table>
</div>
</div>
<!-- End of Main Content -->
<?php require "base/footer.php" ?>