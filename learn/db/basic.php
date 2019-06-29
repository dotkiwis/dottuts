<html>
<head>
<title>Connecting mysql server</title>
</head>
<body>
<form method="post">
<label id="first">Firstname:</label><br/>
<input type= "text" name="name"><br/>

<label id="first">Age:</label><br/>
<input type= "number" name="age"><br/>

<label id="first">Email:</label><br/>
<input type= "text" name="email"><br/>

<button type="submit" name="save">save</button>
<button type="submit" name= "get">get</button>
</form>
<?php

// $dbhost = 'localhost';
// $dbuser = 'root';
// $dbpass = '';
// $conn = mysqli_connect($dbhost,$dbuser,$dbpass,'student');


// }
    // $connection = mysqli_connect('localhost', 'root', ''); //The Blank string is the password
  // mysql_select_db('student');
//      $query = "SELECT * FROM test"; //You don't need a ; like you do in SQL
//      $result = mysql_query($query);

// echo "<table>"; // start a table tag in the HTML

// while($row = mysql_fetch_array($result)){   //Creates a loop to loop through results
//echo "<tr><td>" . $row['name'] . "</td><td>" . $row['age'] . "</td></tr>". $row['email'] ;  
// }

// echo "</table>"; 


$mysqli = mysqli_connect("localhost", "root", "", "student");
//echo var_dump($mysqli);
if (!$mysqli) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$getinfo = "select * from test";

if ($result = $mysqli->query($getinfo)) { 
    echo "<table border=1>";   

     while ($row = $result->fetch_object()) {
        $name = $row->name;
        $age = $row->age;
        $email =$row->email;

        echo "<tr><td>".$name . " " ."</td><td>". $age."</td></tr>";
    }
    $result->close();
}
else
{
   echo'something went wrong.';
}
echo "</table>";
?>
</body>
</html>
