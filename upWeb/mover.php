<?php

$pid = basename($_GET["prodref"]);
$dir = "uploads/";

if (is_dir_empty($dir)) {
  echo "<script> window.location.replace('../convertWeb/index.php') </script>";
} else
{
  echo "<script> window.location.replace('../listWeb/') </script>";
}

function is_dir_empty($dir) {
  if (!is_readable($dir)) return NULL;
  return (count(scandir($dir)) == 2);
}

 ?>
