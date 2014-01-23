<?php 
//see helper sec2hms https://gist.github.com/4435891

$_SESSION['start'] = (float) array_sum(explode(' ', microtime()));
//$end   = (float) array_sum(explode(' ', microtime()));
//$out   = sprintf('Execution time: %s %s %s', sec2hms($end - $start), PHP_EOL, PHP_EOL);

?>
<!DOCTYPE html>
<head>

<!-- Meta -->
<meta http-equiv ="content-type" content="text/html; charset=UTF-8" />
<meta name       ="robots"       content="noindex,nofollow" />
<meta name       ="description"  content="Jamess Home Page" />
<meta name       ="keywords"     content="Jamess Home Page" />

<!-- Link -->
<link rel="stylesheet"   href="<?php echo BASEHREF; ?>stylesheets/demo.css" ></link>
<link rel="canonical"    href="<?php echo BASEHREF; ?>" />
<link rel="next"         href="<?php echo BASEHREF; ?>" />

<!-- Title -->
<title>James's Home Page</title>






<!-- Javascript
<script type="text/javascript" src="<?php echo BASEHREF; ?>javascripts/jquery.dataTables.js"></script>
-->

<script type="text/javascript" src="<?php echo BASEHREF; ?>javascripts/jquery-latest.min.js"></script>
<!-- <script type="text/javascript" src="http://connect.facebook.net/en_US/all.js"></script>

-->
<!-- <script type="text/javascript" src="<?php echo BASEHREF; ?>javascripts/js.js"></script>
-->

<script type="text/javascript" src="<?php echo BASEHREF; ?>javascripts/js2.js"></script>




</head>

<body>

<div id="fb-root"></div>

<div id="nav" class="twelve columns">

	<ul id="nv">

	<li><a href="<?php echo BASEHREF; ?>index.php?p=index">Home</a></li>
	<li><a href="<?php echo BASEHREF; ?>index.php?p=about">About</a></li>
	<li><a title="Categories" href="<?php echo BASEHREF; ?>index.php?p=cats">Cats</a></li>
	<li><a href="<?php echo BASEHREF; ?>index.php?p=tags">Tags</a></li>
	
	<li><a href="<?php echo BASEHREF; ?>index.php?p=archive">Archive</a></li>
	<li><a href="<?php echo BASEHREF; ?>index.php?p=otherplaces">Links</a></li>
	<li><a href="<?php echo BASEHREF; ?>index.php?p=pics">Pics</a></li>
	
	<li><a href="<?php echo BASEHREF; ?>index.php?p=misc">Misc</a></li>

	<li><a id="button" href="javascript:void(0);">Contact</a></li>

	<li><a class="menubtn" id="tools" href="javascript:void(0);">Tools</a><li>	
	
	
	</ul><p id="nav-sub" style="display:none;background-color:#293E6F;"><a id="button2">Search</a> </p>	
</div>


<div id="sol">


			<div style="margin:auto 0px;">

			<div id="hp">James's Home Page</div>

			<div style="clear:both;"></div></div>
</div>




<div style="text-align:center; margin:0; padding:5px; font-weight:normal; font-size:90%;font-family:fantasy,cursive,Serif;" id="grad">
<img src="http://www.crystalbit.com/images/jigsoar-icons/light/16px/16_info.png" border="0" style="margin-right:5px;"></img>Today is <?php echo date('l, F jS, Y \| h:i:s A T \| e'); ?> | Sunrise: 7:05 am | Sunset: 4:40 pm | Hi:55&#176;/Lo:39&#176;
</div>



<div id="content">
