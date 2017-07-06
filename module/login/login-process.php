<?php
	if(isset($_REQUEST['login'])){
		include "module/config/koneksi.php";
		$username 	= $_POST['username'];
		$password 	= md5($_POST['username']);

		$query		= "
						SELECT *
						FROM user
						WHERE
						user_username = '$username'
						AND
						user_password = '$password'
					";
		$result 	= mysqli_query($link,$query);
		$data 		= mysqli_fetch_array($result);
		$row 		= mysqli_num_rows($result);

		if($row > 0){
			?>
				<script>
					swal({
					  title: 'Berhasil',
						  text: 'Login Berhasil',
						  type: 'success',
						  timer: 1500
						})
				    window.history.back();
				</script>
			<?php
			$_SESSION['id'] = $data['user_id'];
		}else{
			?>
				<script>
					swal({
					  title: 'Gagal',
						  text: 'Login Gagal, Silahkan Cek Kembali Username & Password Anda!',
						  type: 'error',
						  timer: 1500
						})
				    window.history.back();
				</script>
			<?php		
		}
	}else{
		header("Location:./");		
	}
?>