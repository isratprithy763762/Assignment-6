<?php
$filename = "C:\\xampp\\htdocs\\learn_php\\module 6\\data\\f2.txt";
//$existingData=filE_get_contents($filename);

$fp = fopen($filename, "a");
//$fwrite($fp, $existingData);
fwrite($fp,"Mercury\n");
fwrite($fp,"Venus\n");
fclose($fp);

?>