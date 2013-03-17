<?php  

if(!class_exists('WpPost'))
require_once('/var/project/app1/models/WpPost.class.php');
$post = WpPost::retrievePost( $_GET['pid'] );



global $postdetail; 
global $comments;
global $wpPrevious;
global $wpNext;
?>


<div id="content" style="margin-bottom:20px;">























<?php //echo $wpPrevious; ?>

<?php //echo $wpNext; ?>

<?php if(!$post) die('Not found.'); ?>
<h2>

<?php
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



    <a onclick='postToFeed(); return false;'>Post to Feed</a> </p>

<div id='fb-root'></div>
   <p id='msg'></p>





<?php endif; ?>



						
							






 <strong>Tags: 





<?php
$names = array();
foreach( $post->getTags() as $termObj ) $names[]=$termObj->getAttribute('name');
echo implode(', ',$names);
?>

</strong>







						<strong>Comments:</strong>


</p>



<p style="margin-top:0;">



<form id="commentForm">
<!--<div style="width:488px; margin-top:10px;
padding:5px 7px 5px 5px; 
border:0px solid #808080;
"> -->
<table style="table-layout:fixed;border:0; width:100%"><tr><td>
<label for="commenttext" style="margin-bottom:20px;text-rendering: optimizelegibility; 
background:transparent;">Comment</label>
<textarea name="commenttext" id="commenttext" rows="4" cols="50" style="line-height:14px; text-rendering: optimizelegibility; border:0; font-family:Verdana, sans-serif; font-size:10px; padding:15px; color:gray; background-color:#F0F0F0;" autofocus="true">Add a comment</textarea>
</td>

<td>
	
                        <label>Please answer the captcha to prevent spam.</label><br />
                        <label style="font-weight:normal;">What is the name of the massive star at the center of the <?php echo link_to('Solar System', 'http://http://en.wikipedia.org/wiki/Solar_System'); ?> ?<br /> (<i>hint: begins with a S </i>)</label>
			<br />

			<table style="width:100%; table-layout:fixed; border:0"><tr><td> <label>Your answer: </label></td><td>
			<input type="text" style="padding:3px; border:0; line-height:14px; background-color:#F0F0F0; color:#333; font-family:Verdana, sans-serif; font-size:10px; width:70px;" maxlength="5" id="textcaptcha_ans" name="textcaptcha_ans"></input></td></tr></table>
		</td></tr></table>

		<input type="hidden" name="pid" id="pid" value="<?php echo $post->getId(); ?>"></input>









		<div style="text-align:left;padding:5px;">
			<button type="button" class="btn btn-primary" id="submitBtn">Submit</button> 
			<button type="reset" class="btn">Reset</button>
		</div>		

	</form>

</p>
	<div id="comments"></div>



















<!-- 

</div>
 -->










