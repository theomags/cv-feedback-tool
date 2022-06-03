<?php
// Removes uploaded files from a directory uploads
$targetPath = $_SERVER['DOCUMENT_ROOT'].'/upWeb/uploads';
$targetFile = glob($targetPath.'/*');

foreach ($targetFile as $file) {
  if(is_file($file)){
    unlink($file);
  }
}
?>
