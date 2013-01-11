<div> Links







<?php

echo paginated_links( WpLink::retrieveAll()->count(), 10 , @$_GET['s'], 'admin');

?>









<table style="table-layout:fixed; width:100%;">

<?php 

foreach( WpLink::retrieveAll( @$_GET['s'], 5)  as $post) :

?>









<tr>
<td>
<?php echo $post['_id'] ;
?>
</td>

<td>
<?php


echo link_to( $post['_id'] , 'http://www.crystalbit.com/admin.php?p=edit&pid='. $post['_id'] );
?></td><td><?php
echo link_to( '<button class="btn" onClick="return confirm(\'Really?\');">Delete</button>',  'admin.php?p=delp&pid='. $post['_id']  );

?>
</td></tr>







<?php endforeach; ?>

</table>






</div>


