<aside role="complementary">

	<nav style="width:100%;">	

		<div id="wrapper" style="width:100%; margin:0;padding:0;"><?php $menus = array(); 





                         if(@$_SESSION['isAuth2']) : ?>
                        <?php $menus['Admin'][0] = '<a href="' .BASEHREF .'admin.php?p=index">Admin</a><br />'; ?>


                                <?php foreach (@$_SESSION as $k=>$v): ?>
                                  <?php      $menus['Admin'][0].='' .$k .' : '. $v .'<br />'; ?>
                                <?php endforeach; ?>
                        <?php      $menus['Admin'][0].=''; ?>
                        <?php endif; 


$menus['Today']=array(); 

$menus['Sun Info']=array();  

$menus['Other Places']= array('<a href="index.php?p=login">Login</a>', '<a class="current" href="index.php?p=about">About</a><a href="index.php?p=otherplaces">Other Places</a>');

$menus['Tags']=array(); 

$menus['Cats']=array(); 

foreach(WpTerm::retrieveAll()           as $termObj) 
$menus['Tags'][] =  '<a>'.$termObj->getAttribute('name') .'</a>'; 
foreach(WpTerm::retrieveAll('category') as $termObj) $menus['Cats'][] = '<a>' .$termObj->getAttribute('name') .'</a>';
$menus['Today']= array();
$menus['Today'][]=  date('l F j\<\s\u\p\>S\<\/\s\u\p\>, Y');
$menus['Today'][]=  date(' g:ia'); 
foreach (date_sun_info(time(), 40.760179, -73.914168) as $key => $val):                              
$menus['Sun Info'][] = ucfirst(str_replace('_',' ',$key) .': '. date("g:ia", $val)); 
endforeach;


?>


				<?php foreach($menus as $k=>$v ): ?>

				<nav style="margin:0;padding:0;width:100%;">

				<div class="accordionButton" style="width:100%;margin:0;padding:0;">

					<h3><?php echo $k; ?></h3>

				</div>

				<div class="accordionContent" style="width:100%;margin:0;padding:0;">
			
				<ul><?php foreach($v as $w) echo '<li><nav>'.$w .'</nav></li>'; ?>

				</ul>

				</div>

				</nav>

			<?php endforeach; ?>

		</div>

	</nav>

</aside>

<!-- // End Aside/Sidebar -->

