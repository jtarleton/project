

<strong>Pics Index</strong><br />






<?php


if ($handle = opendir(PICSPATH)) 
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