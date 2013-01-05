<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="en-US">
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="content-type" content="text/html; charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />		
<title><?php echo SITE_TITLE; ?></title>
<meta name='robots' content='noindex,nofollow' />
<link rel="canonical" href="<?php echo BASEHREF; ?>" />
<link rel="next" href="<?php echo BASEHREF; ?>" />
<meta name="description" content="<?php echo SITE_DESC;  ?>" />
<meta name="keywords" content="<?php echo SITE_KEYWORDS;  ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo BASEHREF; ?>stylesheets/andreas.css" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="" />
<link rel="alternate" type="text/xml" title="RSS .92" href="" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="" />
<link rel="pingback" href="" />
<script type="text/javascript" src="<?php echo JQUERY; ?>"></script>
<script type="text/javascript" src="<?php echo JSLIB; ?>"></script>
</head>
<body>
<div id="wrap">
	<div id="header">
		<h1><?php echo link_to(SITE_TITLE, BASEHREF); ?></a></h1>
		<p><strong>version 1.0</strong></p>
	</div>

<?php  $chars = range('b', 'd'); array_push($chars , 'g'); shuffle($chars); ?>
	<img width="980" height="226" id="frontphoto" src="<?php echo sprintf('%simages/front-%s.jpg',BASEHREF, current($chars)); ?>" alt="" />





















<?php //require('_leftside.php'); ?>

























		<div id="extras">


			<?php if(@$_SESSION['isAuth2']) : ?>
<h2>Admin</h2>
<ul>
<li><a href="<?php echo BASEHREF; ?>admin.php?p=index">Admin</a>
</ul>
<h2>Session Variables</h2>
			<ul>
<?php foreach (@$_SESSION as $k=>$v): ?> <li><?php echo $k .' : '. $v; ?> </li><?php endforeach; ?>
</ul>

<?php endif; ?>


			<?php //include (TEMPLATEPATH . '/searchform.php'); ?>
			<h2 class="page_item">Categories</h2>
			<ul>
		
				<li>Programming</li>
			</ul>
		
			<h2>Tags</h2>
			<ul>
				<li>PHP</li>
			</ul>
		





			<h2>Sun Info</h2>

			
		
                <ul>
<?php 

foreach (date_sun_info(time(), 40.760179, -73.914168) as $key => $val) 
{
    ?><li><?php echo ucfirst(str_replace('_',' ',$key) .': '. date("g:ia", $val)); ?></li><?php 
}
?>

                </ul>
                <h2>Today</h2>
    			<ul>
    				<li><?php echo date('l F j\<\s\u\p\>S\<\/\s\u\p\>, Y'); ?></li>
    					<li><?php echo date(' g:ia'); ?></li></ul>

</div>
