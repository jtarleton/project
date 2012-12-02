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

		<div id="leftside">

				<h2 class="hide">Main menu:</h2>
				<ul class="page">
					<?php $highlight = "page_item current_page_item"; ?>
					<li class="<?php echo $highlight; ?>"><a href="<?php echo BASEHREF; ?>">Home</a></li>



<?php if(!($_SESSION['isAuth2'])) : ?>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=login">Log In</a></li>
<?php elseif($_SESSION['isAuth2']): ?>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=logout">Log Out <?php echo $_SESSION['username']; ?></a></li>
<?php else: die('An unexpected error has occurred.'); endif; ?>



<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=otherplaces">Other Places</a></li>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=cats">Category Index</a></li>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=tags">Tag Index</a></li>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=about">About</a></li>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=github">Git Feed</a></li>







					<!-- <li class="page_item"><a href="<?php echo BASEHREF;
?>subwayfind.php">Subway Finder v.1.0</a></li> -->
				</ul>
				
		</div>




		<div id="extras">


			<?php if($_SESSION['isAuth2']) : ?>

<h2>Session Variables</h2>
			<ul>
<?php foreach ($_SESSION as $k=>$v): ?> <li><?php echo $k .' : '. $v; ?> </li><?php endforeach; ?>
</ul>

<?php endif; ?>


			<?php //include (TEMPLATEPATH . '/searchform.php'); ?>
			<h2>Categories</h2>
			<ul>
		
				<li>Category 1</li>
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
    ?><li><?php echo str_replace('_',' ',$key) .': '. date("g:ia", $val); ?></li><?php 
}
?>

                </ul>
                <h2>Today</h2>
    			<ul><li><?php echo date('l'); ?></li>
    				<li><?php echo date('F j\<\s\u\p\>S\<\/\s\u\p\>, Y'); ?></li>
    					<li><?php echo date(' g:ia'); ?></li></ul>

</div>
