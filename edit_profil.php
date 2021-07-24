<?php
session_start();
include_once "config/koneksi.php";
if($_POST){
//ambil data dari form
	$nama_lengkap	=$_POST['nama_lengkap'];
	$jenis_kelamin	=$_POST['jenis_kelamin'];
	$email			=$_POST['email'];
	$password		=md5($_POST['password']);
	$hp				=$_POST['hp'];
	$alamat			=$_POST['alamat'];
//buat sql
	$sql = "UPDATE user SET nama_lengkap='$nama_lengkap', jenis_kelamin='$jenis_kelamin', email='$email', password='$password', hp='$hp', alamat='$alamat' where id_user='$_SESSION[id_user]'";
	
	$query=mysqli_query($koneksi,$sql) or die (mysqli_error);
	if ($query) {
		echo
		"<script>alert('Data User Berhasil diubah'); window.location='index.php';
		</script>";
	}else{
		echo "<script>alert('Gagal ".mysql_error()."'); window.location='index.php';</script>";
	}
}
?>