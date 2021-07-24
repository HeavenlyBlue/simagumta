<?php
error_reporting(0);
include("config/koneksi.php");
if ($_POST) {
	//ambil data dari form
$nama 		= ($_POST['nama_lengkap']);
$email 		= ($_POST['email']);
$password 	= md5($_POST['password']);
$hp 		= ($_POST['hp']);
$jk 		= ($_POST['jenis_kelamin']);
$alamat 	= ($_POST['alamat']);
if(empty($_POST[nama_lengkap]) 
or empty($_POST[password]) 
or empty($_POST[email]) 
or empty($_POST[jenis_kelamin]) 
or empty($_POST[hp]) 
or empty($_POST[alamat])
){
 echo"<script>alert('Silahkan Lengkapi Data Anda Terlebih Dahulu !');window.location.href='./'</script>";
}else{
	$q = mysqli_query($koneksi,"INSERT INTO user (nama_lengkap,email,password,hp,jenis_kelamin,alamat) VALUES('$nama','$email','$password','$hp','$jk','$alamat')");	
	if($q){
		echo("<script>
			alert('Registrasi Berhasil');
			window.location='index.php';		
		</script>");
	}else{
		echo("<script>
			alert('Registrasi Gagal ".mysql_error()."');
			window.location='pendaftaran.php';
		</script>");
	}
}
}
?>