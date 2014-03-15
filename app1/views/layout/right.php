<aside role="complementary">

	<nav style="width:100%;">	

		<div id="wrapper" style="width:100%; margin:0;padding:0;"><?php $menus = array(); 





                         if(@$_SESSION['isAuth2']) : ?>

			<?php require('_widgets.php'); ?>

                        <?php $menus['Admin'][0] = '<a href="' .SBASEHREF .'admin.php?p=index">Admin</a><br />'; ?>


                                <?php foreach (@$_SESSION as $k=>$v): ?>
                                  <?php      $menus['Admin'][0].='' .$k .' : '. $v .'<br />'; ?>
                                <?php endforeach; ?>
                        <?php      $menus['Admin'][0].=''; ?>
                        <?php endif; 


$menus['Today']=array(); 

$menus['Sun Info']=array();  

$menus['Other Places']= array('<a href="sindex.php?p=login">Login</a>', '<a class="current" href="sindex.php?p=about">About</a>','<a href="sindex.php?p=otherplaces">Other Places</a>');

$menus['Tags']=array(); 

$menus['Cats']=array(); 
if(0):
foreach(WpTerm::retrieveAll()           as $termObj) 
	
	$menus['Tags'][] =  '<a href="'.SBASEHREF.'?p=tagged&tag=' . $termObj->getAttribute('name')  . '">'.$termObj->getAttribute('name') .'</a>'; 




foreach(WpTerm::retrieveAll('category') as $termObj) 

	$menus['Cats'][] = '<a href="'.SBASEHREF.'?p=categorized&cat=' . $termObj->getAttribute('name') . '">' .$termObj->getAttribute('name') .'</a>';



$menus['Today']= array();
$menus['Today'][]=  date('l F j\<\s\u\p\>S\<\/\s\u\p\>, Y');
$menus['Today'][]=  date(' g:ia'); 


foreach (date_sun_info(time(), 40.760179, -73.914168) as $key => $val):                              
$menus['Sun Info'][] = ucfirst(str_replace('_',' ',$key) .': '. date("g:ia", $val)); 
endforeach;
endif;

?>


				<?php foreach($menus as $k=>$v ): ?>

				<nav style="margin:0;padding:0;width:100%;">

				<div class="accordionButton" style="width:100%;margin:0;padding:0;">

					<div style="color:#6781BA;
font-size:14px;
padding-left:15px;
font-weight:bold;
line-height:50px;
"><?php echo $k; ?></div>

				</div>

				<div class="accordionContent" style="width:100%;margin:0;padding:0;padding-left:15px;">
			
				<?php foreach($v as $w) echo '<div style="color:#6781BA;
font-size:14px;
font-weight:bold;
line-height:50px;
">'.$w .'</div>'; ?>

				

				</div>

				</nav>

			<?php endforeach; ?>

		</div>

	</nav>

</aside>

<!-- // End Aside/Sidebar -->


