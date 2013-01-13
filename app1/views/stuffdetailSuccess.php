<div id="content"><h2>Item <?php echo PersonalInv::getInstance($_GET['invid'] )->data['_id'] ?></h2>

<p>

<?php echo PersonalInv::getInstance( $_GET['invid'] )->data['description']; ?>

</p>
</div>
