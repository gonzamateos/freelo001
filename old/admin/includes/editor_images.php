<?php

include_once("config.php");
include_once("login.php");
 
// files storage folder
//$dir1 = '../data/img/uploads/';
$dir1 = '../data/img/uploads/';

// files site path
$dir2 = "/conalprose/$pulse_dir/data/img/uploads/";
 
$_FILES['file']['type'] = strtolower($_FILES['file']['type']);
 
if ($_FILES['file']['type'] == 'image/png' 
|| $_FILES['file']['type'] == 'image/jpg' 
|| $_FILES['file']['type'] == 'image/gif' 
|| $_FILES['file']['type'] == 'image/jpeg'
|| $_FILES['file']['type'] == 'image/pjpeg')
{
 
    // copying
    copy($_FILES['file']['tmp_name'], $dir1.$_FILES['file']['name']);
 
    // displaying file
    $array = array(
        'filelink' => $dir2.$_FILES['file']['name']
    );
	
    echo stripslashes(json_encode($array));   
}
 
?>