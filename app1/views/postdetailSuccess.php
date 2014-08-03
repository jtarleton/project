
<?php  

if(!class_exists('WpPost'))
require_once('/var/project/app1/models/WpPost.class.php');
$post = WpPost::retrieveByPK( $_GET['pid'] );



global $postdetail; 
global $comments;
global $wpPrevious;
global $wpNext;
?>














<?php //echo $wpPrevious; ?>

<?php //echo $wpNext; ?>

<?php if(!$post) die('Not found.'); ?>



<article class="entry %s"><header>
    <h1>
        <?php
 echo (!empty($post)) ? $post->getAttribute('post_title') : null; ?></h1>
	<!-- <div style="line-height:22px;"><img src="http://www.jamestarleton.com/images/phpelephant.jpg" style="float:left; margin:0;" />-->


    </header><div class="post">



  
        <article><p>
<?php
	echo (!empty($post)) ? html_entity_decode($post->getAttribute('post_content')) : null;
	?>
</p>
	 <footer>
                <p>Posted by James on <time><?php echo (!empty($post)) ? date('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t G:ia', strtotime(date('m/D/Y') )) : null;
	?>  </time>



<?php if( @$_SESSION['isAuth2']==1) : ?>

<a href="admin.php?p=edit&pid=<?php echo $post->getId(); ?>">E</a>



    <a onclick="return postToFeed('<?php echo  $post->getAttribute('post_title'); ?>','Lorem ipsum dolor sit amet.<?php //echo $post->getAttribute('post_content'); ?>');">Post to Feed</a> </p>

<div id='fb-root'></div>
   <p id='msg'></p>





<?php endif; ?>




	</p>
               
                <p>


 <strong>Tags: 





<?php
echo $post->getTagString() 

?>

</strong>


                </p>
            </footer>
        </article>
    </div>
</article>
	  






						
							




















<form id="commentForm">
<!--<div style="width:488px; margin-top:10px;
padding:5px 7px 5px 5px; 
border:0px solid #808080;
"> -->
<table style="table-layout:fixed;border:0; width:100%"><tr><td>
<label for="commenttext" style="margin-bottom:20px;text-rendering: optimizelegibility; 
background:transparent;"></label>
<textarea type="text" name="commenttext" id="commenttext" rows="4" cols="50" autofocus="true" placeholder="Add a comment"></textarea>
</td>

<td style="padding:40px;">
	
                        <label>Please answer the captcha to prevent spam.</label><br />

           <label style="font-weight:normal;">



What is the name of the massive star at the center of the <?php 

echo link_to('Solar System', 'http://http://en.wikipedia.org/wiki/Solar_System'); ?> ?<br /> 
(<i>hint: begins with a S </i>)</label>


			<br />

			<table style="width:100%; table-layout:fixed; border:0"><tr><td> 



			<label>Your answer: </label></td><td>

			<input type="text" style="width:70px;" maxlength="5" id="textcaptcha_ans" name="textcaptcha_ans">
</input>

</td></tr>

</table>
		</td></tr></table>

		<input type="hidden" name="pid" id="pid" value="<?php echo $post->getId(); ?>"></input>






<br />

		<div style="text-align:left;padding:5px;">
			<a class="bigbtn" id="submitBtn">Submit</button></a> 
			<a class="bigbtn" href="" onClick="return function(){
jQuery('textarea').val('');
}">Reset</a>
		</div>		

	</form>

<br /><br />

	<strong>Previous comments</strong>
	<div id="comments"></div>


















