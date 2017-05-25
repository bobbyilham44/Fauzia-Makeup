<html>
<head> <title> Data Barang </title> </head>
<body>
	<table border="1" style="border-collapse:collapse; width:50%;">
		<tr style="background:pink">
			<th>Kode Barang</th>
			<th>Nama Barang</th>
			<th>Jumlah</th>
			<th>Harga</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
		<?php foreach($data as $d){
		?>
		<tr>
			<td><?php echo $d['id']; ?></td>
			<td><?php echo $d['nama_menu']; ?></td>
			<td><?php echo $d['harga_menu']; ?></td>
			<td><?php echo $d['deskripsi_menu']; ?></td>
			<td style="text-align:center" style="width:50%;" <img src=<?php echo base_url($d['gambar']);?> style="height:100px;"></td>
			<td align="center">
				<a href ="<?php echo base_url()."index.php/Welcome/edit_data/".$d['id']; ?>">Edit</a>
				||
				<a href ="<?php echo base_url()."index.php/Welcome/do_delete/".$d['id']; ?>">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</table>
	<a href="http://localhost/upload/index.php/Welcome/tambahdata">Tambah Data</a>
</body>
</html>