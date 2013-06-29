

	<div id="leftside">
		<h2 class="hide">Menu:</h2>

		<ul class="avmenu">
			<li><a class="current" href="index.php?p=about">About</a></li>
			<li>
				<?php echo link_to('Docs', BASEHREF.'/docs'); ?>
			</li>
			<li><a href="index.php?p=github">Site Updates</a></li>
			<li><a href="index.php?p=otherplaces">Other Places</a></li>

			<li><a href="index.php?p=login">Login</a>
				<!-- <ul>
					<li><a href="#">Subpage 1</a></li>
					<li><a href="#">Subpage 2</a></li>
				</ul> -->
			</li>
		</ul>


<?php /*
		<div class="announce">
			<h2>Updates</h2>

<?php $json=file_get_contents('/var/json/user_timeline.json');


$arr = json_decode($json, true);


$i=0;
foreach($arr as $row):
$i++;
if($i>2) break;

?>

			<p><strong><?php echo date('m/d/Y H:i:s', strtotime($row['created_at'])) ?></strong><br /><?php 

//echo link_to($row['text'], 'http://?id='$row['id']); 
echo strstr ( $row['text'], 'http://t', true);

?></p>
			<p class="textright"><a href="#">Read &raquo;</a></p>
<?php endforeach;	?>


	</div>
	*/ ?></div>


