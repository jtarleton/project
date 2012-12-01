<?php 
/**
* Classloader
*/

// session_start();
date_default_timezone_set('America/New_York');

define('DOCROOT', '/var/project/');

//CONFIG
foreach (glob(DOCROOT.'config/*.php') as $filename)
{
    require_once($filename);
}

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


//MODEL
foreach (glob(DOCROOT.'app1/models/*.php') as $filename)
{
    require_once($filename);
}

require_once(DOCROOT.'app1/views/layout/layout.class.php');
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











