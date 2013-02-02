<div>



<?php 

$post = WpTerm::retrieveByPK($_GET['catid']);



?>

<form action="admin.php?p=editthecat" method="POST">


<label>cat name</label>
<input type="text" name="name" value="<?php echo $post->getAttribute('name'); ?>"></input>



<?php if(0): ?>

<select name="post_status">
<option value="publish" <?php echo( @$post->getAttribute('post_status') == 'publish' ) ? 'selected="selected"' : null; ?>">Published</option>
<option value="draft" <?php echo( @$post->getAttribute('post_status') == 'draft' ) ? 'selected="selected"' : null; ?>">Draft</option>
</select>

<br />

<?php endif; ?>
<input type="hidden" value="<?php echo $_GET['catid']; ?>" name="catid"/>
<input type="submit" class="btn" value="Edit cat"></input>

</form>



</div>


