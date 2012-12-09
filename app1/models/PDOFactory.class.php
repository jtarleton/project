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


class PDOFactory
{

    private static  $pdo_objects	= array();
    private static  $conns = array();

    private function __construct()          // No instantiation of this factory
    {}

    public static function PDOCreate( $uri, $cache = true )
    {

        if( $cache )
        {
            if( isset(self::$pdo_objects[$uri]) )
            {
                self::$pdo_objects[$uri]['count']++;
                return self::$pdo_objects[$uri]['dbh'];
            }

            self::$pdo_objects[$uri]['count'] = 1;
        }

        $args = parse_url($uri);

        $dbtype 	= $args['scheme'];
        $server 	= $args['host'];
	$port		= isset( $args['port']) ? $args['port']:'';
        $user     	= $args['user'];
        $pass     	= $args['pass'];
        $database 	= $args['path'];

        while( $database[0] == '/' )
            $database = substr($database,1);


        $db = null;

        /*
        * Here we will format the DSN string to match
        * how the PDO driver expects the data
        */

        $dsn = '';

        switch( strtolower($dbtype) )
        {
            case 'mysql':

            	$dsn = 'mysql:host='.$server;

            	if( ! empty($port) )
            		$dsn .= ';port='.$port;

            	if( ! empty($database) )
            		$dsn .= ';dbname='.$database;

            	$dsn .= ';charset=utf8';

                break;

			case 'odbc':
				// Server is the DSN for ODBC
				$dsn = 'odbc:'.$server;
                break;

			case 'pgsql':

            	$dsn = 'pgsql:host='.$server;

            	if( ! empty($port) )
            		$dsn .= ';port='.$port;

            	if( ! empty($database) )
            		$dsn .= ';dbname='.$database;

				break;

			case 'mssql':
			case 'dblib':

            	$dsn = 'dblib:host='.$server;
            	$dsn .= ';charset=utf8';

            	if( ! empty($port) )
            		$dsn .= ';port='.$port;

            	if( ! empty($database) )
            		$dsn .= ';dbname='.$database;

				break;

			default:
				throw new Exception('Unknown database type: '.$uri);
				break;
        }



        //echo "\nCreating PDO with DSN: $dsn \n\n";

       	$db = new PDO( $dsn, $user, $pass );


        if( $cache )
            self::$pdo_objects[$uri]['dbh'] = $db;


  		$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );


  		/*
  		* Execute post-creation SQL
  		*/


  		switch( strtolower($dbtype) )
        {
            case 'mysql':
        		$db->prepare("set names 'UTF8'")->execute();
        		break;
    	}


        return $db;
    }


}
