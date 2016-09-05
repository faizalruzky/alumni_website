<?php
session_start();
	include "../../res/koneksi.php";
	
	$Judul = "Profil Alumni";
	$tgl= "Bekasi".date(", d F Y");
	require ("fpdf16/fpdf.php");
	$pdf = new FPDF();
	$pdf->SetMargins(30,20,30);
	$pdf->AddPage('P','A4','C');
	$pdf->SetFont('arial','B','15');
	$pdf->Ln();
	$pdf->Ln();
	$pdf->Cell(0, 15, $Judul, '0', 1, 'C');
	$pdf->SetFont('arial','','12');

	 $username=$_SESSION['username'];
	$Lapor = "SELECT A.id_siswa As id_siswa, A.nis AS nis,A.nama AS nama ,B.nama_jurusan AS jur,C.nama_thun AS thn ,A.alamat AS alamat,A.no_hp AS hp,A.kegiatan AS kegiatan,A.nama_perusahaan AS nama_perusahaan,A.nama_perguruan_tinggi AS nama_perguruan_tinggi,
            A.email AS email,A.foto_siswa AS foto,A.kritik_saran AS saran
            FROM data_siswa A,kategori_jurusan B,ketegori_tahun C 
            WHERE A.id_jur=B.id_jur and A.id_thun_lulus=C.id_thun and username='".$username."'";
	$Hasil = mysql_query($Lapor);

	while($r = mysql_fetch_array($Hasil)){
			
$pdf->Cell(50,15,"NIS                                   : $r[nis]");
	$pdf->Ln();
$pdf->Cell(50,15,"Nama Siswa                     : $r[nama]");
$pdf->Ln();
$pdf->Cell(50,15,"Alamat                              : $r[alamat]");
$pdf->Ln();
$pdf->Cell(50,15,"Jurusan                            : $r[jur]");
$pdf->Ln();
$pdf->Cell(50,15,"Tahun Lulus                     : $r[thn]");
$pdf->Ln();
$pdf->Cell(50,15,"Aktivitas                            : $r[kegiatan]");
$pdf->Ln();
$pdf->Cell(50,15,"Nama Perusahaan           : $r[nama_perusahaan]");
$pdf->Ln();
$pdf->Cell(50,15,"Nama Perguruan Tinggi   : $r[nama_perguruan_tinggi]");
$pdf->Ln();
$pdf->Cell(50,15,"No Hp                               : $r[hp]");
$pdf->Ln();
$pdf->Cell(50,15,"Email                                : $r[email]");
$pdf->Ln();
$pdf->Cell(50,15,"Pesan                               : $r[saran]");
$pdf->Ln();
$pdf->Cell(0, 10, $tgl, '0', 1, 'R');
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(0, 10,$r['nama'] , '0', 1, 'R');
	}
	//output
	$pdf->Output();
?>

