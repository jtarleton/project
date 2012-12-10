<div>



<?php 

$post = WpPost::retrieveByPK($_GET['pid']);



?>

<form action="admin.php?p=editp" method="POST">


<label>Post Title</label>
<input type="text" name="post_title" value="<?php echo $post['post_title']; ?>"></input>



<label>Post Content</label>






<textarea rows="35" name="post_content" cols="60"><?php echo trim(htmlentities($post['post_content'])) ; ?></textarea>


<br />


<input type="hidden" value="<?php echo $_GET['pid']; ?>" name="pid"/>
<input type="submit" class="btn" value="Edit Post"></input>

</form>



</div>


