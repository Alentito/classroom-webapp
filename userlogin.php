<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];


 $servername="localhost";
$username="root";
$password="";
$database="classroom";
//create connection
$conn=new mysqli($servername,$username,$password,$database);
//check connection
if($conn->connect_error){
    die("connection failded:".
    $conn->connect_error);
}

mysqli_connect("localhost","root","");


$sql="select * from signup where uid='$uid' and pwd='$pwd'";

$res=mysqli_query($conn,$sql);
$num=mysqli_num_rows($res);
if($num>0)
{
session_start();
$_SESSION['uid']="$uid";
$_SESSION['pwd']="$pwd";
header ('Location: classroom.php');
}
else
{
header ('Location: invalidadminlogin.php');
}
?>