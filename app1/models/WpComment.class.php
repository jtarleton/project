<?php 

class WpComment extends BaseObject
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

                $doc= ( isset( $id) ) ? $db->test->wp_comment->findOne(array('_id'=>$id ) ) : null;


                if(!isset( $doc ) ) throw new Exception('Term not found for id '. $id);







	

		$this->data['_id'] = (int)$doc['_id'];
		$this->data['comment_text'] = $doc['commenttext'];

	}

	static public function getAutoInc() 
	{
	
		$obj = MongoFactory::MongoCreate();
		$docs = $obj->test->wp_comment->find();
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
		
		$ret =$this->db->test->wp_comment->remove(array('_id' => $this->getId()), array('safe'=>true, "justOne" => true));
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
		$id = (int)$attrs['_id'];
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
		$this->db->test->wp_comment->insert($doc);
	
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
                $docs = ( isset( $pid) ) ? $self->db->test->wp_comment->find(array('pid'=>(int)$pid ) ) : array();

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



	static public function retrieveAll($s = 0, $limit=2)
	{



               $offset = (!empty ( $s ) )  ?  ($s - 1 )* $limit  : 0;

                $self = self::getInstance();
                //$posts = ($s) ? 

                $posts =        $self->db->test->wp_comment->find()->sort(array('_id'=>-1))->skip( $offset )->limit( $limit );
                         //$self->db->test->wp_comment->find();

                return $posts;









	}


	static public function retrieveLive( $s = 0, $limit = 2)
	{

		 
		

		$offset = (!empty ( $s ) )  ?  ($s - 1 )* $limit  : 0;

		$self = self::getInstance();
		//$posts = ($s) ? 

		$posts =	$self->db->test->wp_comment->find(array('post_status'=>'publish'))->sort(array('_id'=>-1))->skip( $offset )->limit( $limit );
			 //$self->db->test->wp_comment->find();
		
		return $posts;

		foreach($posts as $post)
		{

		}
	}


}
