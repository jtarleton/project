

<div style="padding:20px;">



<?php 

$post = WpPost::retrieveByPK($_GET['pid']);



?>

<form action="admin.php?p=editp" method="POST">
<p><br />
<label>In Categories<br />
<select   name="cats[]" multiple="multiple">


<?php
 foreach( WpTerm::retrieveAll('category')  as $cat) : ?>
<option <?php if(in_array( $cat->getId() , $post->getCatIDArray() ) ): ?>
selected="selected" <?php endif; ?>value="<?php echo $cat->getId(); ?>"><?php echo $cat->getAttribute('name'); ?></option>
<?php endforeach; ?>
</select>
</p>
<br />
<p> 
<label>Tagged Under<br />
<select  name="tags[]" multiple="multiple">
<?php 
 foreach( WpTerm::retrieveAll('tag')  as $tag) : ?>
<option <?php if(in_array( $tag->getId() , $post->getTagIDArray() ) ): ?>
selected="selected" <?php endif; ?>value="<?php echo $tag->getId(); ?>"><?php echo $tag->getAttribute('name'); ?></option>
<?php endforeach; ?>

</select>
</label>

</p>

<br />
<label>Post Title
<input type="text" name="post_title" value="<?php echo $post->getAttribute('post_title'); ?>"></input>

 </label>
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
<input type="submit" class="bigbtn" value="Edit Post"></input>
</p>
</form>



</div>




