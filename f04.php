<?php
$filename = "C:\\xampp\\htdocs\\learn_php\\module 6\\data\\f2.txt";
file_put_contents($filename,"Mars\n",FILE_APPEND || LOCK_EX);
file_put_contents($filename,"jupiter\n",FILE_APPEND || LOCK_EX);
