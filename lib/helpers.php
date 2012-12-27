<?php

function link_to($display='Click Me' , $href='#', array $opts=array(
'class'=>null,
'id'=>null,
'target'=>null,
'title'=>null
))
{
	foreach($opts as $opt=>$value)
		$$opt = ( !isset($value) ) ? ' ' : @$value;

	return "<a href=\"$href\">$display</a>";
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


function paginated_links( $totalRecs , $pageSize, $k, $controller = 'index') 
{


        $numPages = $totalRecs / $pageSize ;

        $numPages = intval( $numPages );

        $append = ( ( $totalRecs % $pageSize) == 0) ? 0 : 1 ;

        $tot = $numPages + $append;


	$range = range( 1, $tot) ;



	$offs = ($k >= 3) ? $k-3 : 0;


	$menu='';


	foreach( array_slice(   $range , $offs, 6)  as $v  ) {


		$klass = ( $v == $k  ) ? 'curPage' : null;

		$menu.= '<td>'.link_to(" $v ", sprintf($controller.'.php?p=index&s=%s', $v) , array('class'=>$klass)  ).'</td>';
	}
	return '<table id="pagMenu" style="margin-bottom:20px; table-layout:fixed; width:100%;"><tr>'.sprintf('<td>%s</td> 

	%s 
		
	<td>%s</td>
	' ,

	link_to('&lt;', $controller.'.php?p=index&s=1'), 

	''.$menu.'',

	link_to('&gt;', $controller.'.php?p=index&s='.$tot  )  


	) . '</tr></table>';


}
