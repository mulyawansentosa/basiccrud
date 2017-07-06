<?php

	include "module/config/koneksi.php";
	$id 		= $_GET['id'];
	$query		= "
					SELECT *
					FROM jurusan
					WHERE
					`jurusan_id` = '$id'
				";
	$result 	= mysqli_query($link,$query);
	$data 		= mysqli_fetch_array($result);
?>
<h3>Formulir Jurusan</h3>
<hr />
<div class="row-span">
	<form action="?page=jurusan-update-process" role="form" method="post" enctype="multipart/form-data">
		<div class="col-md-12">
		    <input type="hidden" class="form-control" name="id" value="<?php echo $data['jurusan_id']; ?>"/>
			<div class="form-group has-feedback">
			    <label class="control-label">Kode Jurusan</label>
			    <input type="text" class="form-control" placeholder="Kode Jurusan" name="kode" value="<?php echo $data['jurusan_kode']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-asterisk"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Nama Jurusan</label>
			    <input type="text" class="form-control" placeholder="Nama Jurusan" name="nama" value="<?php echo $data['jurusan_nama']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-user"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Keterangan</label>
			    <textarea class="form-control" placeholder="Keterangan" name="keterangan" rows="10"><?php echo $data['jurusan_keterangan']; ?></textarea>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group has-feedback">
				<input type="submit" class="btn btn-primary btn-lg" name="simpan" value="Simpan" style="width:100%;"/>
			</div>		
		</div>
	</form>
</div>
<script>
	// JENIS KELAMIN //
	var jk = "<?php echo $data['jurusan_jk'];?>";
	if(jk == 'Laki-Laki'){
		$('#Laki-Laki').attr('checked','checked');
	}else{
		$('#Perempuan').attr('checked','checked');		
	}
	// END JENIS KELAMIN //

	// AGAMA //
	var agama = "<?php echo $data['jurusan_agama'];?>";
	console.log(agama);
	if(agama == 'Islam'){
		$('#Islam').attr('selected','selected');
	}else if(agama == 'Kristen'){
		$('#Kristen').attr('selected','selected');
	}else if(agama == 'Budha'){
		$('#Budha').attr('selected','selected');
	}else if(agama == 'Katolik'){
		$('#Katolik').attr('selected','selected');
	}else{
		$('#Islam').attr('selected','selected');
	}
	// AGAMA //
</script>