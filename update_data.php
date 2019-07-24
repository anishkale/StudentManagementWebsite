<?php
session_start();
if($_SESSION['authuser']!=1)
{
echo"ACCESS DENIED";
exit();
}
$connect = new mysqli("localhost", "root", "root") or die ("check your server connection.");


mysqli_select_db($connect,"2008b4a5723p");
$id = $_POST['id'];
$status = $_POST['Status'];

if($id=='' or $status=='')
{
echo"ERROR IN REGISTRATION";
}
else{
$update = "UPDATE members SET status='$status' where id='$id'";

$results=mysqli_query($connect,$update) or die(mysql_error());

echo " Successfully updated information";
}

?>

