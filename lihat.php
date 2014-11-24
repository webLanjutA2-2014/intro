<?php 
include "koneksi.php";
session_start();
if(isset($_SESSION['login']) && ($_SESSION['login'] == 1)){

	echo "<h2> Selama datang ".$_SESSION['username']. "</h2>";
	?>
	<ul>
	<a href="tambah_penitipan.php"> Tambah Pengguna </a> <br>
	<a href="index.php"> Lihat Daftar Pengguna </a> <br>
	</ul>

<?php
}else{
	header('location: login_admin.php');
}
?>
<a href ="logout.php"> Logout </a>