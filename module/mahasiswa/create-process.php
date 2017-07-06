<?php
	if($_REQUEST['simpan']){
		include "module/config/koneksi.php";
		$nim			= $_POST['nim'];
		$nama			= $_POST['nama'];
		$lahir_tanggal	= $_POST['lahir_tanggal'];
		$lahir_tempat	= $_POST['lahir_tempat'];
		$jk				= $_POST['jk'];
		$agama			= $_POST['agama'];
		$hobi			= (array)$_POST['hobi'];
		$jurusan		= $_POST['jurusan'];
		$foto			= $_FILES['foto'];
		$alamat			= $_POST['alamat'];
		$hobies 		= implode(", ",$hobi);
		$lokasi 		= "image/".$foto['name'];
		$query 			= "
							INSERT INTO
							mahasiswa(
								`mahasiswa_id`,
								`mahasiswa_nim`,
								`mahasiswa_nama`,
								`mahasiswa_lahir_tempat`,
								`mahasiswa_lahir_tanggal`,
								`mahasiswa_jk`,
								`mahasiswa_agama`,
								`mahasiswa_hobi`,
								`mahasiswa_jurusan_id`,
								`mahasiswa_foto`,
								`mahasiswa_alamat`
							)
							VALUES(
								'',
								'$nim',
								'$nama',
								'$lahir_tempat',
								'$lahir_tanggal',
								'$jk',
								'$agama',
								'$hobies',
								'$jurusan',
								'$lokasi',
								'$alamat'
							)
						";
		$insert 		= mysqli_query($link,$query);
		if($insert){
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
					  title: 'Gagal',
					  text: 'Data Gagal Disimpan',
					  type: 'error',
					  timer: 1500
					})
				</script>
				<meta http-equiv="refresh" content="2; url=?page=mahasiswa-update&id=<?php echo $id; ?>" />
			<?php
		}
		mysqli_close($link);
	}else{
		header("Location:?page=./");
	}
?>