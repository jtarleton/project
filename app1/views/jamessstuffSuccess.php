<?php if(! @$_SESSION['isAuth2'] ): ?>
<div id="content">You are not authorized to access this page.</div>
<?php else: ?>
<div id="content"><h2>James's Stuff</h2>

<p>

<ul>
<?php 
foreach(PersonalInv::retrieveAll(0, 1000)  as $v):
?>


<li><?php echo link_to($v['description'], '?p=stuffdetail&invid='.$v['_id']); ?></li>


<?php
endforeach;
?>

</ul>

</p>
</div>

<?php endif; ?>
