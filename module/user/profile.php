<?php
	include "module/config/koneksi.php";
	$id 		= $_SESSION['id'];
	$query		= "
					SELECT *
					FROM user
					WHERE
					`user_id` = '$id'
				";
	$result 	= mysqli_query($link,$query);
	$data 		= mysqli_fetch_array($result);
?>
<h3>Formulir Jurusan</h3>
<hr />
<div class="row-span">
	<form action="?page=user-update-process" role="form" method="post" enctype="multipart/form-data">
		<div class="col-md-12">
		    <input type="hidden" class="form-control" name="id" value="<?php echo $data['user_id']; ?>"/>
			<div class="form-group has-feedback">
			    <label class="control-label">Username</label>
			    <input type="text" class="form-control" placeholder="Username" name="username" value="<?php echo $data['user_username']; ?>"/>
			    <i class="form-control-feedback glyphicon glyphicon-asterisk"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Password</label>
			    <input type="text" class="form-control" placeholder="Password" name="password" value=""/>
			    <i class="form-control-feedback glyphicon glyphicon-wrench"></i>
			</div>
			<div class="form-group has-feedback">
			    <label class="control-label">Nama Pengguna</label>
			    <input type="text" class="form-control" placeholder="Nama Pengguna" name="nama" rows="10" value="<?php echo $data['user_nama']; ?>"/>
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