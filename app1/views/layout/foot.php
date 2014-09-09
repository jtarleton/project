 <!-- /row -->
    </div>


<div class="col-md-4">


<div class="bs-component">
<div class="panel panel-default">
<div class="panel-heading">Recent Posts
</div>
<div class="panel-body"><ul style="text-indent:0; margin:0;padding:0;">
    <?php foreach(WpPost::retrieveLive() as $postObj): ?>
<li><?php echo $postObj->getAttribute('post_title'); ?></li>
<?php endforeach; ?>
</ul>
<br />
</div>
</div> 
</div>

<div class="bs-component">
<div class="panel panel-default">
<div class="panel-heading">Tags
</div>
<div class="panel-body">
<ul style="text-indent:0; margin:0;padding:0;">
    <?php foreach(WpTerm::retrieveAll() as $tObj): ?>
<li><?php echo link_to('sindex.php?p=tagged&tag=' . $tObj->getAttribute('name'), $tObj->getAttribute('name')); ?></li>
<?php endforeach; ?>
</ul><br />
</div>
</div> 
</div>

<div class="bs-component">
<div class="panel panel-default">
<div class="panel-heading">Categories
</div>
<div class="panel-body">
<ul style="text-indent:0; margin:0;padding:0;">
    <?php foreach(WpTerm::retrieveAll('category') as $tObj): ?>
<li><?php echo $tObj->getAttribute('name'); ?></li>
<?php endforeach; ?>
</ul><br />
</div>
</div> 
</div>

<div class="bs-component">
<div class="panel panel-default">
<div class="panel-heading">Archives
</div>
<div class="panel-body">
<ul style="text-indent:0; margin:0;padding:0;">
   
<?php
 $months = array();

 for ($i = 1; $i <= 12; $i++) 
    {
 $months[] = date('F', mktime(0, 0, 0,  $i, 1));
 
}


  $months = array_reverse($months, true);

foreach(range(2012, 2013) as $y)
{

foreach($months as $key =>$value)
{
 echo      '<li>'.$value .' '. $y.'</li>';
}
}
?>


</ul></div>
</div> 
</div>


Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</div>

<br />
<br />
<br /> 






<div class="col-md-12" style="border-bottom:1px solid #4e5d6c; min-width:100%;">
    <div class="bs-component">
    <ul class="pagination pagination-sm">
    <li class="disabled"><a href="#">&laquo;</a></li>
    <li class="active"><a href="#">1</a></li>
    <li><a href="#">2</a></li>
    <li><a href="#">3</a></li>
    <li><a href="#">4</a></li>
    <li><a href="#">5</a></li>
    <li><a href="#">&raquo;</a></li>
    </ul>
    </div>
</div>



	<div style="">

	<div class="col-md-4">Coded in the U.S.A. using vi, Coda, and <a href="http://www.sublimetext.com/">SublimeText</a><br /><br /><br /><br />  
	</div>
	<div class="col-md-4">©2013 James <br /><br /><br /><br />
	</div>
	<div class="col-md-4"><a href="http://validator.w3.org/check?uri=<?php echo urlencode(SBASEHREF).'sindex.php'; ?>&charset=%28detect+automatically%29&doctype=Inline&group=0">HTML 5</a> rendered in: 0.03 microseconds<br /><br /><br /><br />
	</div> 
	</div>


    <!-- /row -->
    </div>






      <!-- /row -->
    </div>




























</div> <!-- /row -->
</div> <!-- /container -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://www.crystalbit.com/tbs/bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>
</body>
</html>