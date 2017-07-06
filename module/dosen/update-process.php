<?php
	if($_REQUEST['simpan']){
		include "module/config/koneksi.php";
		$id 			= $_POST['id'];
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
		$alamat			= $_POST['alamat'];
		$hobi 		= implode(", ",$hobi);

		if($_FILES['foto']['name']!==""){
			$foto			= $_FILES['foto'];
			$lokasi 		= "image/".$foto['name'];					
			$queryfoto 			= "
								UPDATE
								dosen
								SET
									`nid`='$nid',
									`nama`='$nama',
									`inisial`='$inisial',
									`lahir_tempat`='$lahir_tempat',
									`lahir_tanggal`='$lahir_tanggal',
									`jk`='$jk',
									`agama`='$agama',
									`hobi`='$hobi',
									`mata_kuliah`='$mata_kuliah',
									`no_hp`='$no_hp',
									`foto`='$lokasi',
									`alamat`='$alamat'
								WHERE
								`id` = '$id'
							";			
		}else{
			$query 				= "
								UPDATE
								dosen
								SET
									`nid`='$nid',
									`nama`='$nama',
									`inisial`='$inisial',
									`lahir_tempat`='$lahir_tempat',
									`lahir_tanggal`='$lahir_tanggal',
									`jk`='$jk',
									`agama`='$agama',
									`hobi`='$hobi',
									`mata_kuliah`='$mata_kuliah',
									`no_hp`='$no_hp',
									`alamat`='$alamat'
								WHERE
								`id` = '$id'
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
							  title: 'Berhasil',
							  text: 'Data Berhasil Diubah',
							  type: 'success',
							  timer: 1500
							})
						</script>
						<meta http-equiv="refresh" content="2; url=?page=dosen-read" />
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
				<meta http-equiv="refresh" content="2; url=?page=dosen-update&id=<?php echo $id; ?>" />
			<?php
		}
		mysqli_close($link);
	}else{
		header("Location:?page=read");
	}
?>