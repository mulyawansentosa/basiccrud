<?php

	include "module/config/koneksi.php";
	$id 		= $_GET['id'];
	$query		= "
					SELECT *
					FROM dosen
					WHERE
					`id` = '$id'
				";
	$result 	= mysqli_query($link,$query);
	$data 		= mysqli_fetch_array($result);
?>
<h3>Formulir Dosen</h3>
<hr />
<div class="row-span">
	<form action="?page=dosen-update-process" role="form" method="post" enctype="multipart/form-data">
		<div class="col-md-6">
		    <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']; ?>"/>
			<div class="form-group has-feedback" style="text-align:center;">
			    <img src="<?php echo $data['foto']; ?>" width="300" height="400" />
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">NID</label>
			    <input type="text" class="form-control" placeholder="Nid" name="nid" value="<?php echo $data['nid']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-asterisk"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Nama Dosen</label>
			    <input type="text" class="form-control" placeholder="Nama Dosen" name="nama" value="<?php echo $data['nama']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-user"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Inisial Dosen</label>
			    <input type="text" class="form-control" placeholder="Inisial Dosen" name="inisial" value="<?php echo $data['inisial']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-user"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Tempat Lahir</label>
			    <input type="text" class="form-control" placeholder="Tempat Lahir" name="lahir_tempat" value="<?php echo $data['lahir_tempat']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-map-marker"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Tanggal Lahir</label>
			    <input type="text" class="form-control" placeholder="Tanggal Lahir" name="lahir_tanggal" value="<?php echo $data['lahir_tanggal']; ?>"/>
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
		    		<option value="Budha" id="Hindu">Hindu</option>
		    		<option value="Katolik" id="Katolik">Katolik</option>
		    	</select>
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Hobi</label><br />
				<div class="checkbox">
				  <label><input type="checkbox" value="Olahraga" name="hobi[]" id="Olahraga" <?php if(in_array("Olahraga", explode(", ",$data['hobi']))){ echo "checked"; }?> >Olahraga</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Menulis" name="hobi[]" id="Menulis" <?php if(in_array("Menulis", explode(", ",$data['hobi']))){ echo "checked"; }?>>Menulis</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Menyanyi" name="hobi[]" id="Menyanyi" <?php if(in_array("Menyanyi", explode(", ",$data['hobi']))){ echo "checked"; }?>>Menyanyi</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Membaca" name="hobi[]" id="Membaca" <?php if(in_array("Membaca", explode(", ",$data['hobi']))){ echo "checked"; }?>>Membaca</label>
				</div>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Mata Kuliah</label>
			    <input type="text" class="form-control" placeholder="Mata Kuliah" name="mata_kuliah" value="<?php echo $data['mata_kuliah']; ?>"/>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">No Hp</label>
			    <input type="text" class="form-control" placeholder="No Hp" name="no_hp" value="<?php echo $data['no_hp']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-user"></i>
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Foto</label><br />
			    <input type="file" class="form-control" name="foto" />
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Alamat</label><br />
			    <textarea class="form-control" placeholder="Alamat" name="alamat" rows="4"><?php echo $data['alamat']; ?></textarea>
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
	var jk = "<?php echo $data['jk'];?>";
	if(jk == 'Laki-Laki'){
		$('#Laki-Laki').attr('checked','checked');
	}else{
		$('#Perempuan').attr('checked','checked');		
	}
	// END JENIS KELAMIN //

	// AGAMA //
	var agama = "<?php echo $data['agama'];?>";
	console.log(agama);
	if(agama == 'Islam'){
		$('#Islam').attr('selected','selected');
	}else if(agama == 'Kristen'){
		$('#Kristen').attr('selected','selected');
	}else if(agama == 'Budha'){
		$('#Budha').attr('selected','selected');
	}else if(agama == 'Hindu'){
		$('#Hindu').attr('selected','selected');
	}else if(agama == 'Katolik'){
		$('#Katolik').attr('selected','selected');
	}else{
		$('#Islam').attr('selected','selected');
	}
	// AGAMA //
</script>