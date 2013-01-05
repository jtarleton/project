<div id="content"><h2>About</h2>

<p>

Crystal Bit is my personal home page and original web application, written in PHP 5.4, based on the<a href="http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller">MVC architecture</a>, and driven by the <a href="http://www.mongodb.org">MongoDB</a> database.

</p>
<p>
You'll notice this site does not use a certain <a href="http://www.wordpress.org">popular blog application</a>, nor does it use any of the 
many excellent <a href="http://en.wikipedia.org/wiki/Comparison_of_web_application_frameworks#PHP_2">PHP frameworks</a> out there; rather, it is a framework of my own design.
</p>

<!-- <p>
<iframe width="560" height="315" src="http://www.youtube.com/embed/NrVCjnRdB_k" frameborder="0" allowfullscreen></iframe>
</p> -->

<p>
If you code, feel 
free to <a href="https://github.com/jtarleton/project/fork">fork</a> this project on github.
</p>

<p>
-James
</p>


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

//phpcredits(CREDITS_GENERAL); 
$bc = ob_get_clean();

 $bc = str_replace(' class="e"','',$bc);
 $bc = str_replace(' class="h"','',$bc);
 $bc = str_replace(' class="v"','',$bc);


$bc = str_replace(' border="0" cellpadding="3" width="600"','',$bc);
$bc = str_replace('<table>','<table style="table-layout:fixed;width:100%;">',$bc);
echo str_replace('<h1>PHP Credits</h1>','<h2>PHP Credits</h2>',$bc);


?>
</div>
