<?php
	if($_REQUEST['simpan']){
		include "module/config/koneksi.php";
		$id			= $_POST['id'];
		$kode		= $_POST['kode'];
		$nama_kelas	= $_POST['kelas_nama'];
		$keterangan	= $_POST['keterangan'];
		$query 			= "
							UPDATE
							kelas
							SET
								`kelas_kode`='$kode',
								`kelas_nama`='$nama_kelas',
								`kelas_keterangan`='$keterangan'
							WHERE 
							`kelas_id` = '$id'
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
					<meta http-equiv="refresh" content="2; url=?page=kelas-read" />
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
				<meta http-equiv="refresh" content="2; url=?page=kelas-update&id=<?php echo $id; ?>" />
			<?php
		}
		mysqli_close($link);
	}else{
		header("Location:?page=read");
	}
?>