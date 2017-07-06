<?php
	if($_REQUEST['simpan']){
		include "module/config/koneksi.php";
		$nid			= $_POST['nid'];
		$nama			= $_POST['nama'];
		$inisial		= $_POST['inisial'];
		$lahir_tempat	= $_POST['lahir_tempat'];
		$lahir_tanggal	= $_POST['lahir_tanggal'];
		$jk				= $_POST['jk'];
		$agama			= $_POST['agama'];
		$hobi			= (array)$_POST['hobi'];
		$mata_kuliah	= $_POST['mata_kuliah'];
		$no_hp			= $_POST['no_hp'];
		$foto			= $_FILES['foto'];
		$alamat			= $_POST['alamat'];
		$hobi 			= implode(", ",$hobi);
		$lokasi 		= "image/".$foto['name'];
		$query 			= "
							INSERT INTO
							dosen(
								`id`,
								`nid`,
								`nama`,
								`inisial`,
								`lahir_tempat`,
								`lahir_tanggal`,
								`jk`,
								`agama`,
								`hobi`,
								`mata_kuliah`,
								`no_hp`,
								`foto`,
								`alamat`
							)
							VALUES(
								'',
								'$nid',
								'$nama',
								'$inisial',
								'$lahir_tempat',
								'$lahir_tanggal',
								'$jk',
								'$agama',
								'$hobi',
								'$mata_kuliah',
								'$no_hp',
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
						<meta http-equiv="refresh" content="2; url=?page=dosen-read" />
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
						<meta http-equiv="refresh" content="2; url=?page=dosen-update&id=<?php echo $id; ?>" />
					<?php
				}
		}else{
			?>
				<script>
					swal({
					  title: 'Gagal',
					  text: "<?php echo mysqli_error($link); ?>",
					  type: 'error',
					  timer: 3000
					})
				</script>
				<meta http-equiv="refresh" content="2; url=?page=dosen-update&id=<?php echo $id; ?>" />
			<?php
		}
		mysqli_close($link);
	}else{
		header("Location:?page=./");
	}
?>