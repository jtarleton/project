<div id="content">
<h2>Other Places</h2>

<?php


$links = array(

'DailyMile'=>'http://www.dailymile.com',
'Queens Mount Sinai Hospital'=>'http://www.mshq.org/patient-and-visitor-info',
'ServerGrove'=>'http://www.servergrove.com',
'Linode'=>'http://www.linode.com/',
'Amazon'=>'http://www.amazon.com',
'Village Chess Shop'=>'http://www.chess-shop.com/',
'AT&amp;T Wireless'=>'http://www.att.com/',
'Time Warner Cable'=>'https://myservices.timewarnercable.com/',
'Consolidated Edison'=>'http://www.coned.com',
'Chase'=>'http://www.chase.com',
'Libertarian Party'=>'http://www.lp.org',
'Loews Hotels'=>'http://www.loewshotels.com/',
'Democratic Party'=>'http://www.democrats.org/',
'United Health Care Oxford'=>'https://www.oxhp.com/Member/MemberPortal/',
'Merrill Edge'=>'https://www.merrilledge.com/',
'MetLife MyBenefits'=>'https://mybenefits.metlife.com/MyBenefits/public/ssi/cookieTest.do',
'Fidelity NetBenefits'=>'http://netbenefits.fidelity.com/',
'Bing'=>'http://www.bing.com',
'Apple Store'=>'http://store.apple.com',
'NY State Tax/Finance'=>'http://www.tax.ny.gov/',
'NY Gov'=>'http://www.ny.gov/',
'IRS'=>'http://www.irs.gov',
'H&amp;R Block'=>'http://www.hrblock.com',
'Becco'=>'http://becco-nyc.com/',
'Open Table Reservations'=>'http://www.opentable.com/',
'ACLU'=>'http://www.aclu.org',
'Wikipedia'=>'http://www.wikipedia.org',
'Lululemon Athletica'=>'http://shop.lululemon.com/',
'Delta Airlines'=>'http://www.delta.com',
'Kayak'=>'http://www.kayak.com/',
'GitHub'=>'https://www.github.com/',
'GitHub Gists'=>'https://gist.github.com/',
'Amtrak'=>'http://www.amtrak.com',
'Hilton'=>'http://hhonors3.hilton.com/en/index.html',
'NYC Marathon'=>'http://www.ingnycmarathon.org/',
'New York Road Runners'=>'http://www.nyrr.org/',
'New York Times'=>'http://www.nytimes.com',
'NPR'=>'http://www.npr.org',
'Madison Square Garden'=>'http://thegarden.com',
'Reuters'=>'http://www.reuters.com/',
'BBC'=>'http://www.bbc.co.uk',
'Wall Street Journal'=>'http://www.wsj.com',
'Drudge Report'=>'http://www.drudgereport.com/',
'LetsRun'=>'http://www.letsrun.com',
'BBC'=>'http://www.bbc.co.uk/',
'Recycling for NYC Residents'=>'http://www.nyc.gov/html/nycwasteless/html/stuff/infofor_residents.shtml',
'Brooks Brothers'=>'http://www.brooksbrothers.com',
'Williams-Sonoma'=>'http://www.williams-sonoma.com',
'Restoration Hardware'=>'http://www.restorationhardware.com',
'Starbucks'=>'http://www.starbucks.com',
'MTA'=>'http://www.mta.info',
'NBC New York'=>'http://www.nbcnewyork.com/',
'AccuWeather'=>'http://www.accuweather.com',
'Yellow Cab NYC'=>'http://www.yellowcabnyc.com/',
'Port Authority of NY & NJ'=>'http://www.panynj.gov',
'LaGuardia Airport'=>'http://www.panynj.gov/airports/laguardia.html',
'JFK Airport'=>'http://www.panynj.gov/airports/jfk.html'


);

ksort($links);

?>

<ul>

<?php foreach( $links as $text=>$uri ): ?>
	<li class="page_item"><?php echo link_to($text,$uri); ?></li>
<?php endforeach; ?>

</ul>

</div>
