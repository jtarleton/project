<!DOCTYPE html>
<!-- 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

-->
<html class="no-js" dir="ltr" lang="en-US">
<head>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<meta http-equiv="content-type" content="text/html; charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />		
<title><?php echo SITE_TITLE; ?></title>
<meta name='robots' content='noindex,nofollow' />
<link rel="canonical" href="http://www.crystalbit.com/" />
<link rel="next" href="http://www.crystalbit.com/" />
<meta name="description" content="<?php echo SITE_DESC;  ?>" />
<meta name="keywords" content="<?php echo SITE_KEYWORDS;  ?>" />
<link rel="stylesheet" type="text/css" href="http://www.crystalbit.com/stylesheets/andreas.css" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="" />
<link rel="alternate" type="text/xml" title="RSS .92" href="" />
<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="" />
<link rel="pingback" href="" />
<script type="text/javascript" src="<?php echo JQUERY; ?>"></script>
<script type="text/javascript" src="http://www.crystalbit.com/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo JSLIB; ?>"></script>

</head>
<body>
<div id="wrap">

	<div id="header">
		<h1><a href="http://www.crystalbit.com/"><?php echo SITE_TITLE; ?></a></h1>
		<p><strong>version 1.0</strong></p>
	</div>

	<img id="frontphoto" src="http://www.crystalbit.com/images/front-<?php $chars = range('b', 'd'); array_push($chars , 'g'); shuffle($chars); echo current($chars); ?>.jpg" alt="" />

		<div id="leftside">

				<h2 class="hide">Main menu:</h2>
				<ul class="page">
					<?php $highlight = "page_item current_page_item"; ?>
					<li class="<?php echo $highlight; ?>"><a href="http://www.crystalbit.com/">Home</a></li>
					<li class="page_item"><a href="http://www.crystalbit.com/subwayfind.php">Subway Finder v.1.0</a></li>
				</ul>
				
		</div>




		<div id="extras">

			<?php //include (TEMPLATEPATH . '/searchform.php'); ?>
			<h2>Categories</h2>
			<ul>
			<?php //wp_list_cats('sort_column=name&list=1&optioncount=0&hierarchical=1&children=1&hide_empty=1&feed=RSS'); ?>
				<li>Cat 1</li>
			</ul>
			<?php //get_calendar(1); ?>
			<h2>Tags</h2>
			<ul>
				<li>tag</li>
			</ul>
			<?php //wp_list_bookmarks('title_li=&category_before=&category_after=&show_images=0&show_description=0'); ?> 
			<?php //wp_meta(); ?>





			<h2>Sun Info</h2>

			
		
                <ul>
<?php 
$sun_info = date_sun_info(time(), 40.760179, -73.914168);
foreach ($sun_info as $key => $val) 
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
