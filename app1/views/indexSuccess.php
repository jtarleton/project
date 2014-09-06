<?php 



//session_start();
global $posts; 
$posts = WpPost::retrieveLive();
global $p;




foreach ($posts as $key => $post) : ?>
<div class="panel panel-default">
  <div class="rt panel-heading">
    <div style="float:left"><a href="sindex.php?p=postdetail&pid=<?php echo $post->getId(); ?>">
      <?php echo $post->getAttribute('post_title') ; ?></a>
    </div> 
    <?php echo date('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t G:ia', 
                          strtotime(date('m/D/Y') )) ; ?>
  </div>
  <div class="panel-body">
 <?php echo (!empty($post)) ? html_entity_decode($post->getAttribute('post_content')): null; ?>   <br />
    <hr />
 Categories: <?php
echo $post->getTagString() 

?><br />
    Tags: <?php
echo $post->getTagString();

?><br />
  </div>
</div>
<?php endforeach; ?>


     





