<?php
	include "module/config/koneksi.php";
	$id 			= $_GET['id'];
	$query 				= "
					DELETE FROM
					user
					WHERE
					`user_id` = '$id'
					";
	$hapus 		= mysqli_query($link,$query);
	if($hapus){
		?>
			<script>
				swal({
				  title: 'Berhasil',
				  text: 'Data Berhasil Dihapus',
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
				  text: 'Data Gagal Dihapus',
				  type: 'error',
				  timer: 1500
				})
			</script>
			<meta http-equiv="refresh" content="2; url=?page=user-read" />
		<?php
	}
	mysqli_close($link);
?>