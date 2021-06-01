<?php
trait number1{
    function name1(){
        echo "hello naeem";
    }
    function name2(){
        echo "hello mow";
    }
}

//extent kore tarit run hoy
class data{
    function name1(){
        echo "hi data";
    }
}
//trait e nijer function gulo piroty besi pay.
//ekhane khan run hoibe
class number2 extends data {
    use number1;
//    function name1()
//    {
//        echo "hi khan";
//    }
}
$number2=new number2();
$number2->name1();