<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A5');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'DAFTAR PEMESANAN BARANG',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'ALRIBAL SHOP',0,1,'C');

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(10,4,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,6,'ID PESANAN',1,0);
$pdf->Cell(20,6,'ID KOTA',1,0);
$pdf->Cell(20,6,'USER ID',1,0);
$pdf->Cell(50,6,'NAMA PENERIMA',1,0);
$pdf->Cell(27,6,'NOMOR HP',1,0);
$pdf->Cell(85,6,'ALAMAT',1,0);
$pdf->Cell(25,6,'TANGGAL PEMESANAN',1,1);

$pdf->SetFont('Arial','',10);

include 'koneksi.php';
$pesanan = mysqli_query($connect, "select * from pesanan");
while ($row = mysqli_fetch_array($pesanan)){
	$pdf->Cell(25,6,$row['pesanan_id'],1,0);
	$pdf->Cell(20,6,$row['kota_id'],1,0);
	$pdf->Cell(20,6,$row['user_id'],1,0);
	$pdf->Cell(50,6,$row['nama_penerima'],1,0);
	$pdf->Cell(27,6,$row['nomor_telepon'],1,0);
	$pdf->Cell(85,6,$row['alamat'],1,0);
	$pdf->Cell(25,6,$row['tanggal_pemesanan'],1,1);
	
   
}

$pdf->Output();
?>