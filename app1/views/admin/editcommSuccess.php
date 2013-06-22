<div>



<?php 

$c = WpComment::retrieveByPK($_GET['commid']);



?>

<form action="admin.php?p=editthecomm" method="POST">




<label>Comment</label> <br />



<textarea rows="35" name="commenttext" cols="60"><?php echo trim(htmlentities($c->getAttribute('comment_text'))) ; ?></textarea>



<?php /* 
<select name="post_status">
<option value="publish" <?php echo( @$post->getAttribute('post_status') == 'publish' ) ? 'selected="selected"' : null; ?>">Published</option>
<option value="draft" <?php echo( @$post->getAttribute('post_status') == 'draft' ) ? 'selected="selected"' : null; ?>">Draft</option>
</select>

<br />

*/

?>
<input type="hidden" value="<?php echo $_GET['commid']; ?>" name="commid"/>
<input type="submit" class="btn" value="Edit Comment"></input>

</form>



</div>


