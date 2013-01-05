

                <div id="leftside">

                                <h2 class="hide">Main menu:</h2>
                                <ul class="page">
                                        <?php $highlight = "page_item current_page_item"; ?>
                                        <li class="<?php echo $highlight; ?>"><a href="<?php echo BASEHREF; ?>">Home</a></li>



<?php if(!(@$_SESSION['isAuth2'])) : ?>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=login">Log In</a></li>
<?php elseif(@$_SESSION['isAuth2']): ?>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=logout">Log Out <?php echo $_SESSION['username']; ?></a></li>
<?php else: die('An unexpected error has occurred.'); endif; ?>



<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=otherplaces">Other Places</a></li>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=cats">Category Index</a></li>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=tags">Tag Index</a></li>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=about">About</a></li>
<li class="page_item"><a href="<?php echo BASEHREF; ?>?p=github">Change Log</a></li>
<li class="page_item"><a href="https://gist.github.com/jtarleton">My Gists</a></li>







                                        <!-- <li class="page_item"><a href="<?php echo BASEHREF;
?>subwayfind.php">Subway Finder v.1.0</a></li> -->
                                </ul>

                </div>




