



<SCRIPT type="text/javascript">

jQuery(document).ready(function(){

jQuery('#pass').bind('keypress', function(e){

if(e.keyCode == '13'){



	jQuery(this).parents('form').submit();

}

});   

});

</SCRIPT>


<div class="main" role="main">

<div id="respond"> 

<?php if(!@$_SESSION['isAuth2']): ?>
<form class="form-horizontal" id="authform" method="post" action="<?php echo BASEHREF; ?>index.php?p=authcallback">
<fieldset>

<!-- Form Name -->
<legend>Login</legend>
<!-- Text input-->
<div class="control-group">
  <label class="control-label"> </label>
  <div class="controls">
    <input id="username" name="username" placeholder="user name" class="input-xlarge" type="text">
    <p class="help-block"></p>
  </div>
</div>

<!-- Password input-->
<div class="control-group">
  <label class="control-label"> </label>
  <div class="controls">
    <input id="pass" name="pass" placeholder="password" class="input-xlarge" type="password">
    <p class="help-block">case-sensitive</p>
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label"></label>
  <div class="controls">
    <a id="singlebutton" href="javascript:void(0);" name="singlebutton" class="bigbtn" onClick="return alert(jQuery(this).parents('form').submit());">Login</a>
  </div>
</div>

</fieldset>
</form>
































<?php else: ?> <?php echo @$_SESSION['username']; ?> is already logged in.
<?php endif; ?>


</div>
</div>
