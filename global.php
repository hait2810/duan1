<?php 
ini_set('display_errors', 1);
error_reporting(1);
session_start();
$ROOT = '/duannew/duAn1-nhom2';
$ROOT_ADMIN = '/duannew/duAn1-nhom2/cpanel';
$PATH_IMG = $_SERVER['DOCUMENT_ROOT'] . $ROOT . '/assets/images';
function upload_file($file,$path_dir){
    $file_upload = $_FILES[$file];
    $file_name = $file_upload['name'];
    $path_file_dir = $path_dir . $file_name;
    move_uploaded_file($file_upload['tmp_name'], $path_file_dir);
    return $file_name;
}
?>