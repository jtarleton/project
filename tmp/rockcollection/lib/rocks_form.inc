
<?php 
/* 

FORM API

*/


function rocks_firstform($form,&$form_state){
	$form['submit'] = array(
    '#type' => 'submit',
    '#value' => t('Submit Frm'),
  );

	return $form;
}
function rocks_firstform_validate($form,&$form_state){
	return $form;
}
function rocks_firstform_submit($form,&$form_state){
	return $form;
}