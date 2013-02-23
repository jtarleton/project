<div id="content">
<h2>Other Places</h2>

<?php







$l = (@$_SESSION['isAuth2']) ? true : false;
?>
<ul>

	<?php foreach(WpLink::retrieveAll(0, 99999, $l) as $linkObj): ?>

	<li><?php echo link_to($linkObj->getAttribute('text'), $linkObj->getAttribute('url')); ?>

<?php endforeach; ?></li> 






</ul>

</div>
