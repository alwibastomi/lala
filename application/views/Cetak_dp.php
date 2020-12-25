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
$pdf->MultiCell(20.5,1,'SURAT DISPOSISI',0,'C');
// $pdf->SetFont('Times','B',25);
// $pdf->SetX(5);
// $pdf->MultiCell(20.5,1,'SPAS',0,'C');
// $pdf->SetFont('Times','B',25);
// $pdf->SetX(5);
// $pdf->MultiCell(20.5,1,'(Sistem Pengolah Arsip Surat)',0,'C');
// $pdf->SetFont('Times','',11);
// $pdf->SetX(5);
// $pdf->MultiCell(20.5,1.2,'JL. Dr. Wahidin Ds. Gurah Kec. Gurah Kota Kediri - Web: http://koperasialba.id Surel : kpralba@yahoo.co.id',0,'C');
$pdf->Line(1, 2.8, 28.5, 2.8);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1, 3, 28.5, 3);   
$pdf->SetLineWidth(0);
// $pdf->ln(1);
// $pdf->SetFont('Arial','B',14);
// $pdf->Cell(25.3,0.1,"Laporan Data Tabel Anggota Koperasi",2,3,'C');
$pdf->ln(1.5);
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D - d / m / Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B', 12);
$pdf->SetTextColor(112, 128, 144);

$pdf->Text(2, 6.4, 'Indeks :', 0);
$pdf->Text(20, 6.4, 'Klasifikasi :', 0);

$pdf->Line(1, 7, 28.5, 7); // GARIS

$pdf->Text(2, 7.8, 'Kode', 0);
$pdf->Text(5, 7.8, ':', 0);
$pdf->Text(20, 7.8, 'Tanggal Penyelesaian :', 0);

$pdf->Line(1, 8.2, 28.5, 8.2); // GARIS

$pdf->Text(2, 9, 'Nomor Surat', 0);
$pdf->Text(5, 9, ':', 0);
$pdf->Text(2, 9.8, 'Asal', 0);
$pdf->Text(5, 9.8, ':', 0);

$pdf->Line(1, 10.2, 28.5, 10.2); // GARIS

$pdf->Text(2, 11, 'Perihal', 0);
$pdf->Text(5, 11, ':', 0);

$pdf->Line(1, 11.4, 28.5, 11.4); // GARIS

$pdf->Text(2, 12.2, 'Tanggal Diterima Pengolah :', 0);


$pdf->Line(1, 12.8, 28.5, 12.8); // GARIS

$pdf->Text(2, 13.6, 'Intruksi / Informasi :', 0);
$pdf->Text(20, 13.6, 'Diteruskan Kepada :', 0);

$pdf->Line(1, 15.6, 28.5, 15.6); // GARIS

$pdf->Text(2, 16.2, 'Sesudah digunakan harap segera kembali', 0);
$pdf->Text(2, 17, 'Kepada', 0);
$pdf->Text(5, 17, ':', 0);

$pdf->Text(2, 17.8, 'Unit', 0);
$pdf->Text(5, 17.8, ':', 0);

$pdf->Line(1, 18.2, 28.5, 18.2); // GARIS

$pdf->Text(2, 19, 'Tanggal Kembali :', 0);

$pdf->Output("laporan_buku.pdf","I");
ob_end_flush(); 
?>

