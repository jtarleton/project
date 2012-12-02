<div id="content">Git Feed


<ul>
<?php 

$sxml=simplexml_load_file('https://github.com/jtarleton.atom'); 

foreach($sxml->children() as $x)

{ 

if( empty($x->title)) continue; 

?><li><?php echo $x->updated .' <a href="'.   $x->link->attributes()->href . '">'.$x->title.' </a>' ; ?></li>
<?php 

}







?>
</ul>







</div>
