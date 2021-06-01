<?php
$file_name="/xampp/htdocs/htdocs/file/data/f1.txt";

$open=fopen($file_name,"a");
$file_gets=fgets($open);
echo $file_gets;
fwrite($open,"rafi\n");
$dataw2=fgets($open);
echo $dataw2;
rewind($open);
fwrite($open,"mow  ");

fclose($open);