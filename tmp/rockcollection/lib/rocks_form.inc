
<?php 
/* 

FORM API

*/

//form builder
function rocks_firstform($form,&$form_state){

	# an html textfield for our drupal form
  $form['rockname'] = array(
    '#type' => 'textfield',
    '#title' => t('Rock Name'),
  );

	$form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit Frm'),
  );

	return $form;
}
//form validate handler
function rocks_firstform_validate($form,&$form_state){
	
die(var_dump($form));
	return $form;
}

//form submit handler
function rocks_firstform_submit($form,&$form_state){
	return $form;
}