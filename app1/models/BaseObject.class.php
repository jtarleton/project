<?php
/* */

class BaseObject extends AbstractBaseObject
{

	public $db;	

	public function __construct()
	{
		parent::__construct();

		$this->db = MongoFactory::MongoCreate();
	}









































}
