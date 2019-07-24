<?php
session_start();

$connect = new mysqli("localhost", "root", "root") or die ("check your server connection");


mysqli_select_db($connect,"2008b4a5723p");
$query="SELECT * FROM members";
$result = $connect->query($query);
if ($result->num_rows > 0) {
echo "<table  style='width:50%'>

<tr>

<th>USERNAME</th>

<th>BRANCH</th>
<th>YEAR OF STARTING</th>
<th>TASK</th>
<th>TASK ID</th>
<th>Status</th>
</tr>";

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr>";

  echo "<td>" . $row['username'] . "</td>";
  
  echo "<td>" . $row['branch'] . "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "<td>" .$row['Task'] . "</td>";
  echo "<td>" .$row['id'] . "</td>";
  echo "<td>" . $row['Status'] . "</td>";
  
  echo "</tr>";

    }
}
 else {
    echo "0 results";
}

?>
<html>
<head>
<title>STUDENT REGISTRATION</title>
</head>

<body>
<form method="post" action="add_data.php">
<br/>
<h4>ADD TASKS</h4>
Username:<input type="text" name="username"><br/>
TASK Name :<input type="text" name="task"><br/>
Status :<input type="text" name="status"><br/>
Branch:<input type="text" name="branch"><br/>
Year of Starting:<input type="text" name="year"><br/>
<input type="submit" class="myButton" name="submit" value="Update">
<br></br>
</body>
</html>



</html>	

<html>
<head>
</head>
<body>
<div id="div1"></div>
</body>
</html>	





