<!DOCTYPE html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta http-equiv="content-type" content="text/html; charset="UTF-8" />
<title><?php echo SITE_TITLE; ?></title>
<meta name='robots' content='noindex,nofollow' />
<link rel="canonical" href="<?php echo BASEHREF; ?>" />
<link rel="next" href="<?php echo BASEHREF; ?>" />
<meta name="description" content="<?php echo SITE_DESC;  ?>" />
<meta name="keywords" content="<?php echo SITE_KEYWORDS;  ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo BASEHREF; ?>stylesheets/bs.css" />
<link rel="stylesheet" type="text/css" href="<?php echo BASEHREF; ?>stylesheets/andreasnew.css" />
<script type="text/javascript" src="<?php echo JQUERY; ?>"></script>
<script type="text/javascript" src="<?php echo JSLIB; ?>"></script>
<script type="text/javascript" src="<?php echo JSLIB2; ?>"></script>
<script type="text/javascript" src="<?php echo BASEHREF; ?>javascripts/jquery.dataTables.js"></script>
<script src='http://connect.facebook.net/en_US/all.js'></script>


<!-- 


   
    <script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: new google.maps.LatLng(-34.397, 150.644),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }
    </script>

-->

</head>
<body onLoad="initialize();"><div id="wrap"><?php //echo link_to(SITE_TITLE, BASEHREF); ?>
	<div id="header"><?php //require_once('_topnav.php'); ?>
		<h1><!-- style="z-index:99; padding-left:15px; padding-top:5px;">--><?php echo link_to('crystalbit',BASEHREF); ?></h1>
		<p>version 1.0  <!-- <a href="index.html">3-col</a> &middot; <a href="index2.html">2-col a</a> &middot; <a href="index3.html">2-col b</a> &middot; <a href="print.html">Print</a> --></p>
		<?php  $chars = range('b', 'd'); 
		array_push($chars , 'g'); 
		shuffle($chars); ?>
	</div><div style="margin:5px 0; z-index:99; display:block; width:950px; height:225px; background-image: url('<?php echo sprintf('%simages/front-%s.jpg',BASEHREF, current($chars)); ?>');"></div>
