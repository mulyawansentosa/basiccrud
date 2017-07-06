<?php
	include "module/config/koneksi.php";
	$query		= "
					SELECT mahasiswa.*,
					jurusan_nama
					FROM mahasiswa
					LEFT JOIN
					jurusan ON `mahasiswa_jurusan_id` = `jurusan_id`
				";
	$result 	= mysqli_query($link,$query);
	?>
		<h3>Daftar Mahasiswa</h3><a href="?page=mahasiswa-create" class="btn btn-primary btn-lg navbar-right" style="margin-top: -45; margin-right: 5;" >Tambah Data</a>
		<hr />
		<table class="table table-bordered table-hover table-strip">
			<thead>
				<td align="center">No</td>
				<td align="center">Foto</td>
				<td align="center">NIM</td>
				<td align="center">Nama</td>
				<td align="center">Tempat Lahir</td>
				<td align="center">Tanggal Lahir</td>
				<td align="center">JK</td>
				<td align="center">Agama</td>
				<td align="center">Hobi</td>
				<td align="center">Jurusan</td>
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
			<td><img src="<?php echo $data['mahasiswa_foto']; ?>" width="200px" height="300px" /></td>
			<td><?php echo $data['mahasiswa_nim']; ?></td>
			<td><?php echo $data['mahasiswa_nama']; ?></td>
			<td><?php echo $data['mahasiswa_lahir_tempat']; ?></td>
			<td><?php echo $data['mahasiswa_lahir_tanggal']; ?></td>
			<td><?php echo $data['mahasiswa_jk']; ?></td>
			<td><?php echo $data['mahasiswa_agama']; ?></td>
			<td><?php echo $data['mahasiswa_hobi']; ?></td>
			<td><?php echo $data['jurusan_nama']; ?></td>
			<td><?php echo $data['mahasiswa_alamat']; ?></td>
			<td  width="130px" align="center">
				<a class="btn btn-success btn-sm" href="?page=mahasiswa-update&id=<?php echo $data['mahasiswa_id']; ?>">Ubah</a>
				<a class="btn btn-danger btn-sm" href="?page=mahasiswa-delete&id=<?php echo $data['mahasiswa_id']; ?>">Hapus</a>
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