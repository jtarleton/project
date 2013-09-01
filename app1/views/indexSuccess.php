<?php 



//session_start();
global $posts; 
global $p;
//$path='/home/tarlejh/project/app1/views/xml/index_xml.php';
 




$s = isset($_GET['s'] ) ? $_GET['s']  : 1;

$r=0;

$new = array(); 

?>


<div class="main" role="main">


<?php 

foreach( WpPost::retrieveLive( $s ) as $post ) :

    $new[] = $p;

    $new[] = new stdClass;
    $new[] = new stdClass;

    //ObjectPresenter::prin($new); 
?>


<article class="entry %s">

    <header>

        <h1>

        <?php

                            echo $post->getAttribute('post_title') 
                ?>
        </h1>


    </header>


<article class="entry">
<p>
   <!-- <div class="post">

       <article class="entry">
-->
            <?php echo (!empty($post)) ? $post->getAttribute('post_content'): null; ?>



		     <?php

                echo (!empty($post))

                    ? '<a href="index.php?p=postdetail&pid='
                            .$post->getId().'">Read &gt;'
                            .'</a>'

                    : Null;

                ?>


</p>

            <footer>

                <p>Posted by James on 

                    <time>
                    <?php echo (!empty($post)) 
                    ? date('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t G:ia', 
                        strtotime(date('m/D/Y') )) 
                    : null; ?>  
                    </time>

                    <?php if( @$_SESSION['isAuth2']==1) : ?>

                        <a href="admin.php?p=edit&pid=<?php echo $post->getId(); ?>">E</a>
                        <a onclick="return postToFeed('<?php echo  $post->getAttribute('post_title'); ?>',
                        'Lorem ipsum dolor sit amet.<?php //echo $post->getAttribute('post_content'); ?>');">Post to Feed
                        </a>
                        </p>
                        <div id='fb-root'></div>
                        <p id='msg'></p>

                    <?php endif; ?>

                </p>
               
                <p>

                <strong>Tags: <?php echo $post->getTagString() ?></strong> 

                </p>

            </footer>

        </article>



<?php endforeach;
?>
<br />
<?php

echo paginated_links( 12, 2, $s  );

?>


</div><!-- // Main -->





