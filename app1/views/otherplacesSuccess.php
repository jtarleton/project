
<div class="main" role="main">


<div class="post">

<article class="entry">



<header>
<h1>Links </h1></header>


<p>

	Other interesting places on the web:



<?php







$l = (@$_SESSION['isAuth2']) ? true : false;
?>
<ul style="padding:10px;">

	<?php foreach(WpLink::retrieveAll(0, 99999, $l) as $cat=>$rows):
		?><li><h3><br /><?php echo $cat; ?></h3><ul>
		<?php foreach($rows as $linkObj): ?>

	<li><?php echo link_to($linkObj->getAttribute('text'), $linkObj->getAttribute('url')); ?></li>
<?php endforeach; ?></ul></li>
<?php endforeach; ?>






</ul>


</p>
</article>
</div>
</div>
