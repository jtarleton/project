<div> Themes

<table style="table-layout:fixed; width:100%;">

<?php 

foreach(array( array('title'=>'Andreas') )as $t) :

?>









<tr>
<td>
<?php echo $t['title'] ;
?>
</td>

<td>
<?php


echo link_to( $t['title'] , 'http://www.crystalbit.com/admin.php?p=edittheme&theme='.$t['title']);
?></td><td><?php
echo link_to( '<button class="btn" onClick="return confirm(\'Really?\');">Delete</button>',  'admin.php?p=deltheme&theme='. $t['title']  );

?>
</td></tr>







<?php endforeach; ?>

</table>






</div>


