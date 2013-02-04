<?php 
/**
 * This is a DocBlock comment
 */
class ActionController
{
	static private $instance; 
	private $p, $outlet;

	public function __construct($p)
	{
		//session_start();
		//test ORM initialization and db connectivity		
		global $colors;
		global $posts;
		global $me; 
		global $session; 
		global $loginUrl;  	
		global $logoutUrl; 
		global $uid;
		global $menu;
		global $status_text;
		global $content;
		global $connection;
		global $json;
		$this->initOutlet(); 
		$this->setP($p); 
	}


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

	static private function passAuth($email, $pass)
	{
		if(!defined('PVTCONFIG_SU') || !defined('PVTCONFIG_SUPASS') ) die('Constant missing.');
		if($email== PVTCONFIG_SU && $pass==PVTCONFIG_SUPASS)
		{
			$_SESSION['isAuth2'] = true;
			return true;
		}
		
		return false;
	}

	private function executeCommentpost()
	{
	
		if(isset($_GET['pid']))
			$pid = intval($_GET['pid']);

		global $comments; 

		if(isset($_POST)) 

		{

		if(@$_POST['textcaptcha_ans'] == 'REP') 
		{

			$data = $_POST;

			$data['pid'] = intval(@$_POST['pid']);

	
			$data['ip'] = $_SERVER['REMOTE_ADDR'];
			$data['ts'] = time();
			

			WpComment::createNew(@$data);
			//die('INSERT COMMENT!');

			$pid = $_POST['pid'];
		} 

		}

		$comments = WpComment::retrieveByPid(@$pid);
	}
	
	private function executeLogout()
	{ 
		$_SESSION['isAuth2'] = false; 
		header('Location: http://www.crystalbit.com/');
		exit(0);
	}
	private function executeAuthcallback()
	{

		$clean = array();
		foreach($_POST as $k=>$v)
		{
			$clean[$k] = strip_tags($v);
		}
		$_SESSION['isAuth2'] = false; 
		$_SESSION['fdsdsfds'] = 'asddadsa';
		$_SESSION['username'] = $clean['username'];

		if(self::passAuth($clean['username'], $clean['pass']))
		{
			 
			$_SESSION['isAuth2'] = true; 
			$_SESSION['fdsdsfds'] = 'asddadsa'; 

			session_write_close(); 

			header('Location: http://www.crystalbit.com'); 
			exit(0);
			
		}
		else
		{
			//unset($_SESSION['isAuth']); 
			//$_SESSION = array();
			header('Location: http://www.crystalbit.com/index.php?p=login'); exit(0);
		}
		
	}


	public function executeDailymilejson()
	{


		//$objs = DailyMile::getAll()


		$output = array();
		$cols = array('_id'=>'_id','date'=>'date',
'activity_type'=>'activity_type',
'distance'=>'distance',
'time'=>'time',
'felt'=>'felt'
);

		$i= 0; 
		foreach(DailyMile::retrieveAll(0, 999999) as $row)
		{
			foreach($cols as $col=>$attr)
			{
				if($attr == 'distance')
				 $val =  round( ( (int)$row->getAttribute('distance')  * 0.000621371192) , 2) ;  
				else 
				$val  = $row->getAttribute($attr);

				 $output['aaData'][$i][$col] = $val; //row->getAttribute($attr); 
			}
		$i++;
		}
		header('Content-Type: application/json');
		//header('Content-Type: text/plain');
		echo trim(json_encode($output));
		exit(0);
	}


}
