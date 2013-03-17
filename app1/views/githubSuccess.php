<div id="content"  style="vertical-align:top">
<h2>Site Updates</h2>
<table id="example2" style="margin:0;width:100%;">
                        <thead style="margin:0;">
                                <tr><th>Date</th><td>Action</td>
                                </tr>
                        </thead>
                        <tbody>
<?php 
$sxml=simplexml_load_file('https://github.com/jtarleton.atom'); 
foreach($sxml->children() as $x):
if( empty($x->title)): 
continue; 
else:
?>





<tr><td><?php 
echo strtotime($x->updated).' '. date('m/d/Y g:i:s', strtotime($x->updated)); 
?></td><td><?php echo ' '.link_to($x->title,  $x->link->attributes()->href) ; ?></td></tr>
<?php 
endif;
endforeach;
?>


</tbody>
                        <tfoot style="margin:0;">
                                <tr><th></th><td></td>
                                </tr>
                        </tfoot>
                </table>
</div>

