<?php
	// print_r($_FILES);
	$arrInfo = $_FILES['Filedata'];
	$tmpName = $arrInfo['tmp_name'];
	// var_dump($tmpName);exit;

	$realName = $arrInfo['name'];
	$ext = explode(".",$realName)[1];
	$baseName = md5(uniqid()).".$ext";
	// echo "$baseName";

	$baseDir = Date("Y/m/d/",time());
	if(!is_dir($baseDir)){
		mkdir($baseDir,0,777);
	}
	$filePath = $baseDir.$baseName;

	move_uploaded_file($tmpName,$filePath);
	echo $filePath;
?>