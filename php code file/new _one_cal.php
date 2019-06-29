<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  
</head>

<body>
    

  <div class="container">
    <h2>Table</h2>
    <table id="cable" class="table-bordered table-hover">
      <thead>
        <tr>
          <th>sun</th>
          <th>Mon</th>
          <th>Tue</th>
          <th>wed</th>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>2</td>
          <td>3</td>
          <td>4</td>

        </tr>
        <tr>
          <td>5</td>
          <td>6</td>
          <td>7</td>
          <td>8</td>
        </tr>
        <tr>
          <td>9</td>
          <td>10</td>
          <td>11</td>
          <td>12</td>
        </tr>
        <tr>
          <td>13</td>
          <td>14</td>
          <td>15</td>
          <td>16</td>
        </tr>
      </tbody>
    </table>

    <div id="myDIV">
      <h1 id="dno"></h1>
      <ul class="list-group">
        <li class="list-group-item">10AM - 11AM <button id="s1" onclick="popup(this,'s1')" data-toggle="modal"
            data-target="#exampleModal" type="button" class="btn btn-primary">Primary</button></li>
        <li class="list-group-item">11AM - 12PM <button id="s2" onclick="popup(this,'s2')" data-toggle="modal"
            data-target="#exampleModal" type="button" class="btn btn-primary">Primary</button></li>
        <li class="list-group-item">Lunch </li>
        <li class="list-group-item">2PM - 3PM <button id="s3" onclick="popup(this,'s3')"data-toggle="modal"
            data-target="#exampleModal" type="button" class="btn btn-primary">Primary</button></li>
        <li class="list-group-item">3PM - 4PM <button id="s4" onclick="popup(this,'s4')" data-toggle="modal"
            data-target="#exampleModal" type="button" class="btn btn-primary">Primary</button></li>

      </ul>
    </div>
  </div>


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h5 class="modal-title" id="titl">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form>
            <div class="form-group">
              <label for="exampleInputEmail1">Name </label>
              <input type="text" class="form-control" id="name" placeholder="Name">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Mobile</label>
              <input type="text" class="form-control" id="mob" placeholder="Mobile">
            </div>
          </form>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" onclick="apply()" data-dismiss="modal" class="btn btn-primary">Submit</button>
        </div>

      </div>
    </div>
  </div>

  <script language="javascript">
    var tbl = document.getElementById("cable");
    if (tbl != null) {
      for (var i = 0; i < tbl.rows.length; i++) {
        for (var j = 0; j < tbl.rows[i].cells.length; j++)
          tbl.rows[i].cells[j].onclick = function () {
           
             getval(this);
          };
      }
    }
    
    var date;
    
    var values = [];
    var bookedTime = [];
    var bookings  = [{ 
      date : 1,
      slots : [false,false,false,false],
      },{ 
      date : 2,
      slots : [false,false,false,false],
      },{ 
      date : 3,
      slots : [false,false,false,false],
      },{ 
      date : 4,
   slots : [false,false,false,false],
      }]
     
    function getval(cel) {
      date = cel.innerHTML;
     console.log(bookings[date-1]);  
     var buttonState = bookings[date-1].slots;
     console.log(buttonState);
      document.getElementById('s1').disabled = buttonState[0];
      document.getElementById('s2').disabled = buttonState[1];
      document.getElementById('s3').disabled = buttonState[2];
      document.getElementById('s4').disabled = buttonState[3];
      values.push(cel.innerHTML);
      console.log(values);
      console.log(cel.innerHTML);
      var x = document.getElementById("dno");
      console.log(x)
      x.innerHTML = cel.innerHTML;
  
    }
    var gslot;
    var gcurrent;
    function popup(current,slot) {
      var cbl = document.getElementById("titl");
      gcurrent = current;
      cbl.innerHTML = date + " " + slot;
      gslot = slot;
      console.log(date, slot);
    }
    function apply() {
      var name = document.getElementById("name").value;
      var mob = document.getElementById("mob").value;
      console.log(date, gslot, name, mob);
      bookedTime.push(date+"-"+gslot);
      console.log(bookedTime);
      document.getElementById("name").value = "";
      document.getElementById("mob").value = "";
      gcurrent.disabled = true;
      // slots buttons functions 
     if(gslot === 's1'){
      bookings[date-1].slots[0] = true;
     } else if(gslot === 's2'){
      bookings[date-1].slots[1] = true;
     }else if(gslot === 's3'){
      bookings[date-1].slots[2] = true;
     }else if(gslot === 's4'){
      bookings[date-1].slots[3] = true;
     }
    }
  </script>

</body>
</html>
<?php


$json_str = file_get_contents('php://input'); //string

$conn = mysqli_connect("localhost", "root", "", "calender_1"); // func returns boolean

echo var_dump($conn);

if (!$conn) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$data = json_encode($json_str); // object

$date = $data -> date;
$gslot = $data -> gslot;
$name = $data -> name;
$mob = $data -> mob;

echo var_dump($data);

if($date != "" && $slot != ""){
    // create query string
   $sql = "INSERT INTO contents(date, gslot, name, mob) VALUES ('" . $date . "','" . $gslot . "','" . $name . "','" . $mobile . "')";

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
