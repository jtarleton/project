<div>



<?php 

$post = WpTerm::retrieveByPK($_GET['tagid']);



?>

<form action="admin.php?p=editthetag" method="POST">


<label>Tag name</label>
<input type="text" name="name" value="<?php echo $post->getAttribute('name'); ?>"></input>



<?php if(0): ?>

<select name="post_status">
<option value="publish" <?php echo( @$post->getAttribute('post_status') == 'publish' ) ? 'selected="selected"' : null; ?>">Published</option>
<option value="draft" <?php echo( @$post->getAttribute('post_status') == 'draft' ) ? 'selected="selected"' : null; ?>">Draft</option>
</select>

<br />

<?php endif; ?>
<input type="hidden" value="<?php echo $_GET['tagid']; ?>" name="tagid"/>
<input type="submit" class="btn" value="Edit Post"></input>

</form>



</div>


