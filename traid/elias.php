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
    function name1(){
        echo "good";
    }
    function name3(){
        echo "hello naeem";
    }
    function name4(){
        echo "hello mow";
    }
}
class number3{
    use number1,number2{
     number1::name1 as name11;
     number2::name1 as name111;
    }
    function name1(){
        echo "good job";
    }
}
$number2=new number3();
$number2->name11();