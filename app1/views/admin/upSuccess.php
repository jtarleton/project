<div>




<!-- The data encoding type, enctype, MUST be specified as below -->
<form enctype="multipart/form-data" action="admin.php?p=up" method="POST">
    <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="6291456" />
    <!-- Name of input element determines name in $_FILES array -->
    Send this file: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>

<?php

if(isset($_FILES)){
// In PHP versions earlier than 4.1.0, $HTTP_POST_FILES should be used instead
// of $_FILES.

$uploaddir = '/var/project/public/uploads/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "File is valid, and was successfully uploaded.\n";
} else {
    echo "Possible file upload attack!\n";
}

echo 'Here is some more debugging info:';
print_r($_FILES);
/* 


UPLOAD_ERR_OK
Value: 0; There is no error, the file uploaded with success.

UPLOAD_ERR_INI_SIZE
Value: 1; The uploaded file exceeds the upload_max_filesize directive in php.ini.

UPLOAD_ERR_FORM_SIZE
Value: 2; The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.

UPLOAD_ERR_PARTIAL
Value: 3; The uploaded file was only partially uploaded.

UPLOAD_ERR_NO_FILE
Value: 4; No file was uploaded.

UPLOAD_ERR_NO_TMP_DIR
Value: 6; Missing a temporary folder. Introduced in PHP 4.3.10 and PHP 5.0.3.

UPLOAD_ERR_CANT_WRITE
Value: 7; Failed to write file to disk. Introduced in PHP 5.1.0.

UPLOAD_ERR_EXTENSION
Value: 8; A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop; examining the list of loaded extensions with phpinfo() may help. Introduced in PHP 5.2.0.





*/
print "</pre>";


} ?>






</div>
