
<?php 

class Visitor extends BaseObject 
{


	public function __construct($id = null) 
	{
		parent::__construct();
		$this->data = array(
			'HTTP_USER_AGENT'=>$_SERVER['HTTP_USER_AGENT'],
			'REQUEST_TIME'=>date('m/d/Y H:i:s',$_SERVER['REQUEST_TIME']),
			'REQUEST_TIME_FLOAT'=>$_SERVER['REQUEST_TIME_FLOAT'],
			'HTTP_HOST'=>$_SERVER['HTTP_HOST'],
			'HTTP_REFERER'=>@$_SERVER['HTTP_REFERER'],
			'REQUEST_METHOD'=>$_SERVER['REQUEST_METHOD'],
			'HTTP_HOST'=>$_SERVER['HTTP_HOST'],
			'REMOTE_PORT'=>$_SERVER['REMOTE_PORT'],
			'REMOTE_ADDR'=>$_SERVER['REMOTE_ADDR'],
 			'GEOIP_ADDR' =>apache_getenv ( 'GEOIP_ADDR'),
 			'GEOIP_CONTINENT_CODE'=> apache_getenv ( 'GEOIP_CONTINENT_CODE'),	
 			'GEOIP_COUNTRY_CODE'=>apache_getenv ( 'GEOIP_COUNTRY_CODE'),	
 			'GEOIP_REGION'=>apache_getenv ( 'GEOIP_REGION'),
 			'GEOIP_REGION_NAME'=> apache_getenv ( 'GEOIP_REGION_NAME'), 
 			'GEOIP_CITY'=> apache_getenv ( 'GEOIP_CITY'),
 			'GEOIP_METRO_CODE'=> apache_getenv ( 'GEOIP_METRO_CODE'),
 			'GEOIP_AREA_CODE'=> apache_getenv ( 'GEOIP_AREA_CODE'),	 
 			'GEOIP_LATITUDE'=> apache_getenv ( 'GEOIP_LATITUDE'),
 			'GEOIP_LONGITUDE'=> apache_getenv ( 'GEOIP_LONGITUDE'),	
 			'GEOIP_POSTAL_CODE'=> apache_getenv ( 'GEOIP_POSTAL_CODE')
		); 

	} 

	public function getData(){

		return $this->data;
	}

	public function save() {

		$this->db->test->visitor->insert($this->getData());
	}

	static public function logVisitor(){
		$v = new self;
		$v->save();
	}

}


