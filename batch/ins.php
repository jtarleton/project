<?php 
require('/var/project/app1/models/MongoFactory.class.php');
$l = require('/var/project/app1/views/otherplacesSuccessA.php');

$rows = array();


foreach( $l as $cat=>$links): ksort($links); ?>


                <?php  foreach($links as $text=>$uri): 

			
                        $rows[] = array('text'=>$text, 'url'=>$uri, 'cat'=>$cat, 'public'=>false); 

			?>
                <?php endforeach; ?>
        <?php endforeach; 









$m = MongoFactory::MongoCreate();

$coll = $m->test->wp_link;


$coll->batchInsert( $rows, array('safe'=>true) );

/* 
{
    _id: ObjectId("510d2e819c7684b224000000"),
    text: "Weather Channel",
    url: "http://www.weather.com"
} */
