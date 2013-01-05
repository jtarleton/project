


<ul class="sideNav">
                        <li><a href="http://www.crystalbit.com/admin.php?p=index" class="active">Posts</a></li>
			<li><a href="http://www.crystalbit.com/admin.php?p=create&pid=1">Create Post</a></li>


 <li><a href="http://www.crystalbit.com/admin.php?p=categories" class="active">Categories</a></li>


 <li><a href="http://www.crystalbit.com/admin.php?p=tags" class="active">Tags</a></li>

 <li><a href="http://www.crystalbit.com/admin.php?p=comments" class="active">Comments</a></li>

 <li><a href="http://www.crystalbit.com/admin.php?p=links">Links</a></li>













			                <?php if(@$_SESSION['isAuth2']) : ?>

<li><a href="<?php echo BASEHREF; ?>index.php?p=index">View Site</a></li>

<li><a href="<?php echo BASEHREF; ?>index.php?p=index" target="_BLANK">View Site In New Tab</a></li>
<li><a><b>Session Variables</b></a></li>
<?php foreach (@$_SESSION as $k=>$v): ?> <li><a><?php echo $k .' : '. $v; ?></a></li><?php endforeach; ?>
<?php endif; ?>









</ul>



