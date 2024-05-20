<?php
// memanggil library FPDF
require('../assets/fpdf184/fpdf.php');
include_once ('../koneksi.php');
 
// intance object dan memberikan pengaturan halaman PDF
$pdf=new FPDF('P','mm','A4');
$pdf->AddPage();
 
$pdf->SetFont('Times','B',13);
$pdf->Cell(190,10,'DATA PEGAWAI',0,1,'C');
 
$pdf->Cell(10,10,'',0,1);
$pdf->SetFont('Times','B',9);
$pdf->Cell(10,7,'NO',1,0,'C');
$pdf->Cell(20,7,'ID' ,1,0,'C');
$pdf->Cell(50,7,'NAMA',1,0,'C');
$pdf->Cell(30,7,'POSISI',1,0,'C');
$pdf->Cell(30,7,'JENIS KELAMIN',1,0,'C');
$pdf->Cell(25,7,'NO. TELEPON',1,0,'C');
$pdf->Cell(25,7,'ALAMAT',1,0,'C');
 
$pdf->Cell(10,7,'',0,1);
$pdf->SetFont('Times','',10);
$no=1;
$data = mysqli_query($koneksi,"SELECT  * FROM tb_pegawai");
while($d = mysqli_fetch_array($data)){
  $pdf->Cell(10,6, $no++,1,0,'C');
  $pdf->Cell(20,6, $d['id_pegawai'],1,0);
  $pdf->Cell(50,6, $d['nama_pegawai'],1,0);  
  $pdf->Cell(30,6, $d['posisi_pegawai'],1,0);
  $pdf->Cell(30,6, $d['gender_pegawai'],1,0);
  $pdf->Cell(25,6, $d['noTlp_pegawai'],1,0);
  $pdf->Cell(25,6, $d['alamat_pegawai'],1,1);
  
}
ob_end_clean(); // Bersihkan output buffer sebelum output PDF
$pdf->Output();
?>