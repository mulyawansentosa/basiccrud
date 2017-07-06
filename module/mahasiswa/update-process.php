<?php
	if($_REQUEST['simpan']){
		include "module/config/koneksi.php";
		$id 			= $_POST['id'];
		$nim			= $_POST['nim'];
		$nama			= $_POST['nama'];
		$lahir_tanggal	= $_POST['lahir_tanggal'];
		$lahir_tempat	= $_POST['lahir_tempat'];
		$jk				= $_POST['jk'];
		$agama			= $_POST['agama'];
		$hobi			= (array)$_POST['hobi'];
		$jurusan		= $_POST['jurusan'];
		$alamat			= $_POST['alamat'];
		$hobies 		= implode(", ",$hobi);

		if($_FILES['foto']['name']!==""){
			$foto			= $_FILES['foto'];
			$lokasi 		= "image/".$foto['name'];					
			$queryfoto 			= "
								UPDATE
								mahasiswa
								SET
									`mahasiswa_nim`='$nim',
									`mahasiswa_nama`='$nama',
									`mahasiswa_lahir_tempat`='$lahir_tempat',
									`mahasiswa_lahir_tanggal`='$lahir_tanggal',
									`mahasiswa_jk`='$jk',
									`mahasiswa_agama`='$agama',
									`mahasiswa_hobi`='$hobies',
									`mahasiswa_jurusan_id`='$jurusan',
									`mahasiswa_foto`='$lokasi',
									`mahasiswa_alamat`='$alamat'
								WHERE
								`mahasiswa_id` = '$id'
							";			
		}else{
			$query 				= "
								UPDATE
								mahasiswa
								SET
									`mahasiswa_nim`='$nim',
									`mahasiswa_nama`='$nama',
									`mahasiswa_lahir_tempat`='$lahir_tempat',
									`mahasiswa_lahir_tanggal`='$lahir_tanggal',
									`mahasiswa_jk`='$jk',
									`mahasiswa_agama`='$agama',
									`mahasiswa_hobi`='$hobies',
									`mahasiswa_jurusan_id`='$jurusan',
									`mahasiswa_alamat`='$alamat'
								WHERE
								`mahasiswa_id` = '$id'
								";
		}


		if($_FILES['foto']['name']!==""){
			$insert 		= mysqli_query($link,$queryfoto);
		}else{
			$insert 		= mysqli_query($link,$query);
		}

		if($insert){
			if($_FILES['foto']['name']!==""){
				$upload			= move_uploaded_file($foto['tmp_name'], $lokasi);
				if($upload){
					?>
						<script>
							swal({
							  title: 'Berhasil',
							  text: 'Data & Foto Berhasil Diunggah',
							  type: 'success',
							  timer: 1500
							})
						</script>
						<meta http-equiv="refresh" content="2; url=?page=mahasiswa-read" />
					<?php
				}else{
					?>
						<script>
							swal({
							  title: 'Perhatian',
							  text: 'Data Berhasil Disimpan, Foto Gagal Diunggah',
							  type: 'warning',
							  timer: 1500
							})
						</script>
						<meta http-equiv="refresh" content="2; url=?page=mahasiswa-update&id=<?php echo $id; ?>" />
					<?php
				}
			}else{
					?>
						<script>
							swal({
							  title: 'Berhasil',
							  text: 'Data Berhasil Diubah',
							  type: 'success',
							  timer: 1500
							})
						</script>
						<meta http-equiv="refresh" content="2; url=?page=mahasiswa-read" />
					<?php
			}
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
				<meta http-equiv="refresh" content="2; url=?page=mahasiswa-update&id=<?php echo $id; ?>" />
			<?php
		}
		mysqli_close($link);
	}else{
		header("Location:?page=read");
	}
?>