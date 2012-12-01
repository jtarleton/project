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


	public function render($template, $templateOnly=false)
	{
	
		//session_start(); 
		
		if (!$templateOnly)
		{
			eval('?>' . file_get_contents(HEAD) ); 
			//echo '<!-- End Head -->';
		}	
	
		eval('?>'.$template); 
	
		if (!$templateOnly)
		{
			//echo '<!-- Begin Foot -->';
			eval('?>'.file_get_contents('/var/project/app1/views/layout/_side.php')); 
			eval('?>'.file_get_contents(FOOT)); 
		}
	
	}
}
