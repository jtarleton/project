<!DOCTYPE html>
<html class="no-js" dir="ltr" lang="en-US">
<head>
<title>ADMIN</title>
<meta name='robots' content='noindex,nofollow' />
<link rel="canonical" href="<?php echo BASEHREF; ?>" />
<link rel="next" href="<?php echo BASEHREF; ?>" />
<meta name="description" content="<?php echo SITE_DESC;  ?>" />
<meta name="keywords" content="<?php echo SITE_KEYWORDS;  ?>" />
<link rel="stylesheet" type="text/css" href="<?php echo BASEHREF; ?>stylesheets/admstyles/css/transdmin.css" />
<script type="text/javascript" src="<?php echo JQUERY; ?>"></script>
<script type="text/javascript" src="<?php echo JSLIB; ?>"></script>
</head>
<body>





<div id="wrapper">
        <!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
        <h1><a href="#"><span>Foo</span></a></h1> 
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
                <li><a href="" class="active">POSTS</a></li> <!-- Use the "active" class for the active menu item  -->
                <li><a href="">COMMENTS</a></li>
		<li><a href="">SETTINGS</a></li>
                <li class="logout"><a href="">LOGOUT</a></li>
        </ul>
        <!-- // #end mainNav -->

















<div id="containerHolder">
	<div id="container">
       		<div id="sidebar"><?php require_once('_sidenav.php'); ?>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="">Post Index</a> <!--&raquo; <span class="active">Posts Index</span> --></h2>
                
                <div id="main">
			<!-- <h3>Blog Posts</h3> -->
                    	<div style="overflow:auto; height:800px;"> 





		<?php if(@$_SESSION['isAuth2']) : ?>
<h2>Admin</h2>
<ul>

<li><a href="<?php echo BASEHREF; ?>index.php?p=index">View Site</a>


<li><a href="<?php echo BASEHREF; ?>index.php?p=index" target="_BLANK">View Site In New Tab</a>
</ul>
<h2>Session Variables</h2>
                        <ul>
<?php foreach (@$_SESSION as $k=>$v): ?> <li><?php echo $k .' : '. $v; ?> </li><?php endforeach; ?>
</ul>

<?php endif; ?>





<?php /* 

<div id="wrap">Starting layout...




  <?php if(@$_SESSION['isAuth2']) : ?>
<h2>Admin</h2>
<ul>
<li><a href="<?php echo BASEHREF; ?>index.php?p=index" target="_BLANK">View Site</a>
</ul>
<h2>Session Variables</h2>
                        <ul>
<?php foreach (@$_SESSION as $k=>$v): ?> <li><?php echo $k .' : '. $v; ?> </li><?php endforeach; ?>
</ul>

<?php endif; ?>


*/
