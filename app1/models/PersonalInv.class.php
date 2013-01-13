<?php 
class PersonalInv extends BaseObject
{





static public function retrieveByPK($id)
{

	$obj = new self($id);	
//	return new self($id);
	


}









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
                //$doc = self::retrieveByPK($id);




		$doc = $this->db->test->personal_inv->findOne( array('_id'=>new MongoId($id) ) );
	        //$obj = new self($doc->{$id});
        	//return $obj;


		foreach($doc as $k=>$v) 
		{
			if($k!='_id')
			$this->setAttribute($k,$v);
		}
                $this->data['_id'] = $doc['_id']; //->{$id};

		
        }

        static public function getAutoInc()
        {

                $obj = MongoFactory::MongoCreate();
                $docs = $obj->test->personal_inv->find();
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

                $ret =$this->db->test->personal_inv->remove(array('_id' => $this->getId()), array('safe'=>true, "justOne" => true));
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
                return $this->data['_id'];

        }
        public function getAttributes(){
                return $this->data;
        }
        public function save($id)
        {
                $doc = array();
                foreach($this->getAttributes() as  $k=>$v){
                        $doc[$k] = $v;
                }
                $this->db->test->personal_inv->update(array('_id'=>new MongoId($this->getId())), $doc);

        }















	public function setAttribute($k, $v)
	{
		$this->data[$k] = $v;
	}





		 public function setAttributes($data)
        {
                foreach( $data as $k=>$v) $this->data[$k] = $v;
        }


        static public function getInstance($id = null) {

                return new self($id);
        }








		static public function retrieveAll($s = 0, $limit=2)
        {



               $offset = (!empty ( $s ) )  ?  ($s - 1 )* $limit  : 0;

                $self = self::getInstance();
                //$posts = ($s) ? 

                $posts =        $self->db->test->personal_inv->find()->sort(array('description'=>1))->skip( $offset )->limit( $limit );
                         //$self->db->test->wp_post->find();


		
                return $posts;









        }






 
}
