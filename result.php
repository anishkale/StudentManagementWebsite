<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}

$connect = new mysqli("localhost", "root", "root") or die ("check your server connection");
$uname= $_GET['myusername'];
$upass= $_GET['mypassword'];

$_SESSION['username']=$uname;
$_SESSION['pass']=$upass;

mysqli_select_db($connect,"2008b4a5723p");
$query="SELECT * FROM members WHERE username='$uname'";

$results=mysqli_query($connect,$query) or die(mysql_error());

if($row = mysqli_fetch_array($results))
  { echo"Welcome ". $row['username'] ."!!<br/>";
  echo "<table  style='width:50%'>
USER INFORMATION<tr>

<th>USERNAME</th>

<th>BRANCH</th>
<th>YEAR OF STARTING</th>
<th>TASK</th>
<th>TASK ID</th>
<th>Status</th>
</tr>";
  
  echo "<tr>";

  echo "<td>" . $row['username'] . "</td>";
  
  echo "<td>" . $row['branch'] . "</td>";
  echo "<td>" . $row['year'] . "</td>";
  echo "<td>" .$row['Task'] . "</td>";
  echo "<td>" .$row['id'] . "</td>";
  echo "<td>" . $row['Status'] . "</td>";
  
  echo "</tr>";
  }
  else{
  echo"LOGIN FAILED(INVALID USERNAME OR PASSWORD)";
  exit();
  }
echo "</table>";

?>

<html>
<head>
<title>STUDENT REGISTRATION</title>
</head>
<body>

<form method="post" action="update_data.php">
<br/>
<h4>UPDATE TASKS</h4>
TASK ID :<input type="text" name="id"><br/>
New Status :<input type="text" name="Status"><br/>

<input type="submit" class="myButton" name="submit" value="Update">

</form>
</body>


</html>	

<html>
<head>
</head>
<body>
<div id="div1"></div>
</body>
</html>	









