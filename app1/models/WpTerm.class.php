<?php 

class WpTerm extends BaseObject
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

		$doc= ( isset( $id) ) ? $db->test->wp_term->findOne(array('_id'=>new MongoId($id) ) ) : null;


                if(!isset( $doc ) ) throw new Exception('Term not found for id '. $id);





		$this->data['_id'] = $doc['_id'];
		$this->data['name'] = $doc['name'];
		$this->data['slug'] = $doc['slug'];
		$this->data['term_group'] = $doc['term_group'];

	}

	static public function getAutoInc() 
	{
	
		$obj = MongoFactory::MongoCreate();
		$docs = $obj->test->wp_term->find();
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
		
		$ret =$this->db->test->wp_term->remove(array('_id' => $this->getId()), array('safe'=>true, "justOne" => true));
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

	
  static public function createNewTag($postdata)
        {
                $obj = new self;
                //$id = self::getAutoInc();
                //$postdata['_id'] = (int) $id;
		$postdata['term_group'] = 'tag';
                $obj->setAttributes($postdata);
                $obj->save();
                return $obj;
        }


	  static public function createNewCat($postdata)
        {
                $obj = new self;
                $postdata['term_group'] = 'category';
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




	public function getAttribute($prop ) 
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
		$this->db->test->wp_term->insert($doc);
	
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




	static public function retrieveByPK( $id) 
	{


		return new self($id);


	}



	static public function retrieveAll($term_group='tag', $s = 0, $limit=2)
	{



               $offset = (!empty ( $s ) )  ?  ($s - 1 )* $limit  : 0;

                $self = self::getInstance();
                //$posts = ($s) ? 

		
                $docs =        $self->db->test->wp_term->find(array('term_group'=>$term_group))->sort(array('_id'=>-1)); //->skip( $s )->limit( $limit );
                         //$self->db->test->wp_term->find();

		$objs = array();
		foreach($docs as $doc){
			$id = (string)$doc['_id'];
			//die(var_dump($id));
			//$id = $id;
			
			$objs[$id] = new self($id);
		}

                return $objs;









	}


	static public function retrieveLive( $s = 0, $limit = 2)
	{

		 
		

		$offset = (!empty ( $s ) )  ?  ($s - 1 )* $limit  : 0;

		$self = self::getInstance();
		//$posts = ($s) ? 

		$terms =	$self->db->test->wp_term->find(array())->sort(array('_id'=>-1))->skip( $offset )->limit( $limit );
			 //$self->db->test->wp_term->find();
		
		
		$objs = array();
		foreach($terms as $term)
		{
			$objs[ $term['_id'] ] = new self($term['_id']);

		}
	
		return $objs;

	}


}
