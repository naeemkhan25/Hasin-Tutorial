<?php
$startTime=microtime(true);
 factorial(5);
$endTime=microtime(true);
$exTime=$endTime-$startTime;
printf("%10.8f",$exTime);
//function fac($n){
//    $result=1;
//    for($i=1;$i<=$n;$i++){
//        $result=$result*$i;
//    }
//    return $result;
//}
//function fac($n){
//    $result=1;
//    for($i=$n;$i>1;$i--){
//       $result=$result*$i;
//    }
//        return $result;
//}
function factorial($number) {

    if ($number < 2) {
        return 1;
    } else {
        return ($number * factorial($number-1));
    }
}