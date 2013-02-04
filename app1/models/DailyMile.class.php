<?php 

class DailyMile extends BaseObject
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
                $doc= ( isset( $id) ) ? $db->test->dailymileentry->findOne(array('_id'=>new MongoId($id) ) ) : null;
                if(!isset( $doc ) ) throw new Exception('dm entry not found for id '. $id);
		$this->data['_id'] = @$doc['_id']->{'$id'};
		$this->data['date'] = date('Y-m-d',@$doc['date']->sec);
$this->data['activity_type'] = @$doc['activity_type'];
$this->data['distance'] = @$doc['distance'];
$this->data['time'] = @$doc['time'];
		$this->data['felt'] = @$doc['felt'];







	}

	static public function getAutoInc() 
	{
	
		$obj = MongoFactory::MongoCreate();
		$docs = $obj->test->dailymileentry->find();
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
		
		$ret =$this->db->test->dailymileentry->remove(array('_id' => $this->getId()), array('safe'=>true, "justOne" => true));
		return $ret['n'];

	}

	static public function createNew($postdata)
	{

		$obj = new self;
		$id = self::getAutoInc();
		
		$postdata['_id'] = (int) $id;



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

	public function getAttribute($prop)
	{

		return $this->data[$prop];
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
		$this->db->test->dailymileentry->insert($doc);
	
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




	static public function retrieveByPid( $pid)
        {
	

		
		 $self = self::getInstance();
                $docs = ( isset( $pid) ) ? $self->db->test->dailymileentry->find(array('pid'=>(int)$pid ) ) : array();

		$comments = array();
		foreach($docs as $doc)
		{
			$comments[ $doc['_id'] ] = new self($doc['_id']);
		}

		try 
		{
                
			if(!isset( $pid ) ) throw new Exception('PID missing');
		}
		catch (Exception $e) 
		{
			echo $e->getMessage();
			return array();
		}

                return (array) $comments;







	}



	  static public function retrieveByPK( $id)
        {


                return new self($id);


        }



	static public function retrieveAll($s = 0, $limit=10)
	{



               $offset = (!empty ( $s ) )  ?  ($s - 1 )* $limit  : 0;

                $self = self::getInstance();
                //$posts = ($s) ? 

                $comms =        $self->db->test->dailymileentry->find()->sort(array('_id'=>-1))->skip( $offset )->limit( $limit );
                         //$self->db->test->wp_comment->find();


		$objs=array();
		foreach($comms as $com) 
		{
		$id = $com['_id']->{'$id'};
		$objs[$id ] = new self($id );
		}
                return $objs;









	}


	static public function retrieveLive( $s = 0, $limit = 2)
	{

		 
		

		$offset = (!empty ( $s ) )  ?  ($s - 1 )* $limit  : 0;

		$self = self::getInstance();
		//$posts = ($s) ? 

		$posts =	$self->db->test->dailymileentry->find(array('entry_status'=>'publish'))->sort(array('_id'=>-1))->skip( $offset )->limit( $limit );
			 //$self->db->test->wp_comment->find();
		
		return $posts;

		foreach($posts as $post)
		{

		}
	}


}
