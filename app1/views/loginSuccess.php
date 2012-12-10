










<style type="text/css">



#respond input {
    width: 97.3%;
}


#respond input.txt {
background-color:#f8f8f8;
height:35px !important;
border:1px solid #dadada !important;
padding:0 0 0 1%;
color:#586470;
font-size:14px !important;
width:97%;
display:block;
margin-top:6px;
}
#respond input.txt:focus {
outline:none;
background:#fff;
}

.comment-form-author {
padding-bottom:20px;
}

#respond label {font-weight: bold;}




</style>









<div id="content">

<div id="respond"> 

<h2>Log In</h2>

<?php if(!@$_SESSION['isAuth2']): ?>
<form method="post" action="<?php echo BASEHREF; ?>index.php?p=authcallback">
	<label>User Name</label><br />
	<input style="width:25%" class="txt" type="text" value="" id="username" name="username" class=""/>

	<label>Password</label><br />
	<input style="width:25%;" class="txt" type="password" id="pass" name="pass" class=""/><br />

	<input type="submit" class="btn btn-primary" style="width:20%;" value="Log In"/>
</form>
<?php else: ?> <?php echo @$_SESSION['username']; ?> is already logged in.
<?php endif; ?>


</div>
</div>
