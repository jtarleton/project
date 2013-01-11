



<style type="text/css">
* {
margin:0; padding:0;
}
#widget 
{
margin:0; padding:0;
background:#Fafafa;
width:100%;
height: 277px;
}

#widget h2 
{
font-family: Arial, sans-serif;
font-size:18px;
line-height:19px;
color:#111111;
padding:5px 0px 0px 0px;
}


.imgframe 
{
width:100%;
height:177px;
margin:0;
padding:0;
background-image: url('images/mainpic2.jpg');
}

#imgframe1 
{


width:100%;
height:177px;
margin:0;
padding:0;


background-image: url('images/mainpic1.jpg');
}

#imgframe2
{


width:100%;
height:177px;
margin:0;
padding:0;


background-image: url('images/mainpic2.jpg');
}

#imgframe3 
{

width:100%;
height:177px;
margin:0;
padding:0;



background-image: url('images/mainpic3.jpg');
}


#blurb 
{
padding: 0px 0px 10px 0px;
font-family:Helvetica, Verdana, sans-serif;
font-size:12.0px; line-height:14px;
}

#details 
{
font-size:10px; 
font-weight:700;
}

ul#lst  {
margin:0; padding:0;
}
ul#lst li {
list-style-type: none;
}

</style>













<script type="text/javascript">

var totalItems= 3;

function random()
{
    return Math.floor(Math.random()*totalItems+1);
	//return a number between 1 - 10
}
</script>


<?php //session_start();
global $posts; 
global $p;
//$path='/home/tarlejh/project/app1/views/xml/index_xml.php';
 ?>


<div id="content">









<!-- 



<div id="widget" style="margin-bottom:20px;">
<div class="imgframe" id=""></div>

<h2>Early, by Chicane</h2>
<div id="blurb">

<div style="float:left; width:300px; margin:0; padding:0;">
Lorem ipsum doloar sit amet blah foo bar bam. Bah Blah blah bloo blaa bla. 
<span id="details">Details>></span>
</div>

<div style="float:right;">
	<h4>Related Links</h4>
	<ul id="lst" style="width:80px;">
	<li>Foo</li>
	<li>Bar</li>
</ul>
</div>


<button id="clickme">CLICKME</button>


<div style="clear:both;"></div>





</div>






</div>

-->













<?php 






$s = isset($_GET['s'] ) ? $_GET['s']  : 1;

	//   echo paginated_links( WpPost::retrieveAll()->count(), 2 , $s  );










	 $s = ( isset($_GET['s'])  ) ? $_GET['s'] : 1 ; 
$r=0;
foreach (WpPost::retrieveLive( $s ) as $p):  $r++;  ?>

<?php
if(1): ?>
<div class="post">
	<h2> <?php echo link_to($p['post_title'], 'index.php?p=postdetail&pid=' . $p['_id']) ; ?></h2>

	<div class="contenttext <?php //echo zebraClass($r); ?>">
<p>
		<?php 

$string = tokenTruncate($p['post_content'], 500);
echo strip_tags( $string);
		?><span>...</span></p><p><?php echo link_to('Read &gt;', 'index.php?p=postdetail&pid=' . $p['_id']); ?></p>
	
		<p class="postinfo">Posted by root on <?php echo date('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t g:ia', time()); ?><br />
			<strong>Tags: PHP</strong> | <strong>Comments: 0</strong>
		</p>
	</div>
</div>

<?php endif; ?>

<?php endforeach; ?>






<?php					           

echo paginated_links( WpPost::retrieveAll()->count(), 5 , $s  );

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











<script type="text/javascript">

jQuery(document).ready(function(){

jQuery('#clickme').bind('click', function(){
var q = random();

jQuery('.imgframe').fadeOut();

jQuery('.imgframe').css('background-image', "url('images/mainpic"+ q +".jpg')" );

jQuery('.imgframe').fadeIn('slow');

});


});


</script>



