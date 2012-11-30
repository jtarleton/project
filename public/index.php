<?php
/**
 * This is a DocBlock comment
 */
session_start(); 
//Load classes
require_once('/var/project/bootstrap/classloader.php'); 
$p = strip_tags($_GET['p']);

ActionController::getInstance()->dispatch($p);
