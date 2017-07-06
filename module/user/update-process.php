<?php
	if($_REQUEST['simpan']){
		include "module/config/koneksi.php";
		$id				= $_POST['id'];
		$username		= $_POST['username'];
		$nama			= $_POST['nama'];
		if($_POST['password']!==""){
			$password		= md5($_POST['password']);
			$query 			= "
								UPDATE
								user
								SET
									`user_username`='$username',
									`user_password`='$password',
									`user_nama`='$nama'
								WHERE 
								`user_id` = '$id'
							";
		}else{
			$query 			= "
								UPDATE
								user
								SET
									`user_username`='$username',
									`user_nama`='$nama'
								WHERE 
								`user_id` = '$id'
							";			
		}
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
					<meta http-equiv="refresh" content="2; url=?page=user-read" />
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
				<meta http-equiv="refresh" content="2; url=?page=user-update&id=<?php echo $id; ?>" />
			<?php
		}
		mysqli_close($link);
	}else{
		header("Location:?page=read");
	}
?>