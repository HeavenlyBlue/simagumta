              <ul class="nav navbar-nav">
            
              <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Beranda</a></li>
              <?php
			  if (isset ($_SESSION['id_user'])){
			  ?>
			  <li><a href="?view=pengunjung"><i class="glyphicon glyphicon-list-alt"></i> Informasi Pengunjung</a></li>
              <!--<li><a href="?view=pesan"><i class="glyphicon glyphicon-list-alt"></i> Pemesanan</a></li>-->
              <li><a href="?view=bayar"><i class="glyphicon glyphicon-list-alt"></i> Reservasi</a></li>
              <li><a href="?view=profil"><i class="glyphicon glyphicon-list-alt"></i> Edit Profil</a></li>
			  
              <li><a href="logout.php"><i class="glyphicon glyphicon-list-alt"></i> Logout</a></li>
			  
			  <?php
			  }else{
			  ?>
			  
              <li><a href="?view=pengunjung"><i class="glyphicon glyphicon-list-alt"></i> Informasi Pengunjung</a></li>
              <li><a href="#" data-toggle="modal" data-target="#kode2"><i class="glyphicon glyphicon-list-alt"></i> Petunjuk Pemesanan</a></li>
			  
              <li><a href="#" data-toggle="modal" data-target="#kode"><i class="glyphicon glyphicon-list-alt"></i> Login</a></li>
			  <?php
			  }
			  ?>
			  
            </ul>