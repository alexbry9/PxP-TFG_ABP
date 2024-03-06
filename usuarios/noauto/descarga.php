  <?php
session_start();
$file = "script.ps1";
header("Content-type: application/octet-stream");
header("Content-disposition: attachment; filename=" . basename($file));
readfile($file);
?>
