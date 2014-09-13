
<?php 
/* 

FORM API

*/

//form builder
function rocks_firstform($form,&$form_state){

	# an html textfield for our drupal form
  $form['rockname'] = array(
 '#title' => t('Firstname'),
    '#type' => 'textfield',
    '#required' => TRUE,
  );

	$form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit Frm'),
  );

	return $form;
}
//form validate handler
function rocks_firstform_validate($form,&$form_state){
	
//(var_dump($form['#values']));

var_dump($form);

	return $form;
}

//form submit handler
function rocks_firstform_submit($form,&$form_state){
	return $form;
}