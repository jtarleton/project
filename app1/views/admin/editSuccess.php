

<div>



<?php 

$post = WpPost::retrieveByPK($_GET['pid']);



?>

<form action="admin.php?p=editp" method="POST">
<p>
<label>In Categories:</label>
<textarea>flotsam, jetsam</textarea>
</p>

<p>
<label>Tagged Under:</label>
<textarea>PHP, MongoDB</textarea>
</p>
<label>Post Title</label>
<input type="text" name="post_title" value="<?php echo $post->getAttribute('post_title'); ?>"></input>

 
<p>
<label>Post Content</label>



<textarea rows="35" name="post_content" cols="60"><?php echo trim(htmlentities($post->getAttribute('post_content'))) ; ?></textarea>
</p>


<p>
<select name="post_status">
<option value="publish" <?php echo( @$post->getAttribute('post_status') == 'publish' ) ? 'selected="selected"' : null; ?>">Published</option>
<option value="draft" <?php echo( @$post->getAttribute('post_status') == 'draft' ) ? 'selected="selected"' : null; ?>">Draft</option>
</select>
</p>
<br />

<p>
<input type="hidden" value="<?php echo $_GET['pid']; ?>" name="pid"/>
<input type="submit" class="btn" value="Edit Post"></input>
</p>
</form>



</div>




