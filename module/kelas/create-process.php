<?php
	if($_REQUEST['simpan']){
		include "module/config/koneksi.php";
		$kode		= $_POST['kode'];
		$kelas_nama	= $_POST['kelas_nama'];
		$keterangan	= $_POST['keterangan'];
		$query 			= "
							INSERT INTO
							kelas(
								`kelas_id`,
								`kelas_kode`,
								`kelas_nama`,
								`kelas_keterangan`
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
					<meta http-equiv="refresh" content="2; url=?page=kelas-read" />
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
				<meta http-equiv="refresh" content="2; url=?page=kelas-update&id=<?php echo $id; ?>" />
			<?php
		}
		mysqli_close($link);
	}else{
		header("Location:?page=./");
	}
?>