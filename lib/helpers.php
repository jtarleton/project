<?php

function link_to($href='#', $display='Click Me', array $opts=array(
'class'=>null,
'id'=>null,
'href'=>null,
'target'=>null,
'title'=>null
))
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

function form_tag($action='', $method='POST', array $opts=array())
{
	if(!isset($opts['class'])) $opts['class'] = sprintf( 'class-%s', uniqid() );
	if(!isset($opts['id'])) $opts['id'] = sprintf( 'id-%s', uniqid() );
	
	return sprintf('<form action="%s" method="%s" class="%s" id="%s">', $action, $method, $opts['class'], $opts['id']);	
}
