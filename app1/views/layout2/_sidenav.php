


<ul class="sideNav">
                        <li><a href="http://www.crystalbit.com/admin.php?p=index" class="active">Post Index</a></li>
			<li><a href="http://www.crystalbit.com/admin.php?p=create&pid=1">Create Post</a></li>
			<li><a href="http://www.crystalbit.com/admin.php?p=edit&pid=1">Edit Post</a></li>                    















			                <?php if(@$_SESSION['isAuth2']) : ?>

<li><a href="<?php echo BASEHREF; ?>index.php?p=index">View Site</a>


<li><a href="<?php echo BASEHREF; ?>index.php?p=index" target="_BLANK">View Site In New Tab</a>
<li>Session Variables</li>
<?php foreach (@$_SESSION as $k=>$v): ?> <li><?php echo $k .' : '. $v; ?> </li><?php endforeach; ?>
<?php endif; ?>









</ul>



