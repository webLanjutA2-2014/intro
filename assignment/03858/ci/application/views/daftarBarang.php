<p> jadi nanti semua yang ada hubungannnya dengan front end, berada di view, tidak ada aturan untuk memberinamanya</p>

<h2> daftar penitipan barang </h2>
<?php if ($barang) { ?>
<table>
	<th>No Transaksi</th>
	<th>Nama Pemilik</th>
	<th>Nomor HP</th>
	<th>Deskripsi</th>
	<?php
			//karena yang diakses $data['barang'] cuma namanya
	foreach($barang as $item) {
		echo "<tr>";
					echo "<td>". $item['id_transaksi']. "</td>";
					echo "<td>". $item['nama_pengguna']. "</td>";
					echo "<td>" . $item['no_hp'] . " </td>";
					echo "<td>" .$item['keterangan'] . "</td>";
		echo "</tr>";
	}

	?>
</table>
<?php 
	}else{
		echo "data kosong";
	}
?>