<h2>Informasi Pengunjung</h2>
<table border='1' class='table table-bordered table-striped'>
<tr>
	<th>No</th>
	<th>Nama / Instansi</th>
	<th>Alamat</th>
	<th>Handphone</th>
	<th>Acara Kegiatan</th>
	<th>Hari dan Tanggal</th>
	<th>Tempat</th>
	<th>Waktu</th>
	<th>Jumlah Peserta</th>
	<th>Romo</th>
</tr>
	<?php 
	$q=mysqli_query($koneksi,"select * from pengunjung order by id");
	$no=0; 
 while($d=mysqli_fetch_array($q)){
	$no++;
	echo"
	<tr>
		<td>$no</td>
		<td>$d[nama_instansi]</td>
		<td>$d[alamat]</td>
		<td>$d[hp]</td>
		<td>$d[acara_kegiatan]</td>
		<td>$d[hari_tanggal]</td>
		<td>$d[tempat]</td>
		<td>$d[waktu]</td>
		<td>$d[jumlah_peserta]</td>
		<td>$d[romo]</td>
	";
	echo"</tr>";
 }
 ?>
</table>