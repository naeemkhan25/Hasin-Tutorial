<?php
$size=0;
$rdir=new RecursiveDirectoryIterator(getcwd(),RecursiveDirectoryIterator::SKIP_DOTS);
$files=new RecursiveIteratorIterator($rdir);
foreach ($files as $file){
    if($file->isFile()){
        $size+=$file->getSize();
    }
    if($file->getFileName()=="date.php"){
        echo $file->getPath().DIRECTORY_SEPARATOR.$file->getFileName()."<br/>";
    }
//    echo $file->getPath().DIRECTORY_SEPARATOR.$file->getFileName()."<br/>";
}
$mb=$size/10000;
echo $mb."MB";