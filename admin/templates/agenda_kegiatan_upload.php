<!DOCTYPE html>
<html>
<head>
</head>
<body>
 

    <br/>
    <table border="1">
        <tr>
            <th>NO</th>
            <th>hari/tanggal</th>
            <th>Waktu Agenda</th>
            <th>Kegiatan</th>
            <th>Keterangan agenda</th>
        </tr>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from agenda_kegiatan");
        while($d = mysqli_fetch_array($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['hari_tanggal']; ?></td>
                <td><?php echo $d['waktu_agenda']; ?></td>
                <td><?php echo $d['kegiatan']; ?></td>
                <td><?php echo $d['keterangan_agenda']; ?></td>
        
                <td>
                    <a href="edit.php?id_agenda=<?php echo $d['id_agenda']; ?>">EDIT</a>
                    <a href="hapus.php?id_agenda=<?php echo $d['id_agenda']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php 
        }
        ?>
    </table>
        <br/>
            <a href="tambah.php">+ TAMBAH MAHASISWA</a>
        <br/>
</body>
</html>

