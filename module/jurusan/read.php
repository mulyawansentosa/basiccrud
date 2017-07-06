<?php
	include "module/config/koneksi.php";
	$query		= "
					SELECT *
					FROM jurusan
				";
	$result 	= mysqli_query($link,$query);
	?>
		<h3>Daftar Jurusan</h3><a href="?page=jurusan-create" class="btn btn-primary btn-lg navbar-right" style="margin-top: -45; margin-right: 5;" >Tambah Data</a>
		<hr />
		<table class="table table-bordered table-hover table-strip">
			<thead>
				<td align="center">No</td>
				<td align="center">Kode Jurusan</td>
				<td align="center">Nama Jurusan</td>
				<td align="center">Keterangan</td>
				<td align="center">Aksi</td>
			</thead>
			<tbody>
	<?php
	$no 	= 1;
	while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['jurusan_kode']; ?></td>
			<td><?php echo $data['jurusan_nama']; ?></td>
			<td><?php echo $data['jurusan_keterangan']; ?></td>
			<td  width="130px" align="center">
				<a class="btn btn-success btn-sm" href="?page=jurusan-update&id=<?php echo $data['jurusan_id']; ?>">Ubah</a>
				<a class="btn btn-danger btn-sm" href="?page=jurusan-delete&id=<?php echo $data['jurusan_id']; ?>">Hapus</a>
			</td>
		</tr>
		<?php
		$no++;
	}
	?>
		<tbody>
		</table>
	<?php
?>