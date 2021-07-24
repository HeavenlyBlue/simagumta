<?php
include_once("config/koneksi.php");

	$nama 		= ($_POST['email']);
	$pass 		= md5($_POST['password']);

	$q = mysqli_query($koneksi,"SELECT * FROM user WHERE email='$nama' AND password='$pass'");
	$d = mysqli_fetch_array($q);

	if(mysqli_num_rows($q) > 0){
		session_start();
		$_SESSION['id_user']		=$d['id_user'];
		$_SESSION['nama_lengkap']	=$d['nama_lengkap'];
		$_SESSION['email']			=$d['email'];
		$_SESSION['password']		=$d['password'];
		
	
		//pindah ke halaman index
		 echo "<script>alert('Selamat Datang, $d[nama_lengkap]');window.location.href='index.php'</script>";
		exit;
		
	}else{
		echo("<script>
			alert('Login Gagal');
			window.location='index.php';		
		</script>");
		exit;
	}	
?>