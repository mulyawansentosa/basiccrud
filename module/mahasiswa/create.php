<?php
	include "module/config/koneksi.php";
	$query		= "
					SELECT *
					FROM jurusan
				";
	$result 	= mysqli_query($link,$query);	
?>

<h3>Formulir Mahasiswa</h3>
<hr />
<div class="row-span">
	<form action="?page=mahasiswa-create-process" role="form" method="post" enctype="multipart/form-data">
		<div class="col-md-6">
			<div class="form-group has-feedback">
			    <label class="control-label">NIM</label>
			    <input type="text" class="form-control" placeholder="NIM" name="nim" required/>
			    <i class="form-control-feedback glyphicon glyphicon-asterisk"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Nama Mahasiswa</label>
			    <input type="text" class="form-control" placeholder="Nama Mahasiswa" name="nama" required/>
			    <i class="form-control-feedback glyphicon glyphicon-user"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Tempat Lahir</label>
			    <input type="text" class="form-control" placeholder="Tempat Lahir" name="lahir_tempat" required/>
			    <i class="form-control-feedback glyphicon glyphicon-map-marker"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Tanggal Lahir</label>
			    <input type="date" class="form-control" placeholder="Tanggal Lahir" name="lahir_tanggal" required/>
			    <i class="form-control-feedback glyphicon glyphicon-calendar"></i>
			  </div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Jenis Kelamin</label><br />
			 	<label class="radio-inline"><input type="radio" name="jk" value="Laki-Laki" id="Laki-Laki" required>Laki-Laki</label>
				<label class="radio-inline"><input type="radio" name="jk" value="Perempuan" id="Perempuan">Perempuan</label>
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Agama</label><br />
		    	<select class="form-control" name="agama" required>
		    		<option value="Islam" id="Islam">Islam</option>
		    		<option value="Kristen" id="Kristen">Kristen</option>
		    		<option value="Budha" id="Budha">Budha</option>
		    		<option value="Katolik" id="Katolik">Katolik</option>
		    	</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group has-feedback">
		    	<label class="control-label">Hobi</label><br />
				<div class="checkbox">
				  <label><input type="checkbox" value="Olah Raga" name="hobi[]" id="Olah Raga">Olah Raga</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Menulis" name="hobi[]" id="Menulis">Menulis</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Bernyanyi" name="hobi[]" id="Bernyanyi">Bernyani</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Musik" name="hobi[]" id="Musik">Musik</label>
				</div>
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Jurusan</label><br />
		    	<select class="form-control" name="jurusan" required>
		    		<?php
		    			while($data = mysqli_fetch_array($result)){
		    				?>
				    		<option value="<?php echo $data['jurusan_id']; ?>"><?php echo $data['jurusan_nama']; ?></option>
				    		<?php
		    			}
		    		?>
		    	</select>
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Foto</label><br />
			    <input type="file" class="form-control" name="foto" required/>
			</div>
			<div class="form-group has-feedback">
		    	<label class="control-label">Alamat</label><br />
			    <textarea class="form-control" placeholder="Alamat" name="alamat" rows="4" required></textarea>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group has-feedback">
				<input type="submit" class="btn btn-primary btn-lg" name="simpan" value="Simpan" style="width:100%;"/>
			</div>		
		</div>
	</form>
</div>
