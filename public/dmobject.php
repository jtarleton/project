<?php 
require_once '/var/project/app1/models/MongoFactory.class.php';
$db = MongoFactory::MongoCreate();

echo get_class($db);

/* 
$doc=$db->dailymile->entries->findOne(array('_id'=>new MongoId('51bba92800ab688b23d25fb6'))); ?><!DOCTYPE html><head><style type="text/css">table { border:1px solid blue; } td { background-color:yellow}}</style></head>
<body><table><?php foreach($doc['entries'] as $e) echo sprintf('<tr><td>%s</td><td>%s</td></tr>', date('m/d/Y G:i:s', strtotime(@$e['at']) ), @$e['workout']['distance']['value']) .'</td></tr>'; */
?></table></body></html>
