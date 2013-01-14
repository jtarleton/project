<div id="content"><h2>About</h2>

<p>
Welcome. Crystal Bit is my personal home page and original web application, written in PHP 5.4, based on the <?php echo link_to('MVC architechture', 'http://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller'); ?>, and driven by the <?php echo link_to('MongoDB', 'http://www.mongodb.org'); ?> database.

</p>
<p>
You may notice this site does not use a certain <?php echo link_to('popular blog application', "http://www.wordpress.org"); ?>, nor does it use any of the 
many excellent <?php echo link_to('PHP frameworks', 'http://en.wikipedia.org/wiki/Comparison_of_web_application_frameworks#PHP_2'); ?> out there; rather, it is a framework of my own design.
</p>

<p>
If you code, you are welcome to <?php echo link_to('fork','https://github.com/jtarleton/project'); ?> this project on Github.
</p>

<p>
- James
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
