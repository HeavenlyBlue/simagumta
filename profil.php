<?php
$sql="select * from user where id_user='$_SESSION[id_user]'";
$query=mysqli_query($koneksi,$sql) or die (mysqli_error);
$data=mysqli_fetch_array($query);	
?>

	<div class="alert alert-<?php echo "danger"; ?>">
        <strong>Edit Profil  </strong> 
    </div>
<h3>Info User</h3>
<div>
<form action="edit_profil.php" method="post" role="form">
<table class="table table-bordered table-striped table-hover">
	<tr>
		<td width="200">Nama Lengkap</td>
		<td><input type="text" name="nama_lengkap" value="<?= $data['nama_lengkap'] ?>" id="nama_lengkap" class="input-xxlarge"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td><input name="jenis_kelamin" type="text" id="jenis_kelamin" class="input-xxlarge" value='<?= $data['jenis_kelamin'] ?>'></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" name="email" value="<?= $data['email'] ?>" id="email" class="input-xxlarge"></td>
	</tr>
	<tr>
		<td>Password</td>
		<td><input type="password" name="password" id="email" class="input-xxlarge"></td>
	</tr>
	<tr>
		<td>No Handphone</td>
		<td><input type="text" name="hp" value="<?= $data['hp'] ?>" id="hp" class="input-xxlarge"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="<?= $data['alamat'] ?>" id="email" class="input-xxlarge"></td>
	</tr>
</table>
<div class="form-group">
	<button type="submit" class="btn btn-primary" name="update">
		<span class="fa fa-edit"></span>Update User</button>
</form>
</div>