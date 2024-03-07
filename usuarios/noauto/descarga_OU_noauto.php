  <?php
session_start();
$file = "OUnoauto.ps1";
header("Content-type: application/octet-stream");
header("Content-disposition: attachment; filename=" . basename($file));
readfile($file);
?>
