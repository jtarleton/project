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
                <li><a href="admin.php?p=index" class="active">POSTS</a></li> <!-- Use the "active" class for the active menu item  -->
                <li><a href="admin.php?p=comments">COMMENTS</a></li>
		<li><a href="admin.php?p=links">LINKS</a></li>
		
		<li><a href="admin.php?p=categories">CATEGORIES</a></li>
                <li><a href="admin.php?p=tags">TAGS</a></li>

                <li><a href="admin.php?p=settings">SETTINGS</a></li>

		 <li><a href="admin.php?p=dailymile">DM</a></li>

                 <li><a href="admin.php?p=wines">WINES</a></li>
		
		  <li><a href="admin.php?p=sessions">SESSIONS</a></li>


		
                <li class="logout"><a href="index.php?p=logout">LOGOUT</a></li>


	<!--




	FILES
CALENDAR_EVENTS
IPHONE_CONTACTS
WISH_LIST
QUEUED_EMAILS
PLACES_IVE_BEEN
QUOTES
WINES
PLAYLISTS
SESSIONS



 -->

        </ul>
        <!-- // #end mainNav -->

















<div id="containerHolder">
	<div id="container">
       		<div id="sidebar"><?php require_once('_sidenav.php'); ?>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->
                
                <!-- h2 stays for breadcrumbs -->
                <h2><a href="admin.php?p=<?php echo (isset( $_GET['p']) ) ? $_GET['p'] : 'index'; ?>.'"'><?php echo ucfirst($_GET['p']); ?> </a> <!--&raquo; <span class="active">Posts Index</span> --></h2>
                
                <div id="main">
			<!-- <h3>Blog Posts</h3> -->
                    	<div style="overflow:auto; height:800px;"> 

