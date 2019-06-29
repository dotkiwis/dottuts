<?php

$mysqli = mysqli_connect("localhost", "root", "", "student");
if (!$mysqli) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$getinfo = "select * from test"                                                                                                                                                                                                                                                                                                                                                                                                                                                                        ;

$response = array();

if ($result = $mysqli->query($getinfo)) { 

     while ($row = $result->fetch_object()) {
        $myObj = new stdClass();
        $myObj->name = $row->name;
        $myObj->age = $row->age;
        $myObj->email =$row->email;

        array_push($response, $myObj);
    }

    echo json_encode($response);

    $result->close();
}else{
   echo'something went wrong.';
}
?>
