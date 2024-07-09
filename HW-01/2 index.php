<?php

function Result($bike=5000,$milk=300,$copy=500,$water=400,$friend='Rahim,karim,Mobin,babo'){
    $totalMoney=$bike+$milk+$copy+$water;
    $averAgeMoney=$totalMoney/4;
    echo"congratulation,you have money $averAgeMoney";
}

Result()

?>