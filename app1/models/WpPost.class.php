<?php 

class WpPost extends BaseObject
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


	/* public function getId() {

		return $this->data['id'];
	} */

	public function load($id)
	{

		
		return;



                $doc = ( isset( $id) ) ? $this->db->test->wp_post->findOne(array('_id'=>(int)$id ) ) : null;
        

                
		 if(!isset( $doc ) ) return; // new Exception('Post not found for id '. $id);
               





		




		$this->data['_id'] = (int)@$doc['_id'];
		$this->data['post_title'] = @$doc['post_title'];
		$this->data['post_content'] = @$doc['post_content'];
		$this->data['post_slug'] = @$doc['post_slug'];
		$this->data['post_status'] = @$doc['post_status'];


	}

	static public function getAutoInc() 
	{
	
		$obj = MongoFactory::MongoCreate();
		$docs = $obj->test->wp_post->find();
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
		
		$ret =$this->db->test->wp_post->remove(array('_id' => $this->getId()), array('safe'=>true, "justOne" => true));
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

		return @$this->data[$prop];
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
		$this->db->test->wp_post->insert($doc);
	
	}

	public function setAttributes($data) 
	{
		foreach( $data as $k=>$v) $this->data[$k] = $v;
	}





/* 	
	public function getTags()
	{
		$tagObjects = array();
		
		$objs=WpTermRelationship::getAllByObjectId($this->getId());	
		foreach($objs as $obj){
			//if($obj->getAttribute('term_group')=='tag') {
				//$tagObjects[ $obj->getAttribute('term_id') ]  = new WpTerm( $obj->getAttribute('term_id') ); //}
				echo $obj->getAttribute('term_id');
			
		}
	
	//	var_dump(count($tagObjects));
		return $tagObjects;	
	}
*/
	public function getTagString() 
	{
		$tagnames = array();
		//die(var_dump($this->getTags()));
		foreach($this->getTags() as $tagObj){
			$tagnames[] = $tagObj->getAttribute('name');
		}
	
		//die(var_dump($tagnames[0]));
		return implode(',', $tagnames);	
	} 

	static public function getInstance($id) {

		return new self(@$id);
	}

	public function test()
	{

		echo get_class( $this->db);
	}


	public function getTagIdArray(){
	return array_keys($this->getTags());
	}
	public function getCatIdArray(){
	//@todo make only cats
        return array_keys($this->getTags());
        }

	public function getTags()
	{

	
		$rels = WpTermRelationship::getAllByObjectId($this->getId());
	
		WpTermRelationship::getAllByObjectId($this->getId());

		$term_taxonomy_objs = array();
		foreach($rels as $rel) 
		{
			$term_taxonomy_objs[] = new WpTermTaxonomy( $rel->getAttribute('term_taxonomy_id') );
		} 

		$term_ids = array();
		foreach($term_taxonomy_objs as $obj) 
		{
			$term_ids[   ] = $obj->getAttribute('term_id');
		}

		$wpterms = array();
			foreach($term_ids as $tid)
			$wpterms[ $tid->{'$id'}  ] = new WpTerm($tid);

		return $wpterms; //array(new WpTerm('50fc8bbc9c76846836000000'), new WpTerm('50fc8c5e9c76846836000001'), new WpTerm('50fc75349c7684f23c000000'));

	}




	static public function retrievePost($pid) 
	{
		









		$i =  MongoFactory::MongoCreate();
		
		$post = ( isset( $pid) ) 
			? $i->db->test->wp_post->findOne(array('_id'=>(int)$pid, 'post_status'=>'publish' ) ) 
			: null;
			
		if(!isset( $post ) ) return false; //throw new Exception('Post not found for id '. $pid);
        try 
		{ 
			$ret = new self( $post['_id'] ) ;
			return $ret;
		} 
		catch(Exception $e)
		{
			echo 'Not found.';
			return false;
		}
	}


	static public function retrieveByPK( $pid) 
	{
		/* 

		$self = self::getInstance();
                $post = ( isset( $pid) ) ? $self->db->test->wp_post->findOne(array('_id'=>(int)$pid ) ) : null;
	

		if(!isset( $post ) ) throw new Exception('Post not found for id '. $pid);
		*/
		return new self( $pid ) ;


	}



	static public function retrieveAll($s = 0, $limit=2)
	{



               $offset = (!empty ( $s ) )  ?  ($s - 1 )* $limit  : 0;

                $self = MongoFactory::MongoCreate();
                //$posts = ($s) ? 

                $posts =        $self->test->wp_post->find()->sort(array('_id'=>-1))->skip( $offset )->limit( $limit );
                         //$self->db->test->wp_post->find();

		$objs = array();
		foreach($posts as $post)
		{
			$objs[ $post['_id'] ] = new self( $post['_id'] );
		}
                return $objs;









	}


	static public function retrieveLive( $s = 0, $limit = 2)
	{

		 
		

		$offset = (!empty ( $s ) )  ?  ($s - 1 )* $limit  : 0;

		$db = MongoFactory::MongoCreate();
		//$posts = ($s) ? 

		$posts =	$db->test->wp_post->find(array('post_status'=>'publish'))->sort(array('_id'=>-1))->skip( $offset )->limit( $limit );
			 //$self->db->test->wp_post->find();
		


			     $objs = array();
                foreach($posts as $post)
                {

                        $objs[ $post['_id'] ] = new self( $post['_id'] );
                }
                return $objs;




	}


}
