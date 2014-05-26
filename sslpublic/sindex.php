<html>
<head>
<title>Crystal Bit</title>
</head>
<body>
<div>
<h1>crystalbit.com</h1> 
<p>Coming June 29, 2014...</p>
</div>
</body>
</html>
<?php exit;
/**
* Front controller
*/

session_start();

//Set date and time
date_default_timezone_set('America/New_York');

//Config
require_once '../config/privateconfig.inc.php';

//Load classes
require_once('../bootstrap/classloader.php'); 

//request param
$p = (empty($_GET['p'])) 
	? 'index' 
	: strip_tags($_GET['p']);

//some pages should not use shared layout
$layoutOnly = ($p=='commentpost') 
	? true 
	: false;

//action 
Layout::getInstance()->render(ActionController::getInstance($p)->execute(), $layoutOnly); 

exit(0);
