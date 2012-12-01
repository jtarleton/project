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


	public function rndr($tpl) 
	{
		
		ob_start();
		?>
		<html>
		<head></head><body> 
		<?php echo $tpl; ?>
		</body>
		</html>
		<?php 	echo ob_get_contents();
	}
}