<?php
$file_name="/xampp/htdocs/htdocs/file/data/f3.txt";
$students=array(
    array(
        "name"=>"naeem",
        "id"=>191015153,
        "age"=>24,
        'department'=>'cse'
    ),
    array(
        "name"=>"khan",
        "id"=>191015157,
        "age"=>23,
        'department'=>'cse'
    ),
    array(
        "name"=>"mow",
        "id"=>191015154,
        "age"=>22,
        'department'=>'cse'
    ),
    array(
        "name"=>"tarikul",
        "id"=>191015145,
        "age"=>24,
        'department'=>'cse'
    ),
);
$student2=array(
    "name"=>"love",
    "id"=>191015145,
    "age"=>24,
    'department'=>'cse'
);
array_push($students,$student2);
//$student=json_encode($students);
//file_put_contents($file_name,$student,LOCK_EX);
$file_get=file_get_contents($file_name);
$data=json_decode($file_get,true);
print_r($data);