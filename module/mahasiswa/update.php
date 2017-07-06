<?php

	include "module/config/koneksi.php";
	$id 		= $_GET['id'];
	$query		= "
					SELECT *
					FROM mahasiswa
					WHERE
					`mahasiswa_id` = '$id'
				";
	$result 	= mysqli_query($link,$query);
	$data 		= mysqli_fetch_array($result);

	$qjurusan	= "
					SELECT *
					FROM jurusan
				";
	$jurusan 	= mysqli_query($link,$qjurusan);	

?>
<h3>Formulir Mahasiswa</h3>
<hr />
<div class="row-span">
	<form action="?page=mahasiswa-update-process" role="form" method="post" enctype="multipart/form-data">
		<div class="col-md-6">
		    <input type="hidden" class="form-control" name="id" value="<?php echo $data['mahasiswa_id']; ?>"/>
			<div class="form-group has-feedback" style="text-align:center;">
			    <img src="<?php echo $data['mahasiswa_foto']; ?>" width="300" height="400" />
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">NIM</label>
			    <input type="text" class="form-control" placeholder="NIM" name="nim" value="<?php echo $data['mahasiswa_nim']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-asterisk"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Nama Mahasiswa</label>
			    <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama" value="<?php echo $data['mahasiswa_nama']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-user"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Tempat Lahir</label>
			    <input type="text" class="form-control" placeholder="Tempat Lahir" name="lahir_tempat" value="<?php echo $data['mahasiswa_lahir_tempat']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-map-marker"></i>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group has-feedback">
			    <label class="control-label">Tanggal Lahir</label>
			    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="lahir_tanggal" value="<?php echo $data['mahasiswa_lahir_tanggal']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-calendar"></i>
		  	</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Jenis Kelamin</label><br />
			 	<label class="radio-inline"><input type="radio" name="jk" value="Laki-Laki" id="Laki-Laki">Laki-Laki</label>
				<label class="radio-inline"><input type="radio" name="jk" value="Perempuan" id="Perempuan">Perempuan</label>
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Agama</label><br />
		    	<select class="form-control" name="agama">
		    		<option value="Islam" id="Islam">Islam</option>
		    		<option value="Kristen" id="Kristen">Kristen</option>
		    		<option value="Budha" id="Budha">Budha</option>
		    		<option value="Katolik" id="Katolik">Katolik</option>
		    	</select>
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Hobi</label><br />
				<div class="checkbox">
				  <label><input type="checkbox" value="Olah Raga" name="hobi[]" id="Olah Raga" <?php if(in_array("Olah Raga", explode(", ",$data['mahasiswa_hobi']))){ echo "checked"; }?> >Olah Raga</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Menulis" name="hobi[]" id="Menulis" <?php if(in_array("Menulis", explode(", ",$data['mahasiswa_hobi']))){ echo "checked"; }?>>Menulis</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Bernyanyi" name="hobi[]" id="Bernyanyi" <?php if(in_array("Bernyanyi", explode(", ",$data['mahasiswa_hobi']))){ echo "checked"; }?>>Bernyani</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Musik" name="hobi[]" id="Musik" <?php if(in_array("Musik", explode(", ",$data['mahasiswa_hobi']))){ echo "checked"; }?>>Musik</label>
				</div>
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Jurusan</label><br />
		    	<select class="form-control" name="jurusan">
		    		<?php
		    			while($datajurusan = mysqli_fetch_array($jurusan)){
		    				?>
				    		<option value="<?php echo $datajurusan['jurusan_id']; ?>" <?php if($data['mahasiswa_jurusan_id']==$datajurusan['jurusan_id']){echo "selected";}?>><?php echo $datajurusan['jurusan_nama']; ?></option>
				    		<?php
		    			}
		    		?>
		    	</select>
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Foto</label><br />
			    <input type="file" class="form-control" name="foto" />
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Alamat</label><br />
			    <textarea class="form-control" placeholder="Alamat" name="alamat" rows="4"><?php echo $data['mahasiswa_alamat']; ?></textarea>
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
	var jk = "<?php echo $data['mahasiswa_jk'];?>";
	if(jk == 'Laki-Laki'){
		$('#Laki-Laki').attr('checked','checked');
	}else{
		$('#Perempuan').attr('checked','checked');		
	}
	// END JENIS KELAMIN //

	// AGAMA //
	var agama = "<?php echo $data['mahasiswa_agama'];?>";
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