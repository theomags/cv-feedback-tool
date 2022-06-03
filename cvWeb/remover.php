<?php
// Removes uploaded files from a directory uploads
$targetPath = $_SERVER['DOCUMENT_ROOT'].'/upWeb/uploads/CV.pdf';
unlink($targetPath);
 ?>
