<?php
mkdir("test",0777,true);
file_put_contents("test/f1.text","hello");
sleep(3);
 deleteDir(getcwd().DIRECTORY_SEPARATOR."test");
 function deleteDir($path){
   $scandir=scandir($path);
   if(count($scandir)>2){
      foreach ($scandir as $file){
          if("."!=$file && ".."!=$file) {
           $filepath=$path.DIRECTORY_SEPARATOR.$file;
           unlink($filepath);
          }
      }
   }
   rmdir($path);
 }
