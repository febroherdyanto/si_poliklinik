<?php session_start();
$user = "";
	if(isset($_SESSION['klinik'])){
		$nip = $_SESSION['klinik']['NIP'];
		$username = $_SESSION['klinik']['username'];
		$level = $_SESSION['klinik']['level_user'];
	}

if ($level == 'admin'){
	 //Ketika Level yang Login adalah ADMIN
?>

	<ul class="nav navbar-nav">
		<li>
			<a href="index.php?halaman=Pegawai"><font color="white">
			<i class="fa fa-user-md"></i> Pegawai</font></a>
		</li>

		<li>
			<a href="index.php?halaman=Pasien"><font color="white">
			<i class="fa fa-wheelchair"></i> Pasien</font></a>
		</li>
		

		<li class="dropdown">
		 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white">
	 		<i class="fa fa-user fa-fw"></i> Profile <strong class="caret"></strong></font></a>
			<ul class="dropdown-menu">
			<li>
			<a href="index.php?halaman=Edit-Pegawai&nip=<?php echo $nip; ?>"><i class="fa fa-edit fa-fw"></i> Edit Profil</a>
			<a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
			</li>
			</ul>
		</li>


		<li class="dropdown">
		 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white">
	 		<i class="fa fa-users fa-fw"></i> Poliklinik <strong class="caret"></strong></font></a>
			<ul class="dropdown-menu">
			<li>
			<a href="index.php?halaman=Poliklinik"><i class="fa fa-ambulance fa-fw"></i> Daftar Poliklinik</a>
			<a href="index.php?halaman=Dokter"><i class="fa fa-stethoscope fa-fw"></i> Daftar Dokter</a>
			<a href="index.php?halaman=Jadwal-Praktek"><i class="fa fa-stethoscope fa-fw"></i> Jadwal Praktek</a>
			</li>
			</ul>
		</li>


		<li class="dropdown">
		 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white">
	 		<i class="fa fa-users fa-fw"></i> Pendaftaran <strong class="caret"></strong></font></a>
			<ul class="dropdown-menu">
			<li>
			<a href="index.php?halaman=Pendaftaran"><i class="fa fa-ambulance fa-fw"></i> Pendaftaran</a>
			<a href="index.php?halaman=Pemeriksaan"><i class="fa fa-stethoscope fa-fw"></i> Pemeriksaan</a>
			<a href="index.php?halaman=Jenis-Biaya"><i class="fa fa-book fa-fw"></i> Jenis Biaya</a>
			</li>
			</ul>
		</li>


		<li class="dropdown">
		 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><font color="white">
	 		<i class="fa fa-medkit fa-fw"></i> Obat & Resep <strong class="caret"></strong></font></a>
			<ul class="dropdown-menu">
		<li>
		<a href="index.php?halaman=Obat"><i class="fa fa-medkit fa-fw"></i> Obat</a>
		<a href="index.php?halaman=Resep"><i class="fa fa-medkit fa-fw"></i> Resep</a>
		</li>
			</ul>
		</li>
	</ul>







<?php
}else{
 //Ketika Level yang Login adalah KETUA
	?>
					<ul class="nav navbar-nav">
						<li>
							<a href="index.php?hal=Data-Siswa_Ketua"><i class="fa fa-book fa-fw"></i> Daftar Siswa</a>
						</li>
						<li><a href="logout.php">LOGOUT</a></li>
						<li>
							<a href="index.php?hal=Data-Anggota-PMR_Ketua"><i class="fa fa-book fa-fw"></i> Daftar Anggota PMR</a>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book"> </span> Obat <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="index.php?hal=Data-Obat"><i class="fa fa-book fa-fw"></i> Daftar Obat yang Tersedia</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="index.php?hal=Aksi-Obat&aksi=Tambah-Obat"><i class="fa fa-plus fa-fw"></i> Tambah Data Obat</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus-circle fa-fw"></i> <b>Pasien</b> <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="index.php?hal=Data-Pasien"><i class="fa fa-book fa-fw"></i> Daftar Pasien</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="index.php?hal=Aksi-Pasien&aksi=Tambah-Pasien"><i class="fa fa-plus fa-fw"></i> Tambah Pasien</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-book"> </span> <b>Berita</b> <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="index.php?hal=Data-Berita"><i class="fa fa-book fa-fw"></i> Daftar Berita</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="index.php?hal=Aksi-Berita&aksi=Tambah-Berita"><i class="fa fa-plus fa-fw"></i> Tambah Berita</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="index.php?hal=Data-Komentar"><i class="fa fa-comments fa-fw"></i> Daftar Komentar</a>
								</li>
							</ul>
						</li>
						<li class="dropdown">
							 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-picture"> </span> <b>Album Foto</b> <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="index.php?hal=Data-Album-Foto"><i class="fa fa-camera fa-fw"></i> Daftar Album</a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="index.php?hal=Aksi-Album-Foto&aksi=Tambah-Album"><i class="fa fa-plus fa-fw"></i> Tambah Album</a>
								</li>
							</ul>
						</li>

					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user fa-fw"></i> <?php echo $nama; ?> <strong class="caret"></strong></a>
							<ul class="dropdown-menu">
								<li>
									<a href="index.php?hal=Aksi-Anggota-PMR&aksi=Edit-Anggota&idanggota=2"><i class="fa fa-user fa-fw"></i> <b>Edit Profil</b></a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="../index.php" target="_blank"><i class="fa fa-desktop fa-fw"></i> <b> Lihat Website</b></a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="" onClick="window.open('bantuan.php','Info / Help','height=600,width=600')"><b><i class="fa fa-info fa-fw"></i> Bantuan</b></a>
								</li>
								<li class="divider"></li>
								<li>
									<a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> <b>Logout</b></a>
								</li>
							</ul>
						</li>
					</ul>





<?php
} ?>