<?php

/**
*
*
* Factory to create database connections based on URI
*
* URI:  dbtype://user:password@server/database
*
*
*
*/


class MysqliFactory
{

    private static  $mysqli_objects	= array();
    private static  $conns = array();

    private function __construct()          // No instantiation of this factory
    {}

    public static function MysqliCreate($cache = true )
    {

        if( $cache )
        {
            if( isset(self::$mysqli_objects[0]) )
            {
                self::$mysqli_objects[0]['count']++;
                return self::$mysqli_objects[0]['dbh'];
            }

            self::$mysqli_objects[0]['count'] = 1;
        }

	try { //$mysqli = new mysqli(PVTCONFIG_DBHOST, PVTCONFIG_DBUSER, PVTCONFIG_DBPASS, PVTCONFIG_DBNAME);
//	if ($mysqli->connect_errno) 
//    echo "Failed to connect to MySQL: " . $mysqli->connect_error;

} catch(Exception $e) {}


        if( $cache )
            @self::$mysqli_objects[0]['dbh'] = $mysqli;


        return @$mysqli;
    }



	static public function info() {


		$mysqli = self::MysqliCreate();

		/* check connection */
if (mysqli_connect_errno()) {
//    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$stats = $mysqli->stat();


$statsArray = explode("  ", $stats);
   foreach($statsArray as $stat){ 

if(strpos($stat,'Uptime')!==false) { 
$up = explode(' ',$stat);
echo 'Uptime '.sec2hms($up[1]) .'<br />';
}
else {
echo $stat.'<br />'; 
}




	}
}
}
