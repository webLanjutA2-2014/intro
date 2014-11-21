
<form action="" method="post">
	<p>Nama :
		<input type="text" name="nama_barang"></p>
	<p>id_transaksi:
		<input type="text" name="id_transaksi"></p>
	<p> tarif:
		<input type="text" name="tarif"></p>
	<p><input type="submit" value="tambah Barang" name="tambah"></p>
</form>
 
 <?php
 
	require('koneksi.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
	if($_SERVER['REQUEST_METHOD']=='POST'){
	$nama_barang = $_POST['barang'];
	$id_pengguna = $_POST['id_pengguna'];
	$nomor_pengguna  = $_POST['nomor_pengguna'];
	$nama_pengguna = $_POST['nama_pengguna'];

	
	
	}
	
	$sql="insert into pengguna(barang, id_pengguna, nomor_pengguna,nama_pengguna)values
	('$barang', '$id_pengguna', '$nomor_pengguna', '$nama_pengguna')";
	
	mysqli_query($con, $sql) or die('gagal'.mysqli_error($con));
	
	header('location:utama.php');
	}
	
 ?>