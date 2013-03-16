<div> Tags
<?php

echo paginated_links( count(WpTerm::retrieveAll('tag')), 10 , @$_GET['s'], 'admin');

?>

<table style="table-layout:fixed; width:100%;">

<?php 


foreach( WpTerm::retrieveAll( 'tag',@$_GET['s'], 5)  as $tag) :

?>

<tr>
<td>
<?php echo $tag->getAttribute('name') ;
?>
</td>

<td>
<?php 


echo link_to( $tag->getAttribute('name') , BASEHREF.'admin.php?p=edittag&tagid='. $tag->getId() ); 
?></td><td><?php 
echo link_to( '<button class="btn" onClick="return confirm(\'Really?\');">Delete</button>',  'admin.php?p=deltag&tagid='. $tag->getId()  );

?>
</td></tr>

<?php endforeach; ?>

</table>

</div>
