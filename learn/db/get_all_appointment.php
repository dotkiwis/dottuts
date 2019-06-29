
<?php

$mysqli = mysqli_connect("localhost", "root", "", "calender");
if (!$mysqli) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$getinfo = "select * from appointment";

$response = array();

if ($result = $mysqli->query($getinfo)) { 

     while ($row = $result->fetch_object()) {
        $myObj = new stdClass();
        $myObj->id = $row->id;
        $myObj->date = $row->date;
        $myObj->slot =$row->slot;
        $myObj->name=$row->name;
        $myObj->mobile=$row->mobile;

        array_push($response, $myObj);
    }

    echo json_encode($response);

    $result->close();
}else{
   echo'something went wrong.';
}
?>
