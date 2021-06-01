<?php
trait number1{
    function name1(){
        echo "hello naeem";
    }
    function name2(){
        echo "hello mow";
    }
}
trait number2{
    function name3(){
        echo "hello naeem";
    }
    function name4(){
        echo "hello mow";
    }
}
class Number4{
    use number1,number2;
}
$Number4=new Number4();
$Number4->name1();
