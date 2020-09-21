<?php
include '../models/config.php';
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($link,"select * from pendaftar");
// menghitung data
$jumlah = mysqli_num_rows($query);
$html = '<center><h2>Daftar Pendaftar</h2></center><hr/><br/>';
$html .= '<table border="1" width="100%">
 <tr>
 <th>No</th>
 <th>Nama</th>
 <th>Instansi</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>Jenis Kelamin</th>
 <th>NIK</th>
 <th>Email</th>
 <th>NO Handphone</th>
 <th>Pendidikan</th>
 <th>Sertifikat</th>
 <th>Info Tambahan</th>
 <th>Tanggal Daftar</th>
 </tr>'
 ;

 $html .= '<br/><h3>jumlah pendaftar: </h3>'.$jumlah;

$no = 1;
while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$no."</td>
 <td>".$row['nama']."</td>
 <td>".$row['instansi']."</td>
 <td>".$row['tempat_lahir']."</td>
 <td>".$row['tanggal_lahir']."</td>
 <td>".$row['gender']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['email']."</td>
 <td>".$row['no_hp']."</td>
 <td>".$row['pendidikan']."</td>
 <td>".$row['sertifikat']."</td>
 <td>".$row['info_tambahan']."</td>
 <td>".$row['tgl_daftar']."</td>
 </tr>";
 $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream("laporan_pendaftaran.pdf");
?>
