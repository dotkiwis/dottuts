<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$mysqli = mysqli_connect("localhost", "dotkiwis_wp9", "C.wNnTUO5LT0w4YVWKr68", "dotkiwis_wp9");
if (!$mysqli) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$json_str = file_get_contents('php://input');
    
$data = json_decode($json_str);
$date = $data -> date;  
$getinfo = "select * from wp_appointment where date='". $date ."'";
// echo $getinfo;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                ;

$a = array(false,false,false,false);

if ($result = $mysqli->query($getinfo)) { 

     while ($row = $result->fetch_object()) {
        $slot = $row->slot;

        if($slot == "s1") {
            $a[0] = true;
        }
        if($slot == "s2") {
            $a[1] = true;
        }
        if($slot == "s3") {
            $a[2] = true;
        }
        if($slot == "s4") {
            $a[3] = true;
        }
        

       // array_push($a, $myObj);
    }

    echo json_encode($a);


} 