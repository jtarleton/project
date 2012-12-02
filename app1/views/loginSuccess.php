<div id="content">


<?php if(!$_SESSION['isAuth2']): ?>
<form method="post" action="<?php echo BASEHREF; ?>index.php?p=authcallback">
	<div>
	<label>User Name</label><br />
	<input type="text" value="" id="username" name="username" class=""/>
	</div>

	<div>
	<label>Password</label><br />
	<input type="password" id="pass" name="pass" class=""/><br />
	</div><br />

	<div>
	<input type="submit" value="Log In"/>
	</div>
</form>
<?php else: ?> <?php echo $_SESSION['username']; ?> is already logged in.
<?php endif; ?>

</div>
