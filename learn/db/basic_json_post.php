<?php

//insert query

$json_str = file_get_contents('php://input');


// $jsondata = file_get_contents($json_string);
// $obj = json_decode($jsondata,true);

$data = json_decode($json_str); 

$name = $data->name;

echo ($name);


?>