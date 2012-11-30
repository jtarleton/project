<?php 
/**
 * This is a DocBlock comment
 */
class ActionController
{
	static private $instance;

	static public function getInstance()
	{
		if (!isset(self::$instance))
		{
			self::$instance= new ActionController;
		}
		
		return self::$instance;
	}

	public function dispatch($p) 
	{
		///var/project/app1/views/indexSuccess.php
		require( sprintf('/var/project/app1/views/%sSuccess.php', $p));
	}

	

}
