<div class="main" role="main">



<p>


<?php if( isset( $_GET['code']) ) {



echo 'Received token '. strip_tags($_GET['code']);

}

?>
</p>

<table id="example" style="margin:0;">
                        <thead style="margin:0;">
                                <tr><th>id</th><th>date</th>

                                        <th>activity_type</th><th>distance</th>

                                        <th>time</th><th>felt</th>
                                </tr>
                        </thead>
			<tbody></tbody>
                        <tfoot style="margin:0;">
                                <tr><th></th><th></th><th></th><th></th><th></th><th></th>
                                </tr>
                        </tfoot>
                </table>
</div>  
