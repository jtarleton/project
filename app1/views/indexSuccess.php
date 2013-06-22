



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













<?php 






$s = isset($_GET['s'] ) ? $_GET['s']  : 1;

$r=0;

$new = array();
foreach( WpPost::retrieveLive( $s ) as $p ) {

$new[] = $p;
}
$new[] = new stdClass;
$new[] = new stdClass;

ObjectPresenter::prin($new); 



echo paginated_links( 12, 2, $s  );

?>
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



