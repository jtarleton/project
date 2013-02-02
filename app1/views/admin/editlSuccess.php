<div>



<?php 

$post = WpLink::retrieveByPK($_GET['linkid']);



?>

<form action="admin.php?p=editli" method="POST">


<label>Link Text</label>
<input type="text" name="post_title" value="<?php //echo $post->getAttribute('text'); ?>"></input>



<label>Link URL</label>



<textarea rows="35" name="post_content" cols="60"><?php echo trim(htmlentities($post->getAttribute('url'))) ; ?></textarea>

<?php if(0): ?>
<select name="post_status">
<option value="publish" <?php echo( @$post->getAttribute('post_status') == 'publish' ) ? 'selected="selected"' : null; ?>">Published</option>
<option value="draft" <?php echo( @$post->getAttribute('post_status') == 'draft' ) ? 'selected="selected"' : null; ?>">Draft</option>
</select>

<br />
<?php endif;  ?>

<input type="hidden" value="<?php echo $_GET['linkid']; ?>" name="linkid"/>
<input type="submit" class="btn" value="Edit Link"></input>

</form>



</div>


