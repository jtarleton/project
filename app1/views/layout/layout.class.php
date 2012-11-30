<?php 
/**
*/

class Layout 
{
	static private $instance;
	
	public function __construct() {
		
	}

	static public function getInstance()
	{
		if (!isset(self::$instance))
		{
			self::$instance= new self;
		}
		
		return self::$instance;
	} 
}