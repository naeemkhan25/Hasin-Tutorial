<?php
$file_name="/xampp/htdocs/htdocs/file/data/f2.txt";
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
//ait er same kaj korbe fputcsv
//$fp=fopen($file_name,'w');
//foreach ( $students as $student){
//    $data=sprintf("%s,%s,%s,%s\n",$student['name'],$student['id'],$student['age'],$student['department']);
//    fwrite($fp,$data);
//}
//fclose($fp);
//$fp=fopen($file_name,'w');
//foreach ( $students as $student){
//    fputcsv($fp,$student);
//}
//fclose($fp);

//$fp=fopen($file_name,'r');
//while( $data=fgetcsv($fp)){
//   print_r($data);
//}
//fclose($fp);
//some getcsv
//$fp=fopen($file_name,'r');
//while( $data=fgets($fp)){
//   $explode=explode(',',$data);
//   print_r($explode);
//}
//fclose($fp);
$data=file($file_name);
unset($data[1]);
print_r($data);
$fdata=fopen($file_name,'w');
foreach ($data as $line){
    $line=trim($line);
    fwrite($fdata,$line."\n");
}
fclose($fdata);


