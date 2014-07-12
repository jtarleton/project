<div>Posts
<?php 

$s = isset($_GET['s'] ) ? $_GET['s']  : 1;
echo paginated_links( 12, 2, $s , 'admin');

?>
<table style="table-layout:fixed; width:100%;">



<?php foreach( WpPost::retrieveAll( @$_GET['s'], 5)  as $post) : ?>
<tr>
	<td style="background:<?php echo ($post->getAttribute('post_status') != 'publish') ? 'salmon' : 'lime'; ?>"><?php echo $post->getAttribute('post_status') ; ?></td>
	<td><?php echo link_to( $post->getAttribute('post_title') , SBASEHREF.'admin.php?p=edit&pid='. $post->getId() ); 
?></td>
	<td><?php echo link_to( '<button class="btn" onClick="return confirm(\'Really?\');">Delete</button>',  'admin.php?p=delp&pid='. $post->getId()  ); ?>
	</td>
</tr>
<?php endforeach; ?>

</table>
</div>
