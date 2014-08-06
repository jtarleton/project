
<?php 



$time = new DateTime('now', new DateTimeZone('America/New_York'));

$sts = date_sunset(
$time->getTimestamp(),
SUNFUNCS_RET_TIMESTAMP,
40.691502,
-73.805702,
90.2605,
$time->getOffset() / 3600
)
;

echo 'Sunset: <br />'.
date('l jS \of F Y ',  $sts);
?>
<br />
<?php 

echo date('h:i:s A', $sts);

