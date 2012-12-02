			<!-- <ul>--?>
				<?php 
					//$sun_info = date_sun_info(time(), 40.760179, -73.914168);
					//foreach ($sun_info as $key=> $val) 
					//{
					//	?><li><?php echo str_replace('_',' ',$key) .': '. date("g:ia", $val); ?></li><?php 
					//}
				?>

			<!-- </ul>  -->
			<!--
			<h2>Other Places</h2>
				<p>	
				<ul><li><a href="http://www.weather.com">The Weather Channel</a>
				</li>
				<li><a href="http://www.php.net">PHP</a></li>
				<li><a href="http://www.nytimes.com">NYT</a></li>
				</ul><br />
				</p>
			 <div class="thumbnail">
			    <img style="width:260px; height:180px;" src="http://www.jamestarleton.com/images/cp_res.jpg" alt="">
			    <h5>Random Image</h5>
			    <p>Today is <?php //echo date('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y g:ia'); ?></p>
			</div> 
			-->



	<div id="footer">
		<p>
			<span class="credits">&copy; <?php echo date('Y'); ?> 
			<a href="<?php //bloginfo('home'); ?>"><?php //bloginfo('name'); ?></a> - 
			<a href="<?php //bloginfo('rss2_url'); ?>">Entries (RSS)</a> - 
			<a href="<?php //bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a> - 
			<?php //wp_loginout(); ?></span>
			<br />Powered by <?php echo link_to('Project','https://github.com/jtarleton/project'); ?> - 
			<a href="http://andreasviklund.com/wordpress-themes/">Theme design</a> by 
			<a href="http://andreasviklund.com/" title="">Andreas Viklund</a> &amp; 
			<a href="http://jasoncole.ca">Jason Cole</a>
		</p>
	</div>

</div>
</body>
</html>
