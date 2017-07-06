<h3>Formulir User</h3>
<hr />
<div class="row-span">
	<form action="?page=user-create-process" role="form" method="post" enctype="multipart/form-data">
		<div class="col-md-12">
			<div class="form-group has-feedback">
			    <label class="control-label">Username</label>
			    <input type="text" class="form-control" placeholder="Username" name="username" required/>
			    <i class="form-control-feedback glyphicon glyphicon-asterisk"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Password</label>
			    <input type="password" class="form-control" placeholder="Password" name="password" required/>
			    <i class="form-control-feedback glyphicon glyphicon-wrench"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Nama</label>
			    <input type="text" class="form-control" placeholder="Keterangan" name="nama" rows="10"/>
			    <i class="form-control-feedback glyphicon glyphicon-user"></i>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group has-feedback">
				<input type="submit" class="btn btn-primary btn-lg" name="simpan" value="Simpan" style="width:100%;"/>
			</div>		
		</div>
	</form>
</div>
