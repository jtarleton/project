<div> Comments
<?php

echo paginated_links( count(WpComment::retrieveAll()), 10 , @$_GET['s'], 'admin');

?>

<table style="table-layout:fixed; width:100%;">

<?php 

foreach( WpComment::retrieveAll(0, 99999) as $comment): 
//@$_GET['s'], 5)  as $comment) :

?>

<tr>
<td>
<?php echo $comment->getId() ;
?>
</td>

<td>
<?php 


echo link_to( $comment->getAttribute('comment_text') , 'http://www.crystalbit.com/admin.php?p=editcomm&commid='. $comment->getId() ); 
?></td><td><?php 
echo link_to( '<button class="btn" onClick="return confirm(\'Really?\');">Delete</button>',  'admin.php?p=delcomm&commid='. $comment->getId()  );

?>
</td></tr>

<?php endforeach; ?>

</table>

</div>
