</div>
<div id="footer">
		<p>
			<span class="credits">&copy; <?php echo date('Y'); ?> James 
			<br />Powered by <?php echo link_to('Project','https://github.com/jtarleton/project'); ?> - 
			<a href="http://andreasviklund.com/wordpress-themes/">Theme design</a> by 
			<a href="http://andreasviklund.com/" title="">Andreas Viklund</a> &amp; 
			<a href="http://jasoncole.ca">Jason Cole</a>
		</p>


		<p>
			<br />
			<img src="<?php echo BASEHREF; ?>/images/mongodb.png" style="border:0;"></img>


	<br />

	<?php MysqliFactory::info(); ?>
		
			<!-- <?php echo file_get_contents('/var/project/app1/views/layout/cronsig.php'); ?> -->
		</p>

	</div>

</body>
</html>
