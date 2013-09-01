<div class="main" role="main">


<div class="post">

<article class="entry">



<header>
<h1>Category Index</h1></header>

<ul>


	<?php


        $menus['Tags']=array();

$menus['Cats']=array();

foreach(WpTerm::retrieveAll()           as $termObj)
$menus['Tags'][] =  $termObj->getAttribute('name');
foreach(WpTerm::retrieveAll('category') as $termObj) $menus['Cats'][] = $termObj->getAttribute('name');


asort(  $menus['Cats'] );
foreach(  $menus['Cats'] as $cat ): ?>
<li><p><?php  echo $cat; ?></p></li>
<?php endforeach; ?>

</ul>

</article>

</div>
</div>



