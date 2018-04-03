<?php

$path_of_directory = "D:/MISCALLENIOUS/www/image_script/chopra/";

$image_name = array();
if (!is_dir_null($path_of_directory))
 {

 foreach(glob($path_of_directory . '*') as $filename){
    
  $image_name[]= substr(strrchr($filename, "/"), 1);
 }

$comma_separated = implode(",", $image_name);
$output =str_replace(",", "\n", $comma_separated);
echo $output;

} 

function is_dir_null($dir) {
  if (!is_readable($dir)) return NULL;
  $handle = opendir($dir);
  while (false !== ($entry = readdir($handle))) {
    if ($entry != "." && $entry != "..") {
      return FALSE;
    }
  }
  return TRUE;
}

?>