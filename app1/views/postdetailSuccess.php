<?php  
global $postdetail; 
global $comments;
global $wpPrevious;
global $wpNext;
?>


<div id="content" style="margin-bottom:20px;">























<?php //echo $wpPrevious; ?>

<?php //echo $wpNext; ?>

<h2>

<?php



if(!class_exists('WpPost'))
require_once('/var/project/app1/models/WpPost.class.php');
$post = WpPost::retrieveByPK( $_GET['pid'] );


 echo (!empty($post)) ? $post->getAttribute('post_title') : null; ?></h2>
	<!-- <div style="line-height:22px;"><img src="http://www.jamestarleton.com/images/phpelephant.jpg" style="float:left; margin:0;" />-->
<?php
	echo (!empty($post)) ? $post->getAttribute('post_content'): null;
	?>



	<p class="postinfo" style="font-weight:normal; margin-bottom:0;">
	on <?php echo (!empty($post)) ? date('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t G:ia', strtotime(date('m/D/Y') )) : null;
	?>   



<?php if( @$_SESSION['isAuth2']==1) : ?>

<a href="admin.php?p=edit&pid=<?php echo $post->getId(); ?>">E</a>

<?php endif; ?>



<strong>Tags: </strong>
						<?php echo WpPost::getInstance($post->getId())->getTagString(); ?>
							

						<strong>Comments:</strong>


</p>



<p style="margin-top:0;">
<fieldset style="margin-top:0;background:transparent;padding:0px;border:1px solid transparent;">

<legend style="border:0;"></legend>


<form id="commentForm">
<div style="width:488px; margin-top:10px;
padding:5px 7px 5px 5px; 
border:0px solid #808080;
">


<label for="commenttext"

style="margin-top:0; padding-top:0;border:0;
border-bottom-color: #F0F0F0;
border-bottom-style: solid;
border-bottom-width: 1px;
color: #333;
display: block;
font-size: 14px;
font-weight: normal;
margin-bottom:20px;text-rendering: optimizelegibility;
background:transparent;">Comment</label>









<textarea style="display:block;
width:99%; padding:20px;
border:1px solid #F0F0F0;
//background-color:transparent;



background-color:#F0F0F0;border:0px solid #C9C9C9; margin:0px; padding:20px; font-family:Verdana, sans; font-size:10px;
color:#696969;
line-height:18px;



overflow:auto;" name="commenttext" id="commenttext" 
			class="field contactinput" 
			rows="5" 
			cols="400">Add a comment
			</textarea>
			<div style="margin-top:20px;">
			<label>Please answer the captcha to prevent spam.</label>
			
			<div style="padding:10px;font-weight:normal;">
			<label style="padding:0px;font-weight:normal;">The political party of Ronald Reagan while in office was:<br /> (<i>hint: begins with either a D or R</i>)</label>
			</div>
			<label for="captcha_ans"

style="border:0;
border-bottom-color: #F0F0F0;
border-bottom-style: solid;
border-bottom-width: 1px;
color: #333;
display: block;
font-size: 14px;
font-weight: normal;
margin-bottom:20px;text-rendering: optimizelegibility;
background:transparent;">Answer</label><input 







style="


padding:20px;
border:1px solid #F0F0F0;
//background-color:transparent;



background-color:#F0F0F0;border:0px solid #C9C9C9; margin:0px; padding:20px; font-family:Verdana, sans; font-size:10px;
color:#696969;
line-height:18px;






































"






type="text" id="textcaptcha_ans" name="textcaptcha_ans"></input>
			</div>
			<input type="hidden" name="pid" id="pid" 
			value="<?php echo $post->getId(); ?>">
			</input>
		<div style="text-align:left;padding:10px;">
			<button type="button" class="btn btn-primary" id="submitBtn">Submit</button> 
			<button type="reset" class="btn">Reset</button>


		</div>		

	</form>


	</fieldset>
	</p>
	<div id="commensts"></div>
























</div>











