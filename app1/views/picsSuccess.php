
<div class="main" role="main">


<div class="post">

<article class="entry">



<header>
<h1>Pics Index</h1></header>






<?php

$path = '/var/project/public/images/mypics/';
if ($handle = opendir($path)) 
{
    while (false !== ($file = readdir($handle))) {
        // do something with the file

	if($file!='.' && $file!='..')
	echo link_to(sprintf('<img src="%simages/mypics/%s" style="border:0; margin:0; padding:0;width:400px; height:400px;" />', BASEHREF,  $file), sprintf('%simages/mypics/%s', BASEHREF, $file)  );
        // note that '.' and '..' is returned even
    }
    closedir($handle);
}




?>
</div></div>
