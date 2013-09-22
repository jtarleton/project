<!DOCTYPE html>
<body><pre>
<?php 

$cmdStartMongod = ' mongod --logpath --dbpath /data/db --fork ';
$cmdStopMongod = "kill -15 123";

$checkMongod = 'ps -ef | grep "mongod"';


echo shell_exec( $checkMongod ); ?></pre></html>
