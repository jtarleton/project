<?php //session_start();
global $posts; 
global $p;
//$path='/home/tarlejh/project/app1/views/xml/index_xml.php';
 ?>


<div id="content">

<?php $ct = 0; 

foreach (array() as $p): ?>

				<?php
				//$simplexml=simplexml_load_string(  
				//eval(>'.file_get_contents($path)); ?>


			<div class="post">

				<h2>

					<?php echo $p->getpost_title(); ?>	
					

				</h2>

				<div class="contenttext">

					<p>

						<?php



						//echo '<p style="color:#666666;font-size:10px;"><i>'.date('\b\y \J\a\m\e\s \o\n F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t g:ia', strtotime($p->getpost_date())).'</i></p>';
						?>

						<!--<ul class="thumbnails"> -->

						<?php if($ct==0): ?>
						
							<a href="#" class="thumbnail">
							<img src="http://www.jamestarleton.com/images/PHP-Elephant.jpg" alt="" />
							</a>
						
						<?php endif; ?>


						<?php  				
						//echo '<li class="span2"><p>'.
						echo $p->getpost_excerpt(); ?>

					</p>


					<p>

						<?php 
						
							echo sprintf('<a href="postdetail&name=%s">[%s]</a><br />', $p->getpost_name(), 'More &raquo;'); 
						
						?>

					</p>

					<!-- </ul> -->
					<?php $ct++; ?>

					
					
					

				
					<p class="postinfo" style="font-weight:normal; font-style:normal;">

					
by <?php

	if (is_object($p)) 
	{
		switch($p->getpost_author()){
			case 1:
				echo 'James';
				break;
			case 2:
				default:
				break;
		}
	}

	?>
	on <?php
	echo (is_object($p)) ? date('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t G:ia',strtotime($p->getpost_date())) : $p;
	?>














						
							
								<strong>Tags: </strong>
						
							

						<strong>Comments:</strong>
						</p>
				</div>

			</div>
			
				<?php
endforeach; ?>
</div>
<div class="navigation">

			<p>
				<span class="prevlink"><?php //next_posts_link('&laquo; Previous entries') ?></span>
				<span class="nextlink"><?php //previous_posts_link('Next entries &raquo;') ?></span>
			






				<!---<div class="pagination">
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
				</div> -->

			</p>







		</div>
