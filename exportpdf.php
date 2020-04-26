<?php

include('koneksii.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$sql = "SELECT * FROM persertadidikbaru";
$query = mysqli_query($conn,$sql);
$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';
$html .= '<table border="1" width="100%">

 <tr>
 <th>Nama</th>
 <th>Jenis Kelamin</th>
 <th>Nisn</th>
 <th>Nik</th>
 <th>Tempat Lahir</th>
 <th>Tanggal Lahir</th>
 <th>No Akte</th>
 <th>Agama</th>
 <th>Kewarganegaraan</th>
 <th>Berkebutuhan Khusus</th>
 <th>Alamat Rumah</th>
 <th>RT</th>
 <th>RW</th>
 <th>Nama Dusun</th>
 <th>Kelurahan</th>
 <th>Kecamatan</th>
 <th>Kode Pos</th>
 <th>Lintang</th>
 <th>Bujur</th>
 <th>Tinggal</th>
 <th>Transportasi/th>
 <th>No KKS</th>
 <th>Anak Ke </th>
 <th>penerima Kps/kph</th>
 <th>No Kps</th>
 </tr>';

while($row = mysqli_fetch_array($query))
{
 $html .= "<tr>
 <td>".$row['nama']."</td>
 <td>".$row['jkel']."</td>
 <td>".$row['nisn']."</td>
 <td>".$row['nik']."</td>
 <td>".$row['tmplahir']."</td>
 <td>".$row['tglahir']."</td>
 <td>".$row['noreg']."</td>
 <td>".$row['agama']."</td>
 <td>".$row['kwn']."</td>
 <td>".$row['kebutuhan']."</td>
 <td>".$row['alamat']."</td>
 <td>".$row['rt']."</td>
 <td>".$row['rw']."</td>
 <td>".$row['dusun']."</td>
 <td>".$row['kelurahan']."</td>
 <td>".$row['kecamatan']."</td>
 <td>".$row['pos']."</td>
 <td>".$row['lintang']."</td>
 <td>".$row['bujur']."</td>
 <td>".$row['tinggal']."</td>
 <td>".$row['transportasi']."</td>
 <td>".$row['nokks']."</td>
 <td>".$row['anakke']."</td>
 <td>".$row['kps']."</td>
 <td>".$row['nokps']."</td>
 </tr>";
}

$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A1', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_data_siswa.pdf');
?>