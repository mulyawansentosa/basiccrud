<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Login</h4>
      </div>
      <div class="modal-body">
        <form action="?page=login-process" role="form" method="post" enctype="multipart/form-data">
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
              <input type="submit" class="btn btn-primary btn-lg" name="login" value="Login" style="width:100%;"/>
            </div>    
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>