</div>
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


		<p>
			<br />
			<img src="http://www.crystalbit.com/images/mongodb.png" style="border:0;"></img>
		
			<?php echo file_get_contents('/var/project/app1/views/layout/cronsig.php'); ?>
		</p>

	</div>

</body>
</html>
