<?php
	include "module/config/koneksi.php";
	$query		= "
					SELECT *
					FROM user
				";
	$result 	= mysqli_query($link,$query);
	?>
		<h3>Daftar User</h3><a href="?page=user-create" class="btn btn-primary btn-lg navbar-right" style="margin-top: -45; margin-right: 5;" >Tambah Data</a>
		<hr />
		<table class="table table-bordered table-hover table-strip">
			<thead>
				<td align="center">No</td>
				<td align="center">Username</td>
				<td align="center">Nama Pengguna</td>
				<td align="center">Aksi</td>
			</thead>
			<tbody>
	<?php
	$no 	= 1;
	while($data = mysqli_fetch_array($result)){
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $data['user_username']; ?></td>
			<td><?php echo $data['user_nama']; ?></td>
			<td  width="130px" align="center">
				<a class="btn btn-success btn-sm" href="?page=user-update&id=<?php echo $data['user_id']; ?>">Ubah</a>
				<a class="btn btn-danger btn-sm" href="?page=user-delete&id=<?php echo $data['user_id']; ?>">Hapus</a>
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