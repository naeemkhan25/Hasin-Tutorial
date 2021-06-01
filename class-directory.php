<?php
class DirectoryData{
    private $directory;
    private $dirCount=array();
    private $fileCount=array();
    function __construct($directory)
    {
        if(is_readable($directory)) {
            $this->directory = scandir($directory);
            $this->Calculation();
        }
    }
    private function Calculation(){
       foreach ($this->directory as $entry){
            if("."!=$entry && ".."!=$entry){
                if(is_dir($entry)){
                  array_push($this->dirCount,"[d]{$entry}");
                }else{
                    array_push($this->fileCount,"[f]{$entry}");
                }
            }
        }
    }
    public function getDirectories(){
     return $this->dirCount;
    }
    public function getFile(){
      return $this->fileCount;
    }
}
$dir=new DirectoryData(getcwd());
$dirdata=$dir->getDirectories();
print_r($dirdata);
echo "<br/>";
$filedata=$dir->getFile();
print_r($filedata);