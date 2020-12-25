<?php
include '../assets/Config.php';
require('../assets/pdf/fpdf.php');
ob_start();

$pdf = new FPDF("L","cm","A4");

$pdf->SetMargins(2,1,1);
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','B',30);
$pdf->Image('../logo/logo.jpg',2,0.5,4,4);
$pdf->SetX(5);            
$pdf->MultiCell(20.5,1,'KOPERASI',0,'C');
$pdf->SetFont('Times','B',25);
$pdf->SetX(5);
$pdf->MultiCell(20.5,1,'S I M P A N  P I N J A M',0,'C');
$pdf->SetFont('Times','B',25);
$pdf->SetX(5);
$pdf->MultiCell(20.5,1,'ENDFOREACH',0,'C');
$pdf->SetFont('Times','',11);
$pdf->SetX(5);
$pdf->MultiCell(20.5,1.2,'JL. Dr. Wahidin Ds. Gurah Kec. Gurah Kota Kediri - Web: http://koperasialba.id Surel : kpralba@yahoo.co.id',0,'C');
$pdf->Line(1,4.8,28.5,4.8);
$pdf->SetLineWidth(0.1);      
$pdf->Line(1,4.9,28.5,4.9);   
$pdf->SetLineWidth(0);
$pdf->ln(1);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(25.3,0.1,"Laporan Data Tabel Anggota Koperasi",2,3,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(5,0.7,"Di cetak pada : ".date("D - d / m / Y"),0,0,'C');
$pdf->ln(1);
$pdf->SetFont('Arial','B',10);
$pdf->Cell(2, 0.7, 'ID', 1, 0, 'C');
$pdf->Cell(4, 0.7, 'Nama', 1, 0, 'C');
$pdf->Cell(4, 0.7, 'Alamat', 1, 0, 'C');
$pdf->Cell(4, 0.7, 'Tanggal Lahir', 1, 0, 'C');
$pdf->Cell(3, 0.7, 'Jenis Kelamin', 1, 0, 'C');
$pdf->Cell(3, 0.7, 'Status', 1, 0, 'C');
$pdf->Cell(3, 0.7, 'No Telp', 1, 0, 'C');
$pdf->Cell(3, 0.7, 'Keterangan', 1, 1, 'C');

$pdf->SetFont('Arial','',10);
$no=1;
$lala =  mysqli_connect('localhost','root','','koperasi');
$query=mysqli_query($lala, "select * from anggota");
while($lihat=mysqli_fetch_array($query))
{
	$pdf->Cell(2, 0.7, $lihat['id_anggota'], 1, 0, 'C');
	$pdf->Cell(4, 0.7, $lihat['nama'],1, 0, 'C');
	$pdf->Cell(4, 0.7, $lihat['alamat'],1, 0, 'C');
	$pdf->Cell(4, 0.7, $lihat['tgl_lhr'], 1, 0,'C');
	$pdf->Cell(3, 0.7, $lihat['j_kel'], 1, 0,'C');
	$pdf->Cell(3, 0.7, $lihat['status'], 1, 0,'C');
	$pdf->Cell(3, 0.7, $lihat['no_tlp'],1, 0, 'C');
	$pdf->Cell(3, 0.7, $lihat['ket'],1, 1, 'C');

	$no++;
}

$pdf->Output("laporan_buku.pdf","I");
ob_end_flush(); 
?>

