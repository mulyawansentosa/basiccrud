<h3>Formulir Jurusan</h3>
<hr />
<div class="row-span">
	<form action="?page=jurusan-create-process" role="form" method="post" enctype="multipart/form-data">
		<div class="col-md-12">
			<div class="form-group has-feedback">
			    <label class="control-label">Kode Jurusan</label>
			    <input type="text" class="form-control" placeholder="Kode Jurusan" name="kode" required/>
			    <i class="form-control-feedback glyphicon glyphicon-asterisk"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Nama Jurusan</label>
			    <input type="text" class="form-control" placeholder="Nama Jurusan" name="nama" required/>
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
