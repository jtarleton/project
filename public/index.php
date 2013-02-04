<?php
/**
 * This is a DocBlock comment
 */
session_start(); 
//Load classes
require_once('/var/project/bootstrap/classloader.php'); 

//request param
$p = (empty($_GET['p'])) ? 'index' :strip_tags($_GET['p']);

//some pages should not use shared layout
$layoutOnly = ($p=='commentpost' || $p=='dailymilejson') ? true : false;

//action 
Layout::getInstance()->render(ActionController::getInstance($p)->execute(), $layoutOnly); 

exit(0);
