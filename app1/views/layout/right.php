	<div id="rightside"><!-- id="extras" -->
		<?php if(@$_SESSION['isAuth2']) : ?>
                <h2>Admin</h2>
                        <ul>
                        <li><a href="<?php echo BASEHREF; ?>admin.php?p=index">Admin</a></li>
                        </ul>

                        <h2>Session Variables</h2>
                        <ul>
                                <?php foreach (@$_SESSION as $k=>$v): ?>
                                        <li><?php echo $k .' : '. $v; ?> </li>
                                <?php endforeach; ?>
                        </ul>

                <?php endif; ?>
                <h2 class="page_item">Categories</h2>
                        <ul>
                                <li>Programming</li>
                        </ul>
                <h2>Tags</h2>
                        <ul class="avmenu">
                                <li>PHP</li>
                        </ul>
                        <h2>Sun Info</h2>
                        <ul> 
                        <?php
                        foreach (date_sun_info(
                                time(), 40.760179, -73.914168)
                                as $key => $val):
                                ?><li><?php
                                echo ucfirst(
                                        str_replace('_',' ',$key) .': '
                                                . date("g:ia", $val));
                                        ?></li><?php
                        endforeach;
                        ?>
                </ul>

		<h2>Today</h2>
			<ul><li><?php echo date('l F j\<\s\u\p\>S\<\/\s\u\p\>, Y'); ?></li>
				<li><?php echo date(' g:ia'); ?></li>
			</ul>
        </div>
