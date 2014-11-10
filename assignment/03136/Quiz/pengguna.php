
<form action="" method="post" enctype="multipart/form-data"> <!---untuk nambah foto-->
	<p>id_transaksi:
		<input type="text" name="id_transaksi"></p>
	<p>nama_pelanggan:
		<input type="text" name="nama_pelanggan"></p>
	<p>no_telpon:
		<input type="text" name="nama_pengguna"></p>
	<p>deskripsi:
		<input type="text" name="deskripsi"></p>
	<p>nomor_penitipan:
		<input type="text" name="nomor_penitipan"></p>
	<p>nomor_loker:
		<input type="text" name="nomor_loker"></p>
	<p>tarif:
		<input type="text" name="tarif"></p>
	
</form>
 
 <?php
 
	require('konek.php');//memanggil koneksi database atau require(jika filenya gak ada maka akan error)bisa juga dengan include
	
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