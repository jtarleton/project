<?php 

date_default_timezone_set('America/New_York');
$str = sprintf( '<p><small>cronwashere@%s</small></p>',  date('m/d/Y h:i:s',time()) );
file_put_contents('/var/project/app1/views/layout/cronsig.php', $str);
