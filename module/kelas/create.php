<h3>Formulir Kelas</h3>
<hr />
		<form action="?page=kelas-create-process" role="form" method="post" enctype="multipart/form-data">
		<div class="col-md-12">
		<div class="form-group has-feedback">
			    <label class="control-label">Kode Kelas</label>
			    <input type="text" class="form-control" placeholder="Kode Kelas" name="kode" required/>
			    <i class="form-control-feedback glyphicon glyphicon-asterisk"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Nama Kelas</label>
			    <input type="text" class="form-control" placeholder="Nama Kelas" name="kelas_nama" required/>
			    <i class="form-control-feedback glyphicon glyphicon-user"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Keterangan</label>
			    <textarea class="form-control" placeholder="Keterangan" name="keterangan" rows="10"></textarea>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group has-feedback">
				<input type="submit" class="btn btn-primary btn-lg" name="simpan" value="Simpan" style="width:100%;"/>
			</div>		
		</div>
	</form>
</div>
