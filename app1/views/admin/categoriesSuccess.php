<div>
<?php

echo paginated_links( count(WpTerm::retrieveAll('category')), 10 , @$_GET['s'], 'admin');

?>

<table style="table-layout:fixed; width:100%;">

<?php 


foreach( WpTerm::retrieveAll( 'category',@$_GET['s'], 5)  as $tag) :

?>

<tr>
<td>
<?php echo $tag->getAttribute('name') ;
?>
</td>

<td>
<?php 


echo link_to( $tag->getAttribute('name') , 'http://www.crystalbit.com/admin.php?p=editcat&catid='. $tag->getId() ); 
?></td><td><?php 
echo link_to( '<button class="btn" onClick="return confirm(\'Really?\');">Delete</button>',  'admin.php?p=delcat&catid='. $tag->getId()  );

?>
</td></tr>

<?php endforeach; ?>

</table>

</div>
