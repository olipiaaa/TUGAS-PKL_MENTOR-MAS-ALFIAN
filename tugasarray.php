<?php

$data = ['1', '2', '3', '4', '5'];

function sapi(){
 global $data;
    array_push($data, 9);

}
echo "<pre>";
function meong(){
    global $data;
    unset($data[2]);
}

sapi();
  print_r($data);
meong();
  print_r($data);



?>
