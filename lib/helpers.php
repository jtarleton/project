<?php

function link_to($display='Click Me' , $href='#', array $opts=array(
'class'=>'and',
'id'=>null,
'target'=>null,
'title'=>null
))
{
	$stropts = '';
	foreach($opts as $opt=>$value)
		if( isset($value) ) $stropts.=" $opt=\"$value\" ";

	return "<a $stropts href=\"$href\">$display</a>";
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

		$menu.= '<li>'.link_to(" $v ", sprintf($controller.'.php?p=index&s=%s', $v) , array('class'=>$klass)  ).'</li>';
	}
	return '<div class="pagination pagination-centered"><ul id="pagMenmu">'.sprintf('<li>%s</li> 

	%s 
		
	<li>%s</li>
	' ,

	link_to('&lt;', $controller.'.php?p=index&s=1'), 

	''.$menu.'',

	link_to('&gt;', $controller.'.php?p=index&s='.$tot  )  


	) . '</ul></div>';


}




function tokenTruncate($string, $your_desired_width) {
  $parts = preg_split('/([\s\n\r]+)/', $string, null, PREG_SPLIT_DELIM_CAPTURE);
  $parts_count = count($parts);

  $length = 0;
  $last_part = 0;
  for (; $last_part < $parts_count; ++$last_part) {
    $length += strlen($parts[$last_part]);
    if ($length > $your_desired_width) { break; }
  }

  return implode(array_slice($parts, 0, $last_part));
}







