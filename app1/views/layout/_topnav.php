 <!--<div class="navbar-fixed-top" id="bsnav"> -->
              <div class="navbar-inner" style="padding-left:0;margin-left:0;margin-right:0;padding-right:0;">
                <!--<div class="container"> -->
                  <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <!-- <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span> -->
                  </a><!-- class="brand" href="<?php echo BASEHREF; ?>">Crystal Bit</a></div> --> 
                  <div class="nav-collapse collapse navbar-responsive-collapse">
                    <ul class="nav" style="margin-left:0; padding-left:0;">
                      <li><a href="<?php echo BASEHREF; ?>">Crystal Bit</a>   </li>
			<li class="<?php if(!isset($_GET['p'])): echo 'active'; else : echo NavUtils::getTopNavClass(@$_GET['p'], 'index'); endif; ?>"><a href="?p=index">Home</a></li>
                      <li class="<?php echo NavUtils::getTopNavClass(@$_GET['p'], 'otherplaces'); ?>"><a href="?p=otherplaces">Links</a></li>
                      <li class="<?php echo NavUtils::getTopNavClass(@$_GET['p'], 'github'); ?>" ><a href="?p=github">Site Updates</a></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Site Info<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="?p=about">About</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li class="nav-header">Nav header</li>
                          <li><a href="#">Separated link</a></li>
                          <li><a href="#">One more separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                    <!-- <form class="navbar-search pull-left" action="">
                      <input type="text" class="search-query span2" placeholder="Search">
                    </form> -->
                    <ul class="nav pull-right" style="padding-right:0;margin-right:0;">
			<?php if(!(@$_SESSION['isAuth2'])): ?>
                      <li class="<?php echo NavUtils::getTopNavClass( @$_GET['p'], 'login'); ?>"><a href="?p=login">Login</a></li>
			<?php else: ?>
			<li><?php echo link_to('Logout', 'index.php?p=logout'); ?></li>
			<?php endif; ?>        
              		
			<li class="divider-vertical"></li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages<b class="caret"></b></a>
                        <ul class="dropdown-menu">
                          <li><a href="?p=jamessstuff">James's Stuff</a></li>
                          <li><a href="?p=upcomingevents">Upcoming Events</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                        </ul>
                      </li>
                    </ul>
                  </div><!-- /.nav-collapse -->
              
		</div><!-- /navbar-inner -->
            <!-- </div><!-- /navbar -->
