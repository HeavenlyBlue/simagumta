<h3>Form Reservasi Pengunjung</h3>
<div>
<form action="pengunjung_tambah.php" method="post" role="form">
<table class="table table-bordered table-striped table-hover">
	<tr>
		<td width="200">Nama Instansi</td>
		<td><input type="text" name="nama_instansi" id="nama_instansi" class="form-control"></td>
	</tr>
	<tr>
		<td width="200">Alamat</td>
		<td><input type="text" name="alamat" id="alamat" class="form-control"></td>
	</tr>
	<tr>
		<td width="200">Handphone</td>
		<td><input type="text" name="hp" id="hp" class="form-control"></td>
	</tr>
	<tr>
		<td width="200">Acara Kegiatan</td>
		<td><textarea name="acara_kegiatan" id="acara_kegiatan" class="form-control"></textarea></td>
	</tr>
	<tr>
		<td width="200">Hari Tanggal</td>
		<td><input type="date" name="hari_tanggal" id="hari_tanggal" class="form-control"></td>
	</tr>
	<tr>
		<td width="200">Tempat</td>
		<td><input type="text" name="tempat" id="tempat" class="form-control"></td>
	</tr>
	<tr>
		<td width="200">Waktu</td>
		<td><input type="time" name="waktu" id="waktu" class="form-control"></td>
	</tr>
	<tr>
		<td width="200">Jumlah Peserta</td>
		<td><input type="text" name="jumlah_peserta" id="jumlah_peserta" class="form-control"></td>
	</tr>
	<tr>
		<td width="200">Romo</td>
		<td><input type="text" name="romo" id="romo" class="form-control"></td>
	</tr>
</table>
<div class="form-group">
	<button type="submit" class="btn btn-primary" name="update">
		<span class="fa fa-edit"></span>Reservasi Sekarang</button>
</form>
</div>