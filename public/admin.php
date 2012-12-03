<?php
/**
 * This is a DocBlock comment
 */
session_start(); 

if(@$_SESSION['isAuth2']) : 

//Load classes
require_once('/var/project/bootstrap/classloader.php'); 

//request param
$p = (empty($_GET['p'])) ? 'index' :strip_tags($_GET['p']);

//some pages should not use shared layout
$layoutOnly = ($p=='commentpost') ? true : false;

//action 
Layout2::getInstance()->render(ActionController2::getInstance($p)->execute(), $layoutOnly); 

exit(0);

else:

?>
You are not authorized to access this page.
<?php

endif;

