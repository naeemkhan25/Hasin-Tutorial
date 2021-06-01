<?php
class DirectoryData{
    private $directory;
    private $dirCount=array();
    private $fileCount=array();
    private $path;
    private $dirobject=array();
    function __construct($directory)
    {
        if(is_readable($directory)) {
            $this->path=$directory;
            $this->directory = scandir($directory);
            foreach ($this->directory as $entry){
                if("."!=$entry && ".."!=$entry){
                    if(is_dir($this->path.DIRECTORY_SEPARATOR.$entry)){
                        array_push($this->dirCount,$entry);
                    }else{
                        array_push($this->fileCount,$entry);
                    }
                }
            }
        }
    }
    public function getDirectories(){
        return $this->dirCount;
    }
    public function subDirectories($select_dir){
        if(isset($this->dirCount[$select_dir])){
            if(!isset($this->dirobject[$select_dir])){
                echo "Create a new Object<br/>";
                $this->dirobject[$select_dir]=new DirectoryData($this->path.DIRECTORY_SEPARATOR.$this->dirCount[$select_dir]);
            }else{
                echo "Old Object Call";
            }
           return $this->dirobject[$select_dir];
        }else{
            throw new Exception("this index not exits");
        }

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
echo "<br/>";
$subdir=$dir->subDirectories(4);
$dird=$subdir->getDirectories();
print_r($dird);
//$dird=$subdir->getFile();
//print_r($dird);
$dataon=$subdir->subDirectories(0);
$f=$dataon->getFile();
print_r($f);
