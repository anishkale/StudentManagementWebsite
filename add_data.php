<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = new mysqli("localhost", "root", "root") or die ("check your server connection.");

mysqli_select_db($connect,"2008b4a5723p");
$task = $_POST['task'];
$year = $_POST['year'];
$status = $_POST['status'];
$branch = $_POST['branch'];
$username = $_POST['username'];


if($year=="1" or $task=='' or $status=='' or $branch='')
{
echo"ERROR IN REGISTRATION";
}
else{
$insert = "INSERT INTO members(username,branch,year,Task,Status)
values('$username','$branch','$year','$task','$status')";

$results=mysqli_query($connect,$insert) or die(mysql_error());

echo " Successfully added information";
}
?>
