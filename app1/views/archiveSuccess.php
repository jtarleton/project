<div class="main" role="main">


<div class="post">

<article class="entry">



<header>
<h1>Archive Index</h1></header>
<p>
<?php 








//$curr_month = date('F',mktime(0, 0, 0, date('n')));
  $months = array();

 for ($i = 1; $i <= 12; $i++) 
	{
 $months[] = date('F', mktime(0, 0, 0,  $i, 1));
 
}


  $months = array_reverse($months, true);

foreach(range(2012, 2013) as $y)
{

foreach($months as $key =>$value)
{
 echo      $value .' '. $y.'<br />';
}


}

?>


</p>
</div>
</div>
