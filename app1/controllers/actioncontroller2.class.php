<?php 
/**
 * This is a DocBlock comment
 */
class ActionController2
{
	static private $instance; private $p, $outlet;







	public function __construct($p){
	
		$this->setP($p);

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

















































	public function executeCreatethelink( )
        {
                $clean = array();
                foreach($_POST as $k=>$v) $clean[$k] = strip_tags($v);
                $p = WpLink::createNew($clean);
                if($p) header('Location: '.BASEHREF.'index.php?p=index'); 
	}
      

 	public function executeEditli( )
        {       $post = $_POST; //TODO .... put in model
                foreach($post as $k=>$v ) $$k=$v;
                $mongo=MongoFactory::MongoCreate();
                $updates = array(
                        'text'=>$text,
                        'url'=>$url,
                );
		$mongo->test->wp_link->update(array('_id'=>new MongoId($linkid) ), array('$set'=>$updates));
		header('Location: '.BASEHREF.'index.php?p=index');
	}



	public function executeCreatet( )
        {
                $clean = array();
                foreach($_POST as $k=>$v) $clean[$k] = strip_tags($v);
                $p = WpTerm::createNewTag($clean);
                if($p) header('Location: '.BASEHREF.'index.php?p=index'); 
	}
        
	public function executeEditthetag( )
        {       $post = $_POST; //TODO .... put in model
                foreach($post as $k=>$v ) $$k=$v;
                $mongo=MongoFactory::MongoCreate();
                $updates = array(
                        'name'=>$name,
			'slug'=>$slug
                );
		$mongo->test->wp_term->update(array('_id'=>new MongoId($tagid) ), array('$set'=>$updates));
		header('Location: '.BASEHREF.'index.php?p=index');
	}


	public function executeCreatec( )
        {
                $clean = array();
                foreach($_POST as $k=>$v) $clean[$k] = strip_tags($v);
                $p = WpTerm::createNewCat($clean);
                if($p) header('Location: '.BASEHREF.'index.php?p=index'); }
        

	public function executeEditthecomm( )
        {       $post = $_POST; //TODO .... put in model
                foreach($post as $k=>$v ) $$k=$v;
                $mongo=MongoFactory::MongoCreate();
                $updates = array(
                        'commenttext'=>$commenttext,
                );
		$mongo->test->wp_comment->update(array('_id'=>(int)$commid), array('$set'=>$updates));

		header('Location: '.BASEHREF.'admin.php?p=comments');}






public function executeEditthecat( )
        {       $post = $_POST; //TODO .... put in model
                foreach($post as $k=>$v ) $$k=$v;
                $mongo=MongoFactory::MongoCreate();
                $updates = array(
                        'name'=>$name,
                );
$mongo->test->wp_term->update(array('_id'=>new MongoId($catid) ), array('$set'=>$updates));header('Location: '.BASEHREF.'index.php?p=index');}













	public function executeCreatep( )
	{
		$clean = array();
		foreach($_POST as $k=>$v) $clean[$k] = strip_tags($v);
		$p = WpPost::createNew($clean);
		if($p) header('Location: '.BASEHREF.'admin.php?p=edit&pid=' .$p->getId() );	}
	public function executeEditp( )
	{	$post = $_POST; //TODO .... put in model
		foreach($post as $k=>$v ) $$k=$v;
		$mongo=MongoFactory::MongoCreate();
		$updates = array(
			'post_title'=>$post_title,
			'post_content'=>$post_content,
			'post_status'=>$post_status
		);
$mongo->test->wp_post->update(array('_id'=>(int)$pid), array('$set'=>$updates));header('Location: '.BASEHREF.'index.php?p=postdetail&pid=' .$pid );}





	public function executeDeltag()
        {
                $tid = $_GET['tagid'];
                $ok = WpTerm::deleteByPK($tid);
                if($ok > 0)
                        header('Location: '.BASEHREF.'admin.php?p=tags'); // admin.php?p=links

        }

	public function executeDelcat()
        {
                $cid = $_GET['catid'];
                $ok = WpTerm::deleteByPK($cid);
                if($ok > 0)
                        header('Location: '.BASEHREF.'admin.php?p=categories'); // admin.php?p=links

        }

	public function executeDell()
        { 
		$id = $_GET['linkid'];
        	$ok = WpLink::deleteByPK($id);
        	if($ok > 0)
                	header('Location: '.BASEHREF.'admin.php?p=links'); // admin.php?p=links
		
	}




	 public function executeDelcomm()
        {
                $id = $_GET['commid'];
                $ok = WpComment::deleteByPK($id);
                if($ok > 0)
                        header('Location: '.BASEHREF.'admin.php?p=comments'); // admin.php?p=links

        }
	
	public function executeDelp() 
	{
	
	$id = $_GET['pid'];
	$ok = WpPost::deleteByPK($id);
	if($ok > 0) 
		header('Location: '.BASEHREF.'admin.php?p=index&s=1');
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
		header('Location: '.BASEHREF.'');
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

			header('Location: '.BASEHREF);
			exit(0);
			
		}
		else
		{
			header('Location: '.BASEHREF.'index.php?p=login'); exit(0);
		}
		
	}









	

}
