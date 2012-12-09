<div> POSTS INDEX














<table style="table-layout:fixed; width:100%;">

<?php 

foreach( WpPost::retrieveAll(1)  as $post) :

?>

<tr><td>
<?php 


echo link_to( $post['post_title'] , 'admin.php?p=edit&pid='. $post['_id'] ); 

?>
</td></tr>

<?php endforeach; ?>

</table>






</div>


