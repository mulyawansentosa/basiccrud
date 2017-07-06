<?php
	include "module/config/koneksi.php";
	$query		= "
					SELECT *
					FROM dosen
				";
	$result 	= mysqli_query($link,$query);
	?>
		<h3>Daftar Dosen</h3><a href="?page=dosen-create" class="btn btn-primary btn-lg navbar-right" style="margin-top: -45; margin-right: 5;" >Tambah Data</a>
		<hr />
		<table class="table table-bordered table-hover table-strip">
			<thead>
				<td align="center">No</td>
				<td align="center">Foto</td>
				<td align="center">NID</td>
				<td align="center">Nama</td>
				<td align="center">Inisial</td>
				<td align="center">Tempat Lahir</td>
				<td align="center">Tanggal Lahir</td>
				<td align="center">JK</td>
				<td align="center">Agama</td>
				<td align="center">Hobi</td>
				<td align="center">Mata Kuliah</td>
				<td align="center">No Hp</td>
				<td align="center">Alamat</td>
				<td align="center">Aksi</td>
			</thead>
			<tbody>
	<?php
	$no 	= 1;
	while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><img src="<?php echo $data['foto']; ?>" width="200px" height="300px" /></td>
			<td><?php echo $data['nid']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['inisial']; ?></td>
			<td><?php echo $data['lahir_tempat']; ?></td>
			<td><?php echo $data['lahir_tanggal']; ?></td>
			<td><?php echo $data['jk']; ?></td>
			<td><?php echo $data['agama']; ?></td>
			<td><?php echo $data['hobi']; ?></td>
			<td><?php echo $data['mata_kuliah']; ?></td>
			<td><?php echo $data['no_hp']; ?></td>
			<td><?php echo $data['alamat']; ?></td>
			<td  width="130px" align="center">
				<a class="btn btn-success btn-sm" href="?page=dosen-update&id=<?php echo $data['id']; ?>">Ubah</a>
				<a class="btn btn-danger btn-sm" href="?page=dosen-delete&id=<?php echo $data['id']; ?>">Hapus</a>
			</td>
		</tr>
		<?php
		$no++;
	}
	?>
		</tbody>
		</table>
	<?php
?>