<div id="content"><h2>About</h2>
<ul><?php
echo "<li>Last modified: " . date ('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t g:ia', getlastmod()) .'</li>';;


echo '<li>Owner: ' . get_current_user().'</li>';

$pid = getmypid();
if(file_exists('/proc/'.$pid))
{
    echo '<li>Process ID: '. $pid.'</li>';
}

echo '<li>Powered by PHP '.phpversion().'</li>';
?>
</ul><?php 
ob_start();


phpcredits(CREDITS_GENERAL); 
$bc = ob_get_clean();

 $bc = str_replace(' class="e"','',$bc);
 $bc = str_replace(' class="h"','',$bc);
 $bc = str_replace(' class="v"','',$bc);


$bc = str_replace(' border="0" cellpadding="3" width="600"','',$bc);
$bc = str_replace('<table>','<table style="table-layout:fixed;width:100%;">',$bc);
echo str_replace('<h1>PHP Credits</h1>','<h2>PHP Credits</h2>',$bc);


?>
</div>
