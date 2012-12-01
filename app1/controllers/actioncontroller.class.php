<?php 
/**
 * This is a DocBlock comment
 */
class ActionController
{
	static private $instance; private $p, $outlet;







public function __construct($p){
		//session_start();
		//test ORM initialization and db connectivity		
		global $colors;
		global $posts;
		global $facebook; 
		global $me; 
		global $session; 
		global $loginUrl;  	
		global $logoutUrl; 
		global $uid;
		global $menu;
		global $status_text;
		global $content;
		global $connection;
		global $access_token;
		global $json;
		$this->initOutlet(); 
		$this->setP($p); }


















private function initOutlet($createProxies=true){
		//session_start();
		//if(class_exists('Outlet')){		
		//Outlet::init(require(OUTLET_CONFIG_PATH));
		///} else {
			//die('Missing Outlet class');		
		//}
		//$this->outlet=Outlet::getInstance($conf); 
		//if($createProxies){
			//$this->outlet->createProxies();
		//}
	}

private function setP($p){ 
		//session_start();
		$this->p=$p; 
	}
	static public function getInstance($p)
	{
		if (!isset(self::$instance))
		{
			self::$instance= new ActionController($p);
		}
		
		return self::$instance;
	}

	public function dispatch($p) 
	{
		Layout::getInstance()->rndr('yo'); //file_get_contents( sprintf('/var/project/app1/views/%sSuccess.php', $p)) );
	}

private function getP(){ 
		//session_start();
		return $this->p;
	}

	private function preexecute()
	{	
		//session_start();
		$var='execute' . ucfirst($this->getP());
		
		if(method_exists($this, $var))
		{
			//Call the execute method for the page
			call_user_func(array($this, $var)); //exit(0);
		}	
	}

	public function execute()
	{
		//session_start();
		$this->preexecute();
		
		
		if(file_exists(DOCROOT."/app1/views/{$this->getP()}Success.php")) 
		{ 
			return file_get_contents(DOCROOT."/app1/views/{$this->getP()}Success.php"); 
			exit(0);
		} 
		else 
		{ 	
			//not found
			global $p;
			return file_get_contents(DOCROOT."/app1/views/notfoundSuccess.php"); 
			exit(0);
		}
			
		
		
	}
	

}
