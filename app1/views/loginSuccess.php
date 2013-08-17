
<div class="main" role="main">

<div id="respond"> 

<?php if(!@$_SESSION['isAuth2']): ?>
<form class="form-horizontal" method="post" action="<?php echo BASEHREF; ?>index.php?p=authcallback">
<fieldset>

<!-- Form Name -->
<h2>Login</h2>

<!-- Text input-->
<div class="control-group">
  <label class="control-label">User Name</label>
  <div class="controls">
    <input id="username" name="username" placeholder="user name" class="input-xlarge" type="text">
    <p class="help-block"></p>
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label">Password</label>
  <div class="controls">
    <input id="pass" name="pass" placeholder="password" class="input-xlarge" type="password">
    <p class="help-block">case-sensitive</p>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label"></label>
  <div class="controls">
    <button id="singlebutton" name="singlebutton" class="btn btn-primary">Login</button>
  </div>
</div>

</fieldset>
</form>
































<?php else: ?> <?php echo @$_SESSION['username']; ?> is already logged in.
<?php endif; ?>


</div>
</div>
