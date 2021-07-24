       <center><div class='alert alert-success'>Kalender</div></center>
  <?php 
  include "fungsi_kalender.php";
  $tgl_skrg=date("d");
  $bln_skrg=date("n");
  $thn_skrg=date("Y");
  echo buatkalender($tgl_skrg,$bln_skrg,$thn_skrg); 
  ?>

          <div class="list-group">
            <a href="#" class="list-group-item active">Reservasi Pengunjung</a>
			<?php
			if(isset($_SESSION['id_user'])){
			?>
			<marquee>
				Selamat Datang <?= $_SESSION['nama_lengkap'];?> Silahkan Lakukan Reservasi
			</marquee>
			<?php
			}else{
			?>
			<marquee> Anda harus login dahulu untuk melakukan Reservasi
			</marquee>
			<?php
			}
			?>
          </div>
