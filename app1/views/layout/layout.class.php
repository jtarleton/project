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
			eval('?>' . file_get_contents(LEFT) ); 
			eval('?>'.file_get_contents(RIGHT));
			//echo '<!-- End Head -->';
		}	
	
		eval('?>'.$template); 
	
		if (!$templateOnly)
		{
			//echo '<!-- Begin Foot -->';
			/* eval('?>'.file_get_contents(RIGHT));
			*/
			eval('?>'.file_get_contents(FOOT)); 
		}
	
	}
}
