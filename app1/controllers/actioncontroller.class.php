<?php 
/**
 * This is a DocBlock comment
 */
class ActionController
{
	static private $instance;

	public function getInstance($p)
	{
		if (!isset(self::$instance))
		{
			self::$instance= new ActionController($p);
		}
		
		return self::$instance;
	}
}
