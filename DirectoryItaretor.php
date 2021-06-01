<?php
$dir=new DirectoryIterator("./");
foreach ($dir as $file){
    if($file->isDot()){
        continue;
    }
    if($file->isDir()){
        echo $file->getPathname()."<br/>";
    }else {
        echo $file->getPathname() . $file->getSize() . "<br/>";
    }
}