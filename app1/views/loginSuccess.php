
<?php if(!@$_SESSION['isAuth2']): ?>

<div class="alert alert-dismissable alert-danger">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<h4>Invalid Login</h4>
<p>There seems to be a problem with your credentials</p>
</div>

<div class="bs-component">
  <div class="panel panel-default">
    <div class="panel-body">
      <form class="form-horizontal" id="authform"  method="post" action="<?php echo SBASEHREF; ?>sindex.php?p=authcallback">
        <fieldset>
          <legend>Login to Crystal Bit</legend>
          <div class="form-group">
            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
            <div class="col-lg-10">
              <input class="form-control" id="inputEmail" placeholder="Email" type="text">
            </div>
          </div>
          <div class="form-group">
          <label for="inputPassword" class="col-lg-2 control-label">Password</label>
          <div class="col-lg-10">
            <input class="form-control" id="inputPassword" placeholder="Password" type="password">
          </div>
          
          </div>
          <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
             
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </div>
</div>
<p class="bs-component">
  <button type="button" class="btn btn-default">Default</button>
  <button type="button" class="btn btn-primary">Primary</button><br /><br />
  <button type="button" class="btn btn-success">Success</button>
  <button type="button" class="btn btn-info">Info</button>
  <button type="button" class="btn btn-warning">Warning</button><br /><br />
  <button type="button" class="btn btn-danger">Danger</button>
  <button type="button" class="btn btn-link">Link</button>
</p>



























<?php else: ?> 
<div class="alert alert-dismissable alert-danger">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<h4>Alert</h4>
<p><?php echo @$_SESSION['username']; ?> is already logged in.</p>
</div>


<?php endif; ?>

    <!-- /row -->
    </div>



