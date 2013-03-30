<div> Links







<?php

echo paginated_links( count(WpLink::retrieveAll()), 10 , @$_GET['s'], 'admin');

?>








<ul>
<?php 

$l = ($_SESSION['isAuth2']) ? true : false;
foreach( WpLink::retrieveAll( @$_GET['s'], 5, $l)  as $cat=>$rows) :

?>



	 <li><?php echo $cat; ?><ul>
                <?php foreach($rows as $linkObj): ?>

        <li><?php echo link_to($linkObj->getAttribute('text'), $linkObj->getAttribute('url')); ?></li>
<?php endforeach; ?></ul></li>


<li>
<?php echo $linkObj->getId(); ?>
</li>

<li>
<?php  
echo link_to( $linkObj->getAttribute('text') , BASEHREF.'admin.php?p=editl&linkid='. $linkObj->getId() ); ?></li>
<li>
<?php 
echo link_to( '<button class="btn" onClick="return confirm(\'Really?\');">Delete</button>',  'admin.php?p=dell&linkid='. $linkObj->getId()  );
?></li>






<?php endforeach; ?>

</ul>





</div>
