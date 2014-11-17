<html>
<head>
<title>Hasil Cari</title>
</head>
<body>
<h2>Hasil Pencarian</h2>
<?php
require('koneksi.php');
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$i=1;
	$query= mysqli_query($con, "SELECT * From transaksi join user using(id_user) where id_user= ".$_POST['id_user']);
	while ($data =mysqli_fetch_assoc($query)){

		echo "<table border='2'><tr>";
		echo "<th>No</th>";
		echo "<th>Judul Buku</th>";
		echo "<th>Tanggal Pinjam</th>";
		echo "<th>Id Transaksi</th>";
		echo "<th>Nama Peminjam</th>";
		echo "<th>Nomor Telepon</th>";
		echo "<th>Batas Kembali</th>";
		echo "<th>Tanggal Kembali</th>";
		echo "<th>Denda</th>";
	    echo "</tr>";
		
		echo "<td>".$i."</td>";
		echo "<td>".$data['judul_buku']."</td>";
		echo "<td>".$data['tanggal_pinjam']."</td>";
		echo "<td>".$data['id_transaksi']."</td>";
		echo "<td>".$data['username']."</td>";
		echo "<td>".$data['no_telepon']."</td>";
		echo "<td>".$data['batas_kembali']."</td>";
		echo "<td>".$data['tanggal_kembali']."</td>";
		echo "<td>".$data['denda']."</td>";
		$i++;

}
echo "<br/> <a href = \"logoutpeminjam.php\">Logout</a>";
}
?>
</body>
</html>