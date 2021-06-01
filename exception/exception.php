<?php
class Exceptiondata{
    function __construct($name,$age){
        $this->name=$name;
        if($age<=4){
            throw new Exception("To Yang",101);
        }
        $this->age=$age;
    }
}
try{
    $s=new Exceptiondata("naeem",5);
    echo "it will neaver display";
}catch (Exception $e){
    echo $e->getCode().":".$e->getMessage();
}
