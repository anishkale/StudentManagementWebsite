<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = new mysqli("localhost", "root", "root") or die ("check your server connection.");


mysqli_select_db($connect,"2008b4a5723p");
$name = $_POST['name'];
$pass = $_POST['pass'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$task = $_POST['task'];
$status = $_POST['status'];


if($name=='' or $pass=='' or $branch=='' or $year=="1" or $task=='' or $status=='')
{
echo"ERROR IN REGISTRATION";
}
else{
$insert = "INSERT INTO members(username,password,branch,year,Task,Status)
values('$name','$pass','$branch','$year','$task','$status')";

$results=mysqli_query($connect,$insert) or die(mysql_error());

echo " Successfully added information";
}
?>
<form method="post" action="default.php">
<input type="submit" class="myButton" name="wel" value="click here to go to login page">
</form>

		
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" /> 
</head>
<body>
<div id="div1"></div>
</body>
</html>	

