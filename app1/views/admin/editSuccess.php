<div>



<?php 

$post = WpPost::retrieveByPK($_GET['p']);



?>

<form action="admin.php?p=editp&pid="<?php echo intval( $_GET['p']); ?>">


<label>Post Title</label>
<input type="text" value="<?php echo $post['post_title']; ?>"></input>



<label>Post Content</label>






<textarea rows="35" cols="60"><?php echo trim(htmlentities($post['post_content'])) ; ?></textarea>


<br />

<input type="submit" class="btn" value="Edit Post"></input>

</form>



</div>


