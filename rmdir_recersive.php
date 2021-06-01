<?php
mkdir("Test/d1/d2/d3",0777,true);
file_put_contents("test/test.php","hello");
file_put_contents("test/d1/d1.php","hello");
file_put_contents("test/d1/d2/d2.php","hello");
file_put_contents("test/d1/d2/d3/d3.php","hello");
sleep(10);
deleteDir(getcwd().DIRECTORY_SEPARATOR."Test");
function deleteDir($path){
    if(!is_readable($path)){
        return;
    }
    $scandir=scandir($path);
    if(count($scandir)>2){
        foreach ($scandir as $file){
            if("."!=$file && ".."!=$file) {
                $filepath=$path.DIRECTORY_SEPARATOR.$file;
                if(is_dir($filepath)){
                    deleteDir($filepath);
                }else {
                    unlink($filepath);
                }
            }
        }
    }
    rmdir($path);
}