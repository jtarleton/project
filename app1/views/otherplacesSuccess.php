<div id="content">
<h2>Other Places</h2>

<?php







$l = (@$_SESSION['isAuth2']) ? 
	array(

	'Travel & Transportation'=>array(
		'Loews Hotels'=>'http://www.loewshotels.com/',
		'MTA'=>'http://www.mta.info',
		'Yellow Cab NYC'=>'http://www.yellowcabnyc.com/',
		'Port Authority of NY & NJ'=>'http://www.panynj.gov',
		'LaGuardia Airport'=>'http://www.panynj.gov/airports/laguardia.html',
		'JFK Airport'=>'http://www.panynj.gov/airports/jfk.html',
		'Delta Airlines'=>'http://www.delta.com',
		'Kayak'=>'http://www.kayak.com/',
		'Amtrak'=>'http://www.amtrak.com',
		'Hilton'=>'http://hhonors3.hilton.com/en/index.html'
	),
	
	'Organizations'=>array(
		'Libertarian Party'=>'http://www.lp.org',
		'ACLU'=>'http://www.aclu.org',
		'Democratic Party'=>'http://www.democrats.org/',
		'New York Road Runners'=>'http://www.nyrr.org/'
	),
	
	'News'=>array(
		'MSNBC'=>'http://tv.msnbc.com',
		'Fox News'=>'http://www.foxnews.com',
		'CNN'=>'http://www.cnn.com',
		'New York Times'=>'http://www.nytimes.com',
		'NPR'=>'http://www.npr.org',
		'Reuters'=>'http://www.reuters.com/',
		'BBC'=>'http://www.bbc.co.uk',
		'Wall Street Journal'=>'http://www.wsj.com',
		'Drudge Report'=>'http://www.drudgereport.com/',
		'NBC New York'=>'http://www.nbcnewyork.com/'
	),
	
	'Sports'=>array(
		'LetsRun'=>'http://www.letsrun.com',
		'NYC Marathon'=>'http://www.ingnycmarathon.org/',
		'DailyMile'=>'http://www.dailymile.com',
		'New York Road Runners'=>'http://www.nyrr.org/'
	),
	
	'Government'=>array(
		'NY Gov'=>'http://www.ny.gov/',
		'IRS'=>'http://www.irs.gov',
		'NY State Tax/Finance'=>'http://www.tax.ny.gov/',
		'Recycling for NYC Residents'=>'http://www.nyc.gov/html/nycwasteless/html/stuff/infofor_residents.shtml'
	),
	
	'Health Care'=>array(
		'United Health Care Oxford'=>'https://www.oxhp.com/Member/MemberPortal/',
		'Queens Mount Sinai Hospital'=>'http://www.mshq.org/patient-and-visitor-info'
	),
	
	'Technology'=>array(
		'PHP'=>'http://www.php.net',
		'Apple Store'=>'http://store.apple.com',
		'ServerGrove'=>'http://www.servergrove.com',
		'Linode'=>'http://www.linode.com/',
		'Zend'=>'http://www.zend.com',
		'MongoDB'=>'http://www.mongodb.org/',
		'MySQL'=>'http://www.mysql.com',
		'GitHub'=>'https://www.github.com/',
		'GitHub Gists'=>'https://gist.github.com/',
		'Python Standard Library'=>'http://docs.python.org/2/library/'
	),
	
	'Finance, Tax & Investing'=>array(
		'Chase'=>'http://www.chase.com',
		'Merrill Edge'=>'https://www.merrilledge.com/',
		'MetLife MyBenefits'=>'https://mybenefits.metlife.com/MyBenefits/public/ssi/cookieTest.do',
		'Fidelity NetBenefits'=>'http://netbenefits.fidelity.com/',
		'IRS'=>'http://www.irs.gov',
		'H&amp;R Block'=>'http://www.hrblock.com',
		'NY State Tax/Finance'=>'http://www.tax.ny.gov/'
	),
	
	'Home Furnishings'=>array(
		'Restoration Hardware'=>'http://www.restorationhardware.com',
		'Williams-Sonoma'=>'http://www.williams-sonoma.com'
	),
	'Restaurants, Food & Wine'=>array(
		'Starbucks'=>'http://www.starbucks.com',
		'Becco'=>'http://becco-nyc.com/',
		'Open Table Reservations'=>'http://www.opentable.com/'
	),
	'Clothing'=>array(
		'Brooks Brothers'=>'http://www.brooksbrothers.com',
		'Lululemon Athletica'=>'http://shop.lululemon.com/'
	),
	'Games'=>array(
		'Village Chess Shop'=>'http://www.chess-shop.com/'
	),
	'Home Utilities'=>array(
		'AT&amp;T Wireless'=>'http://www.att.com/',
		'Time Warner Cable'=>'https://myservices.timewarnercable.com/',
		'Consolidated Edison'=>'http://www.coned.com'
	),
	'Weather'=>array(
		'AccuWeather'=>'http://www.accuweather.com',
		'NBC New York Weather'=>'http://www.nbcnewyork.com/weather/'
	),
	'Periodicals'=>array(
		'New York Times'=>'http://www.nytimes.com',
		'The Economist'=>'http://www.economist.com/',
		'Wall Street Journal'=>'http://www.wsj.com'
	),
	'Other'=>array(
		'Art of Manliness'=>'http://www.artofmanliness.com',
		'Stuff White People Like'=>'http://www.stuffwhitepeoplelike.com',
		'The Onion'=>'http://www.theonion.com'
	),
	'Entertainment'=>array(
		'Madison Square Garden'=>'http://thegarden.com',
		'Amazon'=>'http://www.amazon.com'
	),
	'Books'=>array(
		'Amazon'=>'http://www.amazon.com'
	),
	'Search Engines & Reference'=> array(
		'Bing'=>'http://www.bing.com',
		'Wikipedia'=>'http://www.wikipedia.org'
	) 

) : array('Weather'=>array('Accuweather'=>'http://www.accuweather.com')
);

ksort($l);

?>

<ul>

	<?php foreach( $l as $cat=>$links): ksort($links); ?>
	<li><?php echo $cat; ?></li>
		<ul>
		<?php  foreach($links as $text=>$uri): ?>
			<li class="page_item"><?php echo link_to($text,$uri); ?></li>
		<?php endforeach; ?>
		</ul>
	</li>
	<?php endforeach; ?>






	<?php foreach(WpLink::retrieveAll(0, 99999) as $linkObj): ?>

	<li><?php echo link_to($linkObj->getAttribute('text'), $linkObj->getAttribute('url')); ?>

<?php endforeach; ?></li> 






</ul>

</div>
