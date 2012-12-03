<?php 
/**
*/

class Layout2 
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


	public function render($template, $templateOnly=false)
	{
	
		//session_start(); 
		
		if (!$templateOnly)
		{
			eval('?>' . file_get_contents(dirname(__FILE__).'/head.php') ); 
			//echo '<!-- End Head -->';
		}	
	
		eval('?>'.$template); 
	
		if (!$templateOnly)
		{
			//echo '<!-- Begin Foot -->';
			eval('?>'.file_get_contents( dirname(__FILE__).'/foot.php')); 
		}
	
	}
}
