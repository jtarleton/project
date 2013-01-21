<?php 

class ObjectPresenter 
{


























static public function prin(array $objs)
{


















$r= 0;


foreach ( $objs as $p): 

//echo gettype($p);  

$r++;  ?>

<?php


if($p instanceof WpPost ): ?>


<div class="post">
        <h2> <?php echo link_to($p->getAttribute('post_title'), 'index.php?p=postdetail&pid=' . $p->getId()) ; ?></h2>

        <div class="contenttext <?php //echo zebraClass($r); ?>">
<p>
                <?php

$string = tokenTruncate($p->getAttribute('post_content'), 500);
echo strip_tags( $string);
                ?><span>...</span></p><p><?php echo link_to('Read &gt;', 'index.php?p=postdetail&pid=' . $p->getId()); ?></p>

                <p class="postinfo">Posted by root on <?php echo date('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t g:ia', time()); ?><br />
                        <strong>Tags: 





<?php 
$names = array();
foreach( $p->getTags() as $termObj ) $names[]=$termObj->getAttribute('name');
echo implode(', ',$names);
?>

</strong> | <strong>Comments: 0</strong>
                </p>
        </div>
</div>

<?php elseif(is_object($p) ): ?>
<?php

$format = '<div class="post"><div style="background-color: beige;">%s</div></div>';
switch(get_class($p)):
case 'stdClass':
//echo sprintf($format, gettype($p) );
break;
default: break; 
endswitch;

endif; ?>

<?php endforeach; 
























}




}
