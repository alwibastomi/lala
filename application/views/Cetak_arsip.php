<?php

include 'Config.php';
require('pdf/fpdf.php');
ob_start();

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFillColor(255, 255, 255);
$pdf->Rect(0, 0, 210, 297, 'F');
$pdf->SetFont('Times','B',30);

$pdf->SetX(5);            
// $pdf->MultiCell(20.5,1,'KARTU KENDALI',0,'C');
$pdf->SetFont('Times','B',25);
$pdf->SetX(5);
$pdf->MultiCell(20.5,2.8,'KARTU KENDALI',0,'C');
$pdf->SetFont('Times','B',25);
// $pdf->SetFont('Times','',11);
// $pdf->SetX(5);
// $pdf->MultiCell(20.5,1.2,'JL. Dr. Wahidin Ds. Gurah Kec. Gurah Kota Kediri - Web: http://koperasialba.id Surel : kpralba@yahoo.co.id',0,'C');
$pdf->Line(1, 4.2, 28.5, 4.2);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1, 4.4, 28.5, 4.4);   
$pdf->SetLineWidth(0);
// $pdf->ln(1);
// $pdf->SetFont('Arial','B',14);
// $pdf->Cell(25.3,0.1,"Laporan Data Tabel Anggota Koperasi",2,3,'C');
$pdf->ln(1);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D - d / m / Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B', 12);
$pdf->SetTextColor(112, 128, 144);

$pdf->Text(2, 7, 'Indeks :', 0);
$pdf->Text(10, 7, 'Kode :', 0);
$pdf->Text(20, 7, 'Tanggal :', 0);
$pdf->Text(20, 7.7, 'No. Urut :', 0);

$pdf->Line(1, 8, 28.5, 8); // GARIS

$pdf->Text(2, 8.8, 'Hal', 0);
$pdf->Text(5, 8.8, ':', 0);

$pdf->Line(1, 9.2, 28.5, 9.2); // GARIS

$pdf->Text(2, 10, 'Isi Ringkas', 0);
$pdf->Text(5, 10, ':', 0);

$pdf->Line(1, 10.8, 28.5, 10.8); // GARIS

$pdf->Text(2, 11.4, 'Lampiran', 0);
$pdf->Text(5, 11.4, ':', 0);
$pdf->Text(2, 12.2, 'Dari / Kepada', 0);
$pdf->Text(5, 12.2, ':', 0);

$pdf->Line(1, 14, 28.5, 14); // GARIS

$pdf->Text(2, 14.8, 'Tanggal Surat', 0);
$pdf->Text(5, 14.8, ':', 0);
$pdf->Text(20, 14.8, 'No. Surat :', 0);


$pdf->Line(1, 15.4, 28.5, 15.4); // GARIS

$pdf->Text(2, 16.2, 'Pengolah', 0);
$pdf->Text(5, 16.2, ':', 0);
$pdf->Text(20, 16.2, 'Paraf :', 0);

$pdf->Line(1, 16.6, 28.5, 16.6); // GARIS

$pdf->Text(2, 17.5, 'Catatan', 0);
$pdf->Text(5, 17.5, ':', 0);

$pdf->SetTextColor(0, 0, 0);
$pdf->SetFont('Arial', 'B', 23);
$pdf->Text(4, 7.2, $arsip->indeks, 0);
$pdf->Text(11.6, 7.2, $arsip->kode, 0);

$pdf->SetFont('Arial', 'B', 12);
$lele = date("d / m / Y");
$pdf->Text(22, 7, $lele, 0);
$pdf->Text(5.5, 8.8, $arsip->perihal, 0);
$pdf->Text(5.5, 10, $arsip->isiringkas, 0);
$pdf->Text(5.5, 11.4, $arsip->lampiran, 0);
$pdf->Text(5.5, 12.9, $arsip->alamatsurat, 0);
$pdf->Text(5.5, 13.5, $arsip->kota, 0);
$pdf->Text(5.5, 14.8, $arsip->tanggalsurat, 0);
$pdf->Text(22.3, 14.8, $arsip->nomorsurat, 0);
$pdf->Text(5.5, 16.2, $arsip->arsiparis, 0);
// $pdf->Text(22, 7, $arsip->paraf, 0);
$pdf->Text(5.5, 17.5, $arsip->catatan, 0);

$pdf->SetFont('Arial', 'B', 17);
$pdf->Text(5.5, 12.3, $arsip->darikepada, 0);


$pdf->Output("laporan_buku.pdf","I");
ob_end_flush(); 
?>

