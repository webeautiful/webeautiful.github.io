<?php
/*
* 检查上传文件夹中是否存在同名文件
*/

// Define a destination
$targetFolder = '/uploads'; // Relative to the root and should match the upload folder in the uploader script

if (file_exists($_SERVER['DOCUMENT_ROOT'] . $targetFolder . '/' . $_POST['filename'])) {
	echo 1;//存在同名文件
} else {
	echo 0;//不存在同名文件
}
?>
