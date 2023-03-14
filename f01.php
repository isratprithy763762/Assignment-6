<?php
$filename = "C:\\xampp\\htdocs\\learn_php\\module 6\\data\\f1.txt";
$fp = fopen($filename, 'r');
$line = fgets($fp);
echo $line;
$line = fgets($fp);
echo $line;

while ($line = fgets($fp,5)){
    echo $line;
}
rewind($fp);
fseek($fp,8);
fseek($fp,-1,SEEK_END);

fclose($fp);

$data = file($filename);
echo $data[2];
print_r($data);
