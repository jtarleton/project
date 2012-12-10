<?php 

class WpPost extends BaseObject
{

	public function __construct()
	{

		parent::__construct();
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


		$self = self::getInstance();
                $post = ( isset( $pid) ) ? $self->db->test->wp_post->findOne(array('_id'=>(int)$pid) ) : null;
	

		if(!isset( $post ) ) throw new Exception('Post not found'. $pk);

		return (array ) $post;


	}

	static public function retrieveAll( $s = false, $limit = 10)
	{

		 
		

		$offset = ($s - 1 )* $limit;

		$self = self::getInstance();
		//$posts = ($s) ? 

		$posts =	$self->db->test->wp_post->find()->sort(array('_id'=>-1))->skip( $offset )->limit( $limit );
			 //$self->db->test->wp_post->find();
		
		return $posts;

		foreach($posts as $post)
		{


		

		}
		




		 















	}


}
