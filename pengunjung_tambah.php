<?php
session_start();
include_once "config/koneksi.php";
if($_POST) {
//ambil data dari form
	$nama_instansi=$_POST['nama_instansi'];
	$alamat=$_POST['alamat'];
	$hp=$_POST['hp'];
	$acara_kegiatan=$_POST['acara_kegiatan'];
	$hari_tanggal=$_POST['hari_tanggal'];
	$tempat=$_POST['tempat'];
	$waktu=$_POST['waktu'];
	$jumlah_peserta=$_POST['jumlah_peserta'];
	$romo=$_POST['romo'];
//buat sql
	$sql = "insert into pengunjung value ('','$nama_instansi', '$alamat', '$hp', '$acara_kegiatan', '$hari_tanggal', '$tempat', '$waktu', '$jumlah_peserta', '$romo')";
	
	$query=mysqli_query($koneksi,$sql) or die (mysqli_error);
	if($query) {
		echo
		"<script>alert('Reservasi Berhasil'); window.location='index.php';
		</script>";
	}else{
		echo "<script>alert('Gagal ".mysql_error()."'); window.location='index.php';</script>";
	}
}
?>