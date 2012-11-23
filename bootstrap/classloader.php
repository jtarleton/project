<?php 
/**
* Classloader
*/

// session_start();
date_default_timezone_set('America/New_York');

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


//VIEW
foreach (glob(DOCROOT.'app1/layout/*.php') as $filename)
{
    require_once($filename);
}

foreach (glob(DOCROOT.'app1/views/*.php') as $filename)
{
    require_once($filename);
}


//CONTROLLER
foreach (glob(DOCROOT.'app1/controllers/*.php') as $filename)
{
    require_once($filename);
}











