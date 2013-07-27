<?php 
/**
 * This is a DocBlock comment
 */
class ActionController2
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
			self::$instance= new self($p);
		}
		
		return self::$instance;
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
		
	
	
		if(file_exists(DOCROOT."/app1/views/admin/{$this->getP()}Success.php")) 
		{ 
			return file_get_contents(DOCROOT."/app1/views/admin/{$this->getP()}Success.php"); 
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




	public function executeCreatep( )
	{
		$clean = array();
		foreach($_POST as $k=>$v) $clean[$k] = $v;

		$p = WpPost::createNew($clean);
		if($p) header('Location: http://www.crystalbit.com/admin.php?p=edit&pid=' .$p->getId() );

	
	}

	public function executeEditp( )
	{	

		$post = $_POST;
	













		foreach($post as $k=>$v )
		$$k=$v;

		$mongo=MongoFactory::MongoCreate();
		$updates = array(
			'post_title'=>$post_title,
			'post_content'=>$post_content,
			'post_status'=>$post_status,
			'post_slug'=>str_replace(' ','-',$post_title)
		);
		
		$rels = WpTermRelationship::getAllByObjectId($pid);
		
		foreach($rels as $rel)
		{
			WpTermRelationship::deleteByPK($rel['_id']);
		
		}
		/* 
		foreach($tags as $term_id)
		{
			//get term tax id for termid
			$term_taxonomy_id = null;
		
			$doc = array(
				'object_id'=>$pid,
				//'term_id'=>$term_id,
				'term_taxonomy_id'=>null, //getTaxFromTermId$term_id
			);
			$mongo->test->wp_term_relationship->insert($doc);
		}
	*/
	
	
		foreach($tags as $term_id)
		{
				
				$tts=WpTermTaxonomy::retrieveByTermId($term_id);
				
				foreach($tts as $tt) 
				{
				
				$doc = array(
				'object_id'=>(int)$pid,
				'term_taxonomy_id'=>$tt->getId()->{'$id'}//getTaxFromTermId$term_id
				);
				$mongo->test->wp_term_relationship->insert($doc);
			}
		}
	
	
	
		foreach($cats as $term_id)
		{
				
				$tts=WpTermTaxonomy::retrieveByTermId($term_id);
				
				foreach($tts as $tt) 
				{
				
				$doc = array(
				'object_id'=>(int)$pid,
				'term_taxonomy_id'=>$tt->getId()->{'$id'} //getTaxFromTermId$term_id
				);
				$mongo->test->wp_term_relationship->insert($doc);
			}
		}
	
	
	
	
	/* 
		foreach($tags as $term_id)
		{
			//get term tax id for termid
			$term_taxonomy_id = null;
		
			$doc = array(
				'object_id'=>$pid,
				//'term_id'=>$term_id,
				'term_taxonomy_id'=>null, //getTaxFromTermId$term_id
			);
			$mongo->test->wp_term_->insert($doc);
		} */
	
	
		$retval=$mongo->test->wp_post->update(array('_id'=>(int)$pid), array('$set'=>$updates));
		
	
		
		if($retval['ok'])
		{
			if($post_status=='publish')
				header(sprintf('Location: http://www.crystalbit.com/index.php?p=%s&pid=%s','postdetail', $pid));
			else
				header(sprintf('Location: http://www.crystalbit.com/admin.php?p=%s','index')); //&pid=%s',$pid))
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









	

}
