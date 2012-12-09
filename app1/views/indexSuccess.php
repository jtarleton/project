<?php //session_start();
global $posts; 
global $p;
//$path='/home/tarlejh/project/app1/views/xml/index_xml.php';
 ?>


<div id="content">




<?php 






$s = isset($_GET['s'] ) ? $_GET['s']  : 1;

	   echo paginated_links( WpPost::retrieveAll()->count(), 1000 , $s  );










	 $s = ( isset($_GET['s'])  ) ? $_GET['s'] : 1 ; 
$r=0;
foreach (WpPost::retrieveAll( $s, 1000) as $p):  $r++;  ?>

<?php
if(1): ?>
<div class="post">
	<h2> <?php echo link_to($p['post_title'], 'index.php?p=postdetail&pid=' . $p['_id']) ; ?></h2>

	<div class="contenttext <?php //echo zebraClass($r); ?>">

		<?php echo substr( strip_tags( $p['post_content'] ), 0, 10); ?>
	
		<p class="postinfo">Posted by root on <?php echo date('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t g:ia', time()); ?><br />
			<strong>Tags: PHP</strong> | <strong>Comments: 0</strong>
		</p>
	</div>
</div>

<?php endif; ?>

<?php endforeach; ?>






<div class="navigation">

			<p>
				<span class="prevlink"><?php //next_posts_link('&laquo; Previous entries') ?></span>
				<span class="nextlink"><?php //previous_posts_link('Next entries &raquo;') ?></span>
			

				<div class="pagination">

					

					<?php echo paginated_links( WpPost::retrieveAll()->count()  );


?>

					<?php if (0): ?>
					<ul>
					<li><a href="#">Prev</a></li>
					<li class="active">
					<a href="#">1</a>
					</li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#">Next</a></li>
					</ul>

					<?php endif; ?>
				</div> 

			</p>
</div>

</div>
