<?php
Const FILEPATH="/xampp/htdocs/htdocs/filesytem/pathinfo.php";
//$file_baseName=pathinfo(FILEPATH,PATHINFO_BASENAME);
//output pathinfo.php;
//$filedir=pathinfo(FILEPATH,PATHINFO_DIRNAME);
//echo $filedir;
//$file_extention=pathinfo(FILEPATH,PATHINFO_EXTENSION);
//echo $file_extention;
$fileName=pathinfo(FILEPATH,PATHINFO_FILENAME);
echo $fileName;