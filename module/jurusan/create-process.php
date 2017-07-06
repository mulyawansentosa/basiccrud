<?php
	if($_REQUEST['simpan']){
		include "module/config/koneksi.php";
		$kode		= $_POST['kode'];
		$nama		= $_POST['nama'];
		$keterangan	= $_POST['keterangan'];
		$query 			= "
							INSERT INTO
							jurusan(
								`jurusan_id`,
								`jurusan_kode`,
								`jurusan_nama`,
								`jurusan_keterangan`
							)
							VALUES(
								'',
								'$kode',
								'$nama',
								'$keterangan'
							)
						";
		$insert 		= mysqli_query($link,$query);
		if($insert){
			?>
				<script>
					swal({
					  title: 'Berhasil',
						  text: 'Data Berhasil Disimpan',
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
					  text: 'Data Gagal Disimpan',
					  type: 'error',
					  timer: 1500
					})
				</script>
				<meta http-equiv="refresh" content="2; url=?page=jurusan-update&id=<?php echo $id; ?>" />
			<?php
		}
		mysqli_close($link);
	}else{
		header("Location:?page=./");
	}
?>