<h3>Formulir Dosen</h3>
<hr />
<div class="row-span">
	<form action="?page=dosen-create-process" role="form" method="post" enctype="multipart/form-data">
		<div class="col-md-6">
			<div class="form-group has-feedback">
			    <label class="control-label">NID</label>
			    <input type="text" class="form-control" placeholder="NID" name="nid" required/>
			    <i class="form-control-feedback glyphicon glyphicon-asterisk"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Nama Dosen</label>
			    <input type="text" class="form-control" placeholder="Nama Dosen" name="nama" required/>
			    <i class="form-control-feedback glyphicon glyphicon-user"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Inisial Dosen</label>
			    <input type="text" class="form-control" placeholder="Inisial Dosen" name="inisial" required/>
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
		    		<option value="Budha" id="Budha">Hindu</option>
		    		<option value="Katolik" id="Katolik">Katolik</option>
		    	</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group has-feedback">
		    	<label class="control-label">Hobi</label><br />
				<div class="checkbox">
				  <label><input type="checkbox" value="Olahraga" name="hobi[]" id="Olah Raga">Olahraga</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Menulis" name="hobi[]" id="Menulis">Menulis</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Menyanyi" name="hobi[]" id="Menyanyi">Menyanyi</label>
				</div>
				<div class="checkbox">
				  <label><input type="checkbox" value="Membaca" name="hobi[]" id="Membaca">Membaca</label>
				</div>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Mata Kuliah</label>
			    <input type="text" class="form-control" placeholder="Mata Kuliah" name="mata_kuliah" required/>
			    <i class="form-control-feedback glyphicon glyphicon-user"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">No Hp</label>
			    <input type="text" class="form-control" placeholder="No Hp" name="no_hp" required/>
			    <i class="form-control-feedback glyphicon glyphicon-user"></i>
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
