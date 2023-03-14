<?php
$filename = "C:\\xampp\\htdocs\\learn_php\\module 6\\data\\f4.txt";
$students = array(
    array(
        'fname'=>'Shahin',
        'lname'=>'Ahmed',
        'age'=>12,
        'class'=>7,
        'roll'=>11
    ),
    array(
        'fname'=>'Rahim',
        'lname'=>'Ahmed',
        'age'=>11,
        'class'=>7,
        'roll'=>13
    ),
    array(
        'fname'=>'Nikhil',
        'lname'=>'Ahmed',
        'age'=>12,
        'class'=>7,
        'roll'=>14
    ),

    );

    $students = array(
        'fname'=>'Shakil',
        'lname'=>'Ahmed',
        'age'=>12,
        'class'=>7,
        'roll'=>14
    );
    //$data = serialize($students);
    //file_put_contents($filename,$data,LOCK_EX);

    $dataFromFile = file_get_contents($filname);
    $allStudents = unserialize($dataFromFile);
    print_r($allStudents);


    
