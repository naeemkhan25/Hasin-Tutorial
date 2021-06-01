<?php
$file_dir="c:\\xampp\\htdocs\\htdocs\\file\\data\\f.txt";
if(is_readable($file_dir)) {
    $fp = fopen($file_dir, 'r');
    while ($line = fgets($fp)) {
//    echo $line;
    }
    rewind($fp);
    fseek($fp, -1, SEEK_END);
    while ($line = fgets($fp, 4)) {
//    echo $line."-";
    }
    $file = file($file_dir);
//print_r($file);
    echo $file[2];
    $data = file_get_contents($file_dir);
    print_r($data);
    fclose($fp);
}
