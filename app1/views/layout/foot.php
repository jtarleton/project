
</div>



<footer role="contentinfo">

    <p>
<center>

	&copy;2013 James<br />
Coded in the U.S.A. using vi, Coda, and <a href="http://www.sublimetext.com/">SublimeText</a>
<br />

<a href="http://www.youtube.com/watch?v=62G_IruzCc4">We Will Not Tolerate Scum</a>
<br />


<?php
$end   = (float) array_sum(explode(' ', microtime()));

echo sprintf('HTML 5 rendered in: %s %s %s microseconds', round(1000 * ($end - $_SESSION['start']), 2), PHP_EOL, PHP_EOL); ?>


<br />
<img src="http://www.w3.org/html/logo/downloads/HTML5_1Color_White.png" style="width:51.2px; height:51.2px;" />


</center>
</p>

</footer>

	<?php MysqliFactory::info(); ?>
		
			<!-- <?php echo file_get_contents('/var/project/app1/views/layout/cronsig.php'); ?> -->







<div id="popupContact">
		<b>Contact Form</b>
		<div style="float:right">




		<a id="popupContactClose">x</a></div>



		<span id="contactArea">

			<form>


				<input placeholder="Email" type="text" name="email"></input>


				

				
				<br />	
				<br /><br />
				<a class="bigbtn">Submit</a>

			</form>

		</span>
	</div>
	<div id="backgroundPopup"></div>



	<div id="popupContact2">
		<div style="float:right;"><a id="popupContactClose2">x</a></div>		<b>Search</b>


                <span id="contactArea2">
                	<form>
				
				<input placeholder="Search" type="text" name="search"/>

				<br />
				<br /><br />
				<a class="bigbtn">Search</a>
			</form>
		</span>
        </div>
        <div id="backgroundPopup2"></div>







</body>
</html>

