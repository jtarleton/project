<div id="content"><h2>Site Updates</h2>
<ul>
<?php 
$sxml=simplexml_load_file('https://github.com/jtarleton.atom'); 
foreach($sxml->children() as $x):
if( empty($x->title)): 
continue; 
else:
?><li><?php 
echo date('m/d/Y g:i:s', strtotime($x->updated)); 
echo ' '.link_to($x->title,  $x->link->attributes()->href) ; ?></li>
<?php 
endif;
endforeach;
?>
</ul>
