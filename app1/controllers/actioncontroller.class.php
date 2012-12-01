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
		Layout::getInstance()->rndr('yo'); //file_get_contents( sprintf('/var/project/app1/views/%sSuccess.php', $p)) );
	}

	

}
