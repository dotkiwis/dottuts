<!DOCTYPE html>
<html>
<head>
    <head>
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="http://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
   
     <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
    
</head>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "calender";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM appointment";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table id='example'  class='display' style='width:100%'><tr> <th>Name</th> <th>Date</th> <th>slot</th> <th>mobile</th>  <th>id</th>   </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["name"]. "</td> <td>" . $row["date"]. "</td> <td>" . $row["slot"]. "</td> <td>" . $row["mobile"]. "</td><td>" . $row["id"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 




</body>
</html>