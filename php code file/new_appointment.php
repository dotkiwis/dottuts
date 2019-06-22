<?php


$json_str = file_get_contents('php://input'); //string

$conn = mysqli_connect("localhost", "root", "", "calender"); // func returns boolean

echo var_dump($conn);

if (!$conn) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$data = json_decode($json_str); // object

$date = $data -> date;
$slot = $data -> slot;
$name = $data -> name;
$mobile = $data -> mobile;

echo var_dump($data);

if($date != "" && $slot != ""){
    // create query string
   $sql = "INSERT INTO appointment(date, slot, name, mobile) VALUES ('" . $date . "','" . $slot . "','" . $name . "','" . $mobile . "')";

   echo $sql;

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