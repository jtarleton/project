<?php 
/*	Tiny MVC, v.1.0.

	Author: James Tarleton

	System Requirements:
		* PHP 5+
		* Web server (Optional)
		* PDO_MYSQL driver for PHP (Optional) 

	Configuration:
		1. Fill in DB credentials, if applicable
		2. Add some view markup (tpl.html) or use default
*/

/* Config */
class Config
{
	const HOST='localhost',
	      PORT  ='3306',
	      DBUSER='',
	      DBPASS='',
	      DBNAME='',
	      DBENABLED=false;

	
	public $config;
	
	private function __construct()
	{
		$this->config = array('connection' =>array(
				'dsn' => sprintf('mysql:host=%s;port=%s;dbname=%s', self::HOST, self::PORT, self::DBNAME),
				'dialect' => '',
				'username'=> self::DBUSER,
				'password'=> self::DBPASS
			)
		);
	}
	public function getInstance()
	{	
		return new self;
	}
}
/******************************************************************* 
"Model"
*/
class DB
{
	static public function getCon()
	{
		$config = Config::getInstance()->config;
		try 
		{
			if(Config::DBENABLED) 
			{
				$pdo = new PDO(@$config['connection']['dsn'], 
					@$config['connection']['username'], 
					@$config['connection']['password']
				);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				return $pdo; 
			}
		} 
		catch (PDOException $e) 
		{
			printf('PDO ERROR: %s', $e->getMessage());
			exit(0); 
		}
	}

}
class Foo extends DB
{
	public $db;
	public $color;
	
	public function __construct($color='lime')
	{
		$this->db = self::getCon();
		$this->color = $color;
	}
	
	static public function getFoos($color)
	{
		$objs = array();
		for($k=0;$k<20;$k++)
		{
			$objs[] = new self($color); //etc...
		}
		return $objs;
	}
}
/******************************************************************* 
"View"
*/

class Layout
{

	static public function getFormat()
	{
		$f= file_get_contents('tpl.html');
		$f=trim($f);
		return $f;		
	}
}

class Form
{
	static public function rndr($action)
	{
		$form = '<form action="index.php" method="get"><label for="action">Foo</label><select id="food" name="action" onChange="mysubmit(form);">';
		$form .= (empty($action)) ? '<option selected="selected" value =\'\'>Select</option>'
			:'<option value =\'\'>Select</option>';
		foreach(array('lime','salmon') as $val)
		{
			$sel =($val==$action) ?'selected="selected"' : '';
			$form .= sprintf('<option %s value="%s">%s</option>', $sel, $val, $val);
		} 
		$form .= '</select></form>'; 
		return $form;
	} 
}

/*******************************************************************
"Controller" 
*/
//action controller
class Actions
{
	public function getInstance()
	{ 
		return new self; 
	}
	public function dispatchRequest(array $req)
	{
		$action=$req['action'];
		$data=Foo::getFoos($action); //get some foos!
		return self::callLayout($req, $data);		
	}

	//call html w request and presentation array
	static public function callLayout(array $req, array $data)
	{ 
		ob_start();
		echo Form::rndr($req['action']);
		foreach($data as $foo)
			echo sprintf('<div class="%s">%s %s</div>', $foo->color, $foo->color, get_class($foo)); 	  
				
		echo sprintf(Layout::getFormat(), ob_get_clean());
	}
}
//Last but not least, a front controller
switch(PHP_SAPI)
{
	case'cli':
		Actions::getInstance()->dispatchRequest();
		
		exit(0);
	default:
		$_GET['action'] ? Actions::getInstance()->dispatchRequest($_REQUEST) 
			: Actions::getInstance()->dispatchRequest();
		exit(0); 
}
