<?php 



//session_start();
global $posts; 
$posts = WpPost::retrieveLive();
global $p;


/* 
if(1):
                            echo $post->getAttribute('post_title') ; endif;
                ?>

            <?php echo (!empty($post)) ? html_entity_decode($post->getAttribute('post_content')): null; ?>


                echo (!empty($post))

                    ? '<a href="sindex.php?p=postdetail&pid='
                            .$post->getId().'">Read &gt;'
                            .'</a>'

                    : Null;

                    <time>
                    <?php echo (!empty($post)) 
                    ? date('l, F j\<\s\u\p\>S\<\/\s\u\p\>, Y \a\t G:ia', 
                        strtotime(date('m/D/Y') )) 
                    : null; ?>  
                    </time>

                    <?php if( @$_SESSION['isAuth2']==1) : ?>

                        <a href="admin.php?p=edit&pid=<?php //echo $post->getId(); ?>">E</a>
                        <a onclick="return postToFeed('<?php //echo  $post->getAttribute('post_title'); ?>',
                        'Lorem ipsum dolor sit amet.<?php //echo $post->getAttribute('post_content'); ?>');">Post to Feed
                        </a>
                     */ ?>



                     <!-- 
<div class="alert alert-dismissable alert-warning">
<button type="button" class="close" data-dismiss="alert">&times;</button>
<h4>Warning!</h4>
<p>Nulla vitae elit libero, a pharetra augue. Praesent commodo cursus magna, <a href="#" class="alert-link">vel scelerisque nisl consectetur et</a>.</p>
</div> -->
<?php if(0): ?>
<!-- Panel -->
<div class="panel panel-default">
  <div class="rt panel-heading"><div style="float:left">Post</div> 1 June 2012</div>
  <div class="panel-body">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    <code><pre>&lt;?php 
    for ($i=0; $i < ; $i++) { 
      //code...
      echo 'dfksdjlkj';
      echo 'dfksdjlkj';
      echo 'dfksdjlkj';
      echo 'dfksdjlkj';
      echo 'dfksdjlkj';
    }
    ?&gt;</pre>
    </code>     
    <br />
  <hr />
  Categories: <a href="">Foo</a>, <a href="">Bar</a><br />
  Tags: <a href="">Qux</a>, <a href="">Baz</a><br />
  </div>
</div> 

<!-- nested 2 column row-->
<div class="row">
  <!-- col1 -->
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="rt panel-heading"><div style="float:left">Post</div>1 June 2012</div>
      <div class="panel-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 

        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
        mollit anim id est laborum.
        <br />
        <hr />
        Categories: <a href="">Foo</a>, <a href="">Bar</a><br />
        Tags: <a href="">Qux</a>, <a href="">Baz</a><br />
      </div>
    </div> 
  </div>
  <!-- /col1 -->
  <!-- col2 -->
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="rt panel-heading"><div style="float:left">Post</div>1 June 2012</div>
      <div class="panel-body">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris 

        nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum 
        dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt 
        mollit anim id est laborum.
        <br />
        <hr />
        Categories: <a href="">Foo</a>, <a href="">Bar</a><br />
        Tags: <a href="">Qux</a>, <a href="">Baz</a><br />
      </div>
    </div> 
  </div>
  <!-- /col2 -->
</div><!-- /row --><?php endif; ?>
<?php  foreach ($posts as $key => $post) : ?>
<div class="panel panel-default">
  <div class="rt panel-heading"><div style="float:left"><a href="sindex.php?p=postdetail&pid=<?php echo $post->getId(); ?>"><?php echo $post->getAttribute('post_title') ; ?></a></div> 1 June 2012</div>
  <div class="panel-body">
 <?php echo (!empty($post)) ? html_entity_decode($post->getAttribute('post_content')): null; ?>   <br />
    <hr />
    Categories: <a href="">Foo</a>, <a href="">Bar</a><br />
    Tags: <a href="">Qux</a>, <a href="">Baz</a><br />
  </div>
</div> 
<?php endforeach; ?>


      <!-- /row -->
    </div>






