<?php
// memanggil library FPDF
require('../assets/fpdf184/fpdf.php');
include_once('../koneksi.php');

// Get the start and end dates from the query parameters
$start_date = isset($_GET['start_date']) ? $_GET['start_date'] : '';
$end_date = isset($_GET['end_date']) ? $_GET['end_date'] : '';

// Query to fetch the transaction data
$query = "SELECT * FROM tb_transaksi";
if ($start_date && $end_date) {
  $query .= " WHERE tanggal_pesan BETWEEN '$start_date' AND '$end_date'";
}
$data = mysqli_query($koneksi, $query);

// Create the PDF
$pdf = new FPDF('P', 'mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Times', 'B', 12);
$pdf->Cell(190, 10, 'LAPORAN TRANSAKSI', 0, 1, 'C');
$pdf->Cell(190, 10, 'PERIODE: ' . date('d-m-Y', strtotime($start_date)) . ' s/d ' . date('d-m-Y', strtotime($end_date)), 0, 1, 'C');
$pdf->Cell(10, 10, '', 0, 1);

// Set font for table header
$pdf->SetFont('Times', 'B', 9);
$widths = array(10, 20, 30, 30, 30, 15, 30);
$totalWidth = array_sum($widths);
$startX = (210 - $totalWidth) / 2;
$pdf->SetX($startX);

// Create table header
$pdf->Cell($widths[0], 7, 'NO', 1, 0, 'C');
$pdf->Cell($widths[1], 7, 'ID Transaksi', 1, 0, 'C');
$pdf->Cell($widths[2], 7, 'Tanggal', 1, 0, 'C');
$pdf->Cell($widths[3], 7, 'ID Cust', 1, 0, 'C');
$pdf->Cell($widths[4], 7, 'Layanan', 1, 0, 'C');
$pdf->Cell($widths[5], 7, 'Jumlah', 1, 0, 'C');
$pdf->Cell($widths[6], 7, 'Total Bayar', 1, 1, 'C');

// Set font for table content
$pdf->SetFont('Times', '', 10);
$no = 1;
while ($d = mysqli_fetch_array($data)) {
  $pdf->SetX($startX);
  $pdf->Cell($widths[0], 6, $no++, 1, 0, 'C');
  $pdf->Cell($widths[1], 6, $d['id_transaksi'], 1, 0);
  $pdf->Cell($widths[2], 6, $d['tanggal_pesan'], 1, 0);
  $pdf->Cell($widths[3], 6, $d['idCust'], 1, 0);
  $pdf->Cell($widths[4], 6, $d['layanan'], 1, 0);
  $pdf->Cell($widths[5], 6, $d['jumlah_item'], 1, 0);
  $pdf->Cell($widths[6], 6, $d['total_transaksi'], 1, 1);

  // totalPemasukan
  $totalPemasukan += $d['total_transaksi'];
}
$pdf->SetFont('Times', '', 10);
$pdf->SetX($startX);
$pdf->Cell(190, 20, 'TOTAL PEMASUKAN: Rp' . number_format($totalPemasukan, 0, ',', '.'), 0, 1, 'L');

ob_end_clean();
$pdf->Output();
