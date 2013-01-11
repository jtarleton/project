<div style="height:auto; overflow:hidden;">
<?php  global $comments; 
$rowCt=0;

foreach($comments as $comment): 

++$rowCt;

$rowColor=($rowCt%2 > 0) ?'ghostwhite' :'#E5E5E5';

$dt=null; //$comment->getcomment_date();

//print_r(date_parse($dt));

$dt=date("D Y M j G:i:s T"); 

?>
<div style="width:100%; height:39px;overflow:hidden;background:<?php echo $rowColor; ?>">

<!-- 
<h3 id="topicTitleOfResponse" style="margin:0;padding:0;" class="header">Title</h3> -->





<img style="float:left;margin-right:10px;" alt="CurrentUserImage" src="http://img.zohostatic.com/discussions/v1/images/defaultPhoto.png" height="39px;" width="39px;"/>



<?php
echo $rowCt.'. '; 

echo "Submitted $dt by " . link_to('anon', 'http://#', array('class'=>'and','id'=>'currentLoggedUser'));  
			
			?>
			
			<br />
			
			<?php echo $comment->data['comment_text']; //echo $comment->getcomment_content().'<br />'; ?>
			
	<br />
	
	</div>
	
	<?php endforeach;  ?>
	
</div>
