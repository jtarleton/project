<?php 
require_once('/var/project/bootstrap/classloader.php');
$mongo = MongoFactory::MongoCreate(MONGO_CONNECTION);
$doc = array('test'=>'foo');
$rows = json_decode(file_get_contents('/var/project/app1/views/dmjson.json'), true);
if(!empty($rows['entries'])) 
{

//print_r($rows['entries']);


foreach($rows['entries'] as $arr) 
{

	if( !(@$arr['workout']['distance']['value'] > 0) ) continue;

	if( strtotime($arr['at']) > strtotime('today midnight')) 
	{	
		$doc = array(
		'date'          => new MongoDate( strtotime(@$arr['at']) ),
		'activity_type' => @$arr['workout']['activity_type'],
		'distance'      => intval(floatval(@$arr['workout']['distance']['value']) * 1609.344),
		'time'          => intval(@$arr['workout']['duration']),
		'felt'          => @$arr['workout']['felt']
		);
		$mongo->test->dailymileentry->insert($doc, array('safe'=>true)); 
	}
}  
}
