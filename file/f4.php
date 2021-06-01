<?php
$file_name="/xampp/htdocs/htdocs/file/data/f1.txt";
$file_open=fopen($file_name,"a+");
$file_1=fgets($file_open);
echo $file_1;
fwrite($file_open,"whatd");
$file_2=fgets($file_open);
echo $file_2;
fclose($file_open);
