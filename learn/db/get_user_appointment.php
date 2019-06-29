<?php

$mysqli = mysqli_connect("localhost", "root", "", "appointments");
if (!$mysqli) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$getinfo = "select * from appointment"        
                                                                                                                                                                                                                                                                                                                                                                                                                                                                ;

$response = array(false,false,false,false);

if ($result = $mysqli->query($getinfo)) { 

     while ($row = $result->fetch_object()) {
        $myObj = new stdClass();
        $myObj->date = $row->date;
        $myObj->slot = $row->slot;
        

       // array_push($response, $myObj);
    }

    echo json_encode($response);


} 
?>
