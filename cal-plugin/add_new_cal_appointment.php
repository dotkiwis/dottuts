<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");



$json_str = file_get_contents('php://input'); //string
// echo $json_str;

$conn = mysqli_connect("localhost", "dotkiwis_wp9", "C.wNnTUO5LT0w4YVWKr68", "dotkiwis_wp9"); 

// echo var_dump($conn);

if (!$conn) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$data = json_decode($json_str); // object

$date = $data -> date;
$slot = $data -> slot;
$name = $data -> name;
$mobile = $data -> mobile;
$email = $data -> email;
$message = $data -> message;
$person = $data -> person;
$place = $data -> place;


// echo var_dump($data);

if($date != "" && $slot != ""){
    // create query string
   $sql = "INSERT INTO wp_appointment(date, slot, name, mobile,email,message) VALUES ('" . $date . "','" . $slot . "','" . $name . "','" . $mobile . "','" . $email . "','" . $message . "')";

//    echo $sql;

    // execute sql
    if ($conn->query($sql) === TRUE) {
        echo "Data Succesfully Inserted";
    } else {
    //echo mysql_error();
        echo "Error";
    }
} else {
    echo "Date Can't be null";
}
?>