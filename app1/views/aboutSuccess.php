


<div class="main" role="main">


<div class="post">

<article class="entry">



<header>
<h1>About</h1></header>

<p>Welcome. Crystal Bit is my personal home page and original web application.  Thank you for stopping by.
</p>

<p>
</p>

<p>James</p>

<?php if(@$_SESSION['isAuth2']): ?>

<?php
echo "<p>Last modified: " . date ('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t g:ia', getlastmod()) .'</p>';;


echo '<p>Owner: ' . get_current_user().'</p>';

$pid = getmypid();
if(file_exists('/proc/'.$pid))
{
    echo '<p>Process ID: '. $pid.'</p>';
}

echo '<p>Powered by PHP '.phpversion().'</p>';
?>
<?php 
ob_start();

//phpcredits(CREDITS_GENERAL); 
$bc = ob_get_clean();

 $bc = str_replace(' class="e"','',$bc);
 $bc = str_replace(' class="h"','',$bc);
 $bc = str_replace(' class="v"','',$bc);


$bc = str_replace(' border="0" cellpadding="3" width="600"','',$bc);
$bc = str_replace('<table>','<table style="table-layout:fixed;width:100%;">',$bc);
echo str_replace('<h1>PHP Credits</h1>','<h2>PHP Credits</h2>',$bc);

endif; 
?>
</div></div>
