<?php
$file_name="/xampp/htdocs/htdocs/file/data/f1.txt";
if(is_writable($file_name)) {
    $data = fopen($file_name, "w");
    fwrite($data, "naeem\n");
    fwrite($data, "khan\n");
    fwrite($data, "masud\n");
    fclose($data);
}