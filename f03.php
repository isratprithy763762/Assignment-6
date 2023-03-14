<?php
$filename = "C:\\xampp\\htdocs\\learn_php\\module 6\\data\\f2.txt";
$fp = fopen($filename,"r+");
$line = fgets($fp);
echo $line;
fwrite($fp,"Uranus\n");
$line = fgets($fp);
echo $line;
fclose($fp);
