<!DOCTYPE html>
<html>
<head>
	<title>Menu</title>
</head>
<body>

<?php
session_start();
	if ((isset($_SESSION['login'])) && ($_SESSION ['login'] == 1)){
	echo "<h2>Selamat datang di penyewaan buku gufi"."</h2>";
	echo " MENU <br><br><a href = \"user.php\">Data User</a>";
	echo " <br>";
	echo " <a href = \"transaksi.php\">Transaksi</a>";
	echo "<BR> ";
	echo " <a href = \"pencarian.php\">Pencarian</a>";
	}else{
		header ('location:login.php');
	}
	echo "<br/> <a href = \"logout.php\">Logout</a>";
?>
</body>
</html>