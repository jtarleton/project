<?php

function link_to($display='Click Me' , $href='#', array $opts=array(
'class'=>null,
'id'=>null,
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


function zebraClass($r)
{
	return (($r % 2) ==0) ? 'even' : 'odd';
}


function paginated_links( $totalRecs , $pageSize = 1000) 
{



	$numPages = $totalRecs / $pageSize ;

	$numPages = intval( $numPages );

	$append = ( ( $totalRecs % $pageSize) == 0) ? 0 : 1 ;

	$tot = $numPages + $append;

	$menu = '';
	for( $j=1; $j<$tot; $j++ )  $menu.=link_to(' '.$j.' ' ,'index.php?p=index&s=' . $j);


	return sprintf('%s 

	%s 
		
	%s
	' ,

	link_to('Newest', 'index.php?p=index&s=1'), 

	' '.$menu.' ',

	link_to('Oldest', 'index.php?p=index&s='.$tot  )  


	);


}
