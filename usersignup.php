<?php
$uid=$_POST['uid'];
$pwd=$_POST['pwd'];
$email=$_POST['email'];

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

$sql="insert into signup (uid,pwd,email) values('$uid','$pwd','$email' )";
mysqli_query($conn,$sql);

$val=mysqli_query($conn,'select 1 from $uid');
if($val !==FALSE)
{
 echo "exists";
}
else{
$sql="CREATE TABLE $uid (id INT(10) AUTO_INCREMENT PRIMARY KEY,
classname VARCHAR(100) NOT NULL,
subject VARCHAR(100) NOT NULL,
date DATETIME NOT NULL)
";
mysqli_query($conn,$sql);
    }

$sq="select * from signup where uid='$uid' and pwd='$pwd'";

$res=mysqli_query($conn,$sq);
$num=mysqli_num_rows($res);
if($num>0)
{
session_start();
$_SESSION['uid']=$uid;


header ('Location: home.php');
}
else
{
header ('Location: invalidlogin.php');
}
?>
?>