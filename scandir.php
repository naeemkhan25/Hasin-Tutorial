<?php
$dir=scandir(getcwd());
foreach ($dir as $entry){
    if("."!=$entry && ".."!=$entry){
        if(is_dir($entry)){
            echo "[d]{$entry} <br/>";
        }else{
            echo "[f]{$entry} <br/>";
        }
    }
}
echo "<br/>";
function cuntdir($dir){
    $count_dir=0;
    $count_file=0;
    $dir=scandir($dir);
    foreach ($dir as $entry){
        if("."!=$entry && ".."!=$entry){
            if(is_dir($entry)){
               $count_dir++;
            }else{
               $count_file++;
            }
        }
    }
    return "dir=".$count_dir."<br/>"."file=".$count_file;
}
echo cuntdir(getcwd());