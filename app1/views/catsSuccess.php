<div class="main" role="main">


<h2>Category Index</h2>
<pre>


	<?php


        $menus['Tags']=array();

$menus['Cats']=array();

foreach(WpTerm::retrieveAll()           as $termObj)
$menus['Tags'][] =  $termObj->getAttribute('name');
foreach(WpTerm::retrieveAll('category') as $termObj) $menus['Cats'][] = $termObj->getAttribute('name');


print_r(  $menus['Cats'] );


?>




</pre>
</div>
