<?php
if(isset($_GET['page'])){

	//MODULE LOGIN
	if($_GET['page']=="login-process"){
		include "module/login/login-process.php";
	//END MODULE LOGIN

	}else{
		if(isset($_SESSION['id'])){

			//MODULE USER
			if($_GET['page']=="user-profile"){
				include "module/user/profile.php";
			}elseif($_GET['page']=="user-create"){
				include "module/user/create.php";
			}elseif($_GET['page']=="user-create-process"){
				include "module/user/create-process.php";
			}elseif($_GET['page']=="user-read"){
				include "module/user/read.php";
			}elseif($_GET['page']=="user-update"){
				include "module/user/update.php";
			}elseif($_GET['page']=="user-update-process"){
				include "module/user/update-process.php";
			}elseif($_GET['page']=="user-delete"){
				include "module/user/delete.php";
			//END MODULE USER

			//MODULE MAHASISWA
			}elseif($_GET['page']=="mahasiswa-create"){
				include "module/mahasiswa/create.php";
			}elseif($_GET['page']=="mahasiswa-create-process"){
				include "module/mahasiswa/create-process.php";
			}elseif($_GET['page']=="mahasiswa-read"){
				include "module/mahasiswa/read.php";
			}elseif($_GET['page']=="mahasiswa-update"){
				include "module/mahasiswa/update.php";
			}elseif($_GET['page']=="mahasiswa-update-process"){
				include "module/mahasiswa/update-process.php";
			}elseif($_GET['page']=="mahasiswa-delete"){
				include "module/mahasiswa/delete.php";
			//END MODULE MAHASISWA

			//MODULE DOSEN
			}elseif($_GET['page']=="dosen-create"){
				include "module/dosen/create.php";
			}elseif($_GET['page']=="dosen-create-process"){
				include "module/dosen/create-process.php";
			}elseif($_GET['page']=="dosen-read"){
				include "module/dosen/read.php";
			}elseif($_GET['page']=="dosen-update"){
				include "module/dosen/update.php";
			}elseif($_GET['page']=="dosen-update-process"){
				include "module/dosen/update-process.php";
			}elseif($_GET['page']=="dosen-delete"){
				include "module/dosen/delete.php";
			//END MODULE DOSEN

			//MODULE JURUSAN
			}elseif($_GET['page']=="jurusan-create"){
				include "module/jurusan/create.php";
			}elseif($_GET['page']=="jurusan-create-process"){
				include "module/jurusan/create-process.php";
			}elseif($_GET['page']=="jurusan-read"){
				include "module/jurusan/read.php";
			}elseif($_GET['page']=="jurusan-update"){
				include "module/jurusan/update.php";
			}elseif($_GET['page']=="jurusan-update-process"){
				include "module/jurusan/update-process.php";
			}elseif($_GET['page']=="jurusan-delete"){
				include "module/jurusan/delete.php";
			//END MODULE JURUSAN

			//MODULE KELAS
			}elseif($_GET['page']=="kelas-create"){
				include "module/kelas/create.php";
			}elseif($_GET['page']=="kelas-create-process"){
				include "module/kelas/create-process.php";
			}elseif($_GET['page']=="kelas-read"){
				include "module/kelas/read.php";
			}elseif($_GET['page']=="kelas-update"){
				include "module/kelas/update.php";
			}elseif($_GET['page']=="kelas-update-process"){
				include "module/kelas/update-process.php";
			}elseif($_GET['page']=="kelas-delete"){
				include "module/kelas/delete.php";
			//END MODULE KELAS

			}elseif($_GET['page']=="logout"){
				include "module/login/logout.php";
			}

		}else{
			?>
				<script>
					swal({
					  title: 'Please Login',
						  text: 'Anda Harus Login Terlebih Dahulu!',
						  type: 'error',
						  timer: 2000
						})
				    window.history.back();
				</script>
			<?php		
		}
	}
}else{
	include "module/frontpage/landing.php";	
}
	include "module/login/login.php";
?>