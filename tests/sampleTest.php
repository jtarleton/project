<?php require('/var/project/tests/lime.php');
$t = new lime_test(2);
$obj = new stdClass;
$t->isa_ok('', 'array','is array' );
$t->isa_ok($obj, 'stdClass','is obj' );
