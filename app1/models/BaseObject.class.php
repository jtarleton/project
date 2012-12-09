<?php
/* */

class BaseObject extends AbstractBaseObject
{
	

	public function __construct()
	{
		parent::__construct();

		$this->db = MongoFactory::MongoCreate();
	}
}
