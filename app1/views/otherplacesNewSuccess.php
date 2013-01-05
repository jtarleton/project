<div id="content">
<h2>Other Places</h2>

<?php


$links = array(
'Amazon'=>'http://www.amazon.com',
'AT&amp;T'=>'http://www.att.com/',
'Time Warner Cable'=>'https://myservices.timewarnercable.com/',
'Consolidated Edison'=>'http://www.coned.com',
'Chase'=>'http://www.chase.com',
'United Health Care Oxford'=>'https://www.oxhp.com/Member/MemberPortal/',
'Merrill Edge'=>'https://www.merrilledge.com/',
'MetLife MyBenefits'=>'https://mybenefits.metlife.com/MyBenefits/public/ssi/cookieTest.do',
'Fidelity NetBenefits'=>'http://netbenefits.fidelity.com/',
'NY State Tax/Finance'=>'http://www.tax.ny.gov/',
'NY Gov'=>'http://www.ny.gov/',
'IRS'=>'http://www.irs.gov',
'H&amp;R Block'=>'http://www.hrblock.com',
'Lululemon Athletica'=>'http://shop.lululemon.com/',
'Delta Airlines'=>'http://www.delta.com',
'Kayak'=>'http://www.kayak.com/',
'Amtrak'=>'http://www.amtrak.com',
'Hilton'=>'http://hhonors3.hilton.com/en/index.html',
'NYC Marathon'=>'http://www.ingnycmarathon.org/',
'New York Road Runners'=>'http://www.nyrr.org/'
);

ksort($links);

?>

<ul>

<?php foreach( $links as $text=>$uri ): ?>
	<li class="page_item"><a href="<?php echo $uri; ?>"><?php echo $text; ?></a></li>
<?php endforeach; ?>

</ul>

</div>
