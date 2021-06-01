<?php
class networkexception extends Exception{};
class ServerloadException extends Exception{};
class DiskfullException extends Exception{};
interface networkstorage {
    function connection();
    function connectName();
}
class networkConnection implements networkstorage{
    function connection()
    {
        throw new networkexception;
    }
    function connectName(){
        return "networkConnection";
    }
}
class Serverload implements networkstorage{
    function connection()
    {
        return $this;
    }
    function connectName(){
        return "Serverload";
    }
}
class Diskfull implements networkstorage{
    function connection()
    {
        throw new DiskfullException;
    }
    function connectName(){
        return "Diskfull";
    }
}
class connectionPool{
    private $connect;
    private $storage;
    function __construct(){
        $this->storage=array();
    }
    public function addStorage(networkstorage $storage){
        array_push($this->storage,$storage);
    }
    public function connectoption(){
        foreach ( $this->storage as $store){
            try{
                $this->connect=$store->connection();
            }catch (networkexception $e){
                echo $store->connectName()." "."network error"."<br/>";
            }catch (ServerloadException $e){
                echo $store->connectName()." "."ServerloadException error"."<br/>";
            }catch (DiskfullException $e){
                echo $store->connectName()." "."DiskfullException error"."<br/>";
            }
            if($this->connect){
                break;
            }
        }
        if($this->connect){
            return $this->connect;
        }
        return false;
    }

}
$networkConnection=new networkConnection();
$load=new Serverload();
$Diskfull=new Diskfull();
$connectionPool=new connectionPool();
$connectionPool->addStorage($networkConnection);
$connectionPool->addStorage($load);
$connectionPool->addStorage($Diskfull);
$c=$connectionPool->connectoption();
print_r($c);
