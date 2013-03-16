<div> Links







<?php

echo paginated_links( count(WpLink::retrieveAll()), 10 , @$_GET['s'], 'admin');

?>









<table style="table-layout:fixed; width:100%;">

<?php 

$l = ($_SESSION['isAuth2']) ? true : false;
foreach( WpLink::retrieveAll( @$_GET['s'], 5, $l)  as $link) :

?>









<tr>
<td>
<?php echo $link->getId();
?>
</td>

<td>
<?php


echo link_to( $link->getAttribute('text') , BASEHREF.'admin.php?p=editl&linkid='. $link->getId() );
?></td><td><?php
echo link_to( '<button class="btn" onClick="return confirm(\'Really?\');">Delete</button>',  'admin.php?p=dell&linkid='. $link->getId()  );

?>
</td></tr>







<?php endforeach; ?>

</table>






</div>
