<?php 
/**
* Classloader
*/



//CONFIG
foreach (glob(DOCROOT.'config/*.php') as $filename)
{
    require_once($filename);
}


//require_once DOCROOT . 'app1/models/MongoFactory.class.php';



//OUTLET DB
foreach (glob(DOCROOT.'outlet/*.php') as $filename)
{
    require_once($filename);
}

//LIB
foreach (glob(DOCROOT.'lib/*.php') as $filename)
{
    require_once($filename);
}

$jpgraph = array(); //LIB
foreach (glob(DOCROOT.'lib/jpgraph/src/*.php') as $filename)
{
    $jpgraph[] = $filename;
}

sort($jpgraph);

foreach ($jpgraph as $filename)
{
    //require_once($filename);
}




//MODEL
foreach (glob(DOCROOT.'app1/models/*.php') as $filename)
{
    require_once($filename);
}

require_once(DOCROOT.'app1/views/layout/layout.class.php');
require_once(DOCROOT.'app1/views/layout2/layout2.class.php');
//VIEW
//foreach (glob(DOCROOT.'app1/views/layout/*.php') as $filename)
//{

    //require_once($filename);
//}

foreach (glob(DOCROOT.'app1/views/*.php') as $filename)
{
 //   require_once($filename);
}


//CONTROLLER
foreach (glob(DOCROOT.'app1/controllers/*.php') as $filename)
{
    require_once($filename);
}











