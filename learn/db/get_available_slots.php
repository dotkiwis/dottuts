<?php

$mysqli = mysqli_connect("localhost", "root", "", "appointment");
if (!$mysqli) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$json_str = file_get_contents('php://input');
    
$data = json_decode($json_str);
$date = $data -> date;  
$getinfo = "select * from appointments where date='". $date ."'";
// echo $getinfo;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                ;

$response = array(false,false,false,false);

if ($result = $mysqli->query($getinfo)) { 

     while ($row = $result->fetch_object()) {
        $slot = $row->slot;

        if($slot == "s1") {
            $response[0] = true;
        }
        if($slot == "s2") {
            $response[1] = true;
        }
        if($slot == "s3") {
            $response[2] = true;
        }
        if($slot == "s4") {
            $response[3] = true;
        }
        

       // array_push($response, $myObj);
    }

    echo json_encode($response);


} 