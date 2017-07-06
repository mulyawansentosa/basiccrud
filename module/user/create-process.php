<?php
	if($_REQUEST['simpan']){
		include "module/config/koneksi.php";
		$username		= $_POST['username'];
		$password		= md5($_POST['password']);
		$nama			= $_POST['nama'];
		$query 			= "
							INSERT INTO
							user(
								`user_id`,
								`user_username`,
								`user_password`,
								`user_nama`
							)
							VALUES(
								'',
								'$username',
								'$password',
								'$nama'
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
					<meta http-equiv="refresh" content="2; url=?page=user-read" />
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
				<meta http-equiv="refresh" content="2; url=?page=user-update&id=<?php echo $id; ?>" />
			<?php
		}
		mysqli_close($link);
	}else{
		header("Location:?page=./");
	}
?>