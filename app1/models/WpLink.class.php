<?php 

class WpLink extends BaseObject
{


	public $data;

	public function __construct($id= null)
	{

		parent::__construct();

		if(isset($id))
		{
		
			$this->load($id);
		}

	}


	public function load($id)
	{





		     $db = $this->db;

                $doc= ( isset( $id) ) ? $db->test->wp_link->findOne(array('_id'=>new MongoId($id) ) ) : null;


                if(!isset( $doc ) ) throw new Exception('Link not found for id '. $id);






		

		$this->data['_id'] = $doc['_id'];
		$this->data['text'] = $doc['text'];
		$this->data['url'] = $doc['url'];

	}

	static public function getAutoInc() 
	{
	
		$obj = MongoFactory::MongoCreate();
		$docs = $obj->test->wp_link->find();
		$ids = array();
		foreach($docs as $doc){
			$ids[] = (int)$doc['_id'];
		}
		$inc = max($ids) + 1;
		return $inc;
	}

	static public function deleteByPK($id) 
	{
		$obj = new self($id);
		$n = $obj->delete();
		if($n > 0) {
			return $n;
		} else {
			throw new Exception('Error deleting record by id '. $id );
		}
	}

	public function delete() 
	{
		
		$ret =$this->db->test->wp_link->remove(array('_id' => $this->getId()), array('safe'=>true, "justOne" => true));
		return $ret['n'];

	}

	static public function createNew($postdata)
	{

		$obj = new self;
		//$id = self::getAutoInc();
		
		//$postdata['_id'] = (int) $id;



		$obj->setAttributes($postdata);
		$obj->save();
		return $obj;
		
	}

	public function getId() 
	{
		$attrs = $this->getAttributes();
		$id = $attrs['_id'];
		return $id;
	
	}

	public function getAttribute($attr){

		return $this->data[$attr];
	}

	public function getAttributes(){
		return $this->data;
	}
	public function save()
	{
		$doc = array();
		foreach($this->getAttributes() as  $k=>$v){
			$doc[$k] = $v;
		}
		$this->db->test->wp_link->insert($doc);
	
	}

	public function setAttributes($data) 
	{
		foreach( $data as $k=>$v) $this->data[$k] = $v;
	}


	static public function getInstance() {

		return new self;
	}

	public function test()
	{

		echo get_class( $this->db);
	}




	static public function retrieveByPK( $pid) 
	{
		return new self($pid);
	}



	static public function retrieveAll($s = 0, $limit=2, $loggedin= false)
	{



               $offset = (!empty ( $s ) )  ?  ($s - 1 )* $limit  : 0;

                $self = self::getInstance();
                //$posts = ($s) ? 


		$crit = ($loggedin) ? array() : array('public'=>true);
                $posts =        $self->db->test->wp_link->find($crit)->sort(array('text'=>1))->skip( $offset )->limit( $limit );
                         //$self->db->test->wp_link->find();

		$objs = array();
		foreach($posts as $post)
		{
			$id = $post['_id'];
			$id =  $id->{'$id'};
			$cat = @$post['cat'];
			$objs[$cat][ $id ] = new self($id);
		}

                return $objs;









	}


	static public function retrieveLive( $s = 0, $limit = 2)
	{

		 
		

		$offset = (!empty ( $s ) )  ?  ($s - 1 )* $limit  : 0;

		$self = self::getInstance();
		//$posts = ($s) ? 

		$posts =	$self->db->test->wp_link->find(array('post_status'=>'publish'))->sort(array('_id'=>-1))->skip( $offset )->limit( $limit );
			 //$self->db->test->wp_link->find();
		
		return $posts;

		foreach($posts as $post)
		{

		}
	}


}
