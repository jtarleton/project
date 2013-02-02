<div> Links







<?php

echo paginated_links( count(WpLink::retrieveAll()), 10 , @$_GET['s'], 'admin');

?>









<table style="table-layout:fixed; width:100%;">

<?php 

foreach( WpLink::retrieveAll( @$_GET['s'], 5)  as $post) :

?>









<tr>
<td>
<?php echo $post->getId();
?>
</td>

<td>
<?php


echo link_to( $post->getAttribute('text') , 'http://www.crystalbit.com/admin.php?p=editl&linkid='. $post->getId() );
?></td><td><?php
echo link_to( '<button class="btn" onClick="return confirm(\'Really?\');">Delete</button>',  'admin.php?p=dell&linkid='. $post->getId()  );

?>
</td></tr>







<?php endforeach; ?>

</table>






</div>


