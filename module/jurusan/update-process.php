<?php
	if($_REQUEST['simpan']){
		include "module/config/koneksi.php";
		$id			= $_POST['id'];
		$kode		= $_POST['kode'];
		$nama		= $_POST['nama'];
		$keterangan	= $_POST['keterangan'];
		$query 			= "
							UPDATE
							jurusan
							SET
								`jurusan_kode`='$kode',
								`jurusan_nama`='$nama',
								`jurusan_keterangan`='$keterangan'
							WHERE 
							`jurusan_id` = '$id'
						";
		$insert 		= mysqli_query($link,$query);
		if($insert){
			?>
				<script>
					swal({
					  title: 'Berhasil',
						  text: 'Data Berhasil Diubah',
						  type: 'success',
						  timer: 1500
						})
					</script>
					<meta http-equiv="refresh" content="2; url=?page=jurusan-read" />
			<?php
		}else{
			?>
				<script>
					swal({
					  title: 'Gagal',
					  text: 'Data Gagal Diubah',
					  type: 'error',
					  timer: 1500
					})
				</script>
				<meta http-equiv="refresh" content="2; url=?page=jurusan-update&id=<?php echo $id; ?>" />
			<?php
		}
		mysqli_close($link);
	}else{
		header("Location:?page=read");
	}
?>