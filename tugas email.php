<?php
$arr = [
    [
        "name" => "Reza",
        "email" => "reza123@email.com"
    ],
    [
        "name" => "Haris",
        "email" => "haris123@email.com"
    ],
];
   

function login(){
    global $arr;
    foreach ($arr as $datas){      
        foreach ($datas as $key => $value){
            echo "{$key}:{$value} ";
            echo "</br>";
        }
    }
}
login();
?>