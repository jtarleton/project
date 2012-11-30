<?php

function link_to($href='#', $display='Click Me', array $opts)
{
	foreach($opts as $opt=>&$value)
		${$opt} = ( !isset($value) ) ? '' : $value;
	
	return sprintf('<a class="%s" id="%s" href="%s" target="%s" title="%s">%s</a>', 
		$class,
		$id,
		$href,
		$target,
		$title,
		$display );	
}

