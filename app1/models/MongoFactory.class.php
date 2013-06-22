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


class MongoFactory
{

    private static  $mongodb_objects	= array();
    private static  $conns = array();

    private function __construct()          // No instantiation of this factory
    {}

    public static function MongoCreate( $uri=false, $cache = true )
    {

        if( $cache )
        {
            if( isset(self::$mongodb_objects[$uri]) )
            {
                self::$mongodb_objects[$uri]['count']++;
                return self::$mongodb_objects[$uri]['dbh'];
            }

            self::$mongodb_objects[$uri]['count'] = 1;
        }

        $args = parse_url($uri);



        $dbtype 	= @$args['scheme'];
        $server 	= @$args['host'];
	$port		= isset( $args['port']) ? @$args['port']:'';
        $user     	= @$args['user'];
        $pass     	= @$args['pass'];
        $database 	= @$args['path'];

        while( @$database[0] == '/' )
            $database = substr($database,1);


        $db = null;

        /*
        * Here we will format the DSN string to match
        * how the Mongo driver expects the data
        */

        $dsn = '';

        switch( strtolower($dbtype) )
        {
            case 'mongodb':

            	$dsn = 'mongodb:host='.$server;

            	if( ! empty($port) )
            		$dsn .= ';port='.$port;

            	if( ! empty($database) )
            		$dsn .= ';dbname='.$database;

            	$dsn .= ';charset=utf8';

		break;
        }



        //echo "\nCreating PDO with DSN: $dsn \n\n";

	try
	{

       		$db = new MongoClient( "mongodb://localhost:27017");
	} 
	catch(MongoConnectionException $e ) 
	{
		echo '<p>Couldn\'t connect to mongodb, is the "mongo" process running?</p>';
    		exit(0);
	}

        if( $cache )
            self::$mongodb_objects[$uri]['dbh'] = $db;

        return $db;
    }


}
