<div id="content">

<p><?php echo link_to('Back to stuff', '?p=jamessstuff'); ?></p>



<h2>Item <?php echo PersonalInv::getInstance($_GET['invid'] )->data['_id'] ?></h2>


<p>

<?php echo PersonalInv::getInstance( $_GET['invid'] )->data['description']; ?>

</p>
</div>
