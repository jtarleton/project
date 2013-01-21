<div>
<div style="overflow:auto;">
<table style="border-collapse:collapse;table-layout:auto;">

<?php

$rows =  DailyMileClient::getInstance()->getRecentEntries('jtarleton');
$g=0;
if(!empty( $rows  )):

        foreach( $rows as $arr)

                foreach($arr as $r):

                        Utils::printEntry($r, $g); $g++; 

                                endforeach; ?>

<?php else: ?>

                        <tr><td>Nada</td></tr>
<?php endif; ?>

</table>




<?php

//echo paginated_links( WpTerm::retrieveAll()->count(), 10 , @$_GET['s'], 'admin');

?>

</div>
</div>
