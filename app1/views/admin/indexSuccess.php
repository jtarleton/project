<div> Posts







<?php

echo paginated_links( WpPost::retrieveAll()->count(), 10 , @$_GET['s'], 'admin');

?>









<table style="table-layout:fixed; width:100%;">

<?php 

foreach( WpPost::retrieveAll( @$_GET['s'], 5)  as $post) :

?>

<tr>

<td style="background:<?php echo ($post['post_status'] != 'publish') ? 'salmon' : 'lime'; ?>">
<?php echo $post['post_status'] ;
?>
</td>

<td>
<?php 


echo link_to( $post['post_title'] , 'http://www.crystalbit.com/admin.php?p=edit&pid='. $post['_id'] ); 
?></td><td><?php 
echo link_to( '<button class="btn" onClick="return confirm(\'Really?\');">Delete</button>',  'admin.php?p=delp&pid='. $post['_id']  );

?>
</td></tr>

<?php endforeach; ?>

</table>






</div>


