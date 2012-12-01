<?php include('_heading.php'); ?><div>Recent Visitors
<ul style="list-style-type:none;">
<?php 
global $visits;
foreach($visits as $visit){
	?><li><?php echo link_to($visit->ipaddress, 'http://whois.arin.net/rest/nets;q='.$visit->ipaddress.'?showDetails=true&showARIN=false');
	?> on <?php echo $visit->date;
	?></li><?php
}
?>
</ul>
</div>
