<?php

$marks=80;

if($marks>=80 && $marks<=100){
    echo"congratulation,you have got A+";
}elseif($marks>=70 && $marks<80){
    echo"congratulation,you have got A";
}elseif($marks>=60 && $marks<70){
    echo"congratulation,you have got A-";
}elseif($marks>=50 && $marks<60){
    echo"congratulation,you have got B";
}elseif($marks>=40 && $marks<50){
    echo"congratulation,you have got C";
}elseif($marks>=33 && $marks<40){
    echo"congratulation,you have got D";
}elseif($marks>=0 && $marks<33){
    echo"congratulation,you have got F";
}else {
    echo"Envalid Number";
}
?>