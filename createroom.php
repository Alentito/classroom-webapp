<?php
session_start();


$class=$_POST['classname'];
$sub=$_POST['subject'];

$uid=$_SESSION['uid'];

$date=date('Y/m/d H:i:s');

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

else{
    
}

mysqli_connect("localhost","root","");

$in="insert into $uid (id,classname,subject) values('','$class','$sub')";
mysqli_query($conn,$in);
echo "$class";
$cls="CREATE TABLE $class(id INT(10) AUTO_INCREMENT PRIMARY KEY,
msg VARCHAR(300) NOT NULL,
img BLOB(100) NOT NULL,
file BLOB(100) NOT NULL,
date DATETIME NOT NULL)
";
mysqli_query($conn,$cls);

$head="Location: classroom.php";
header($head);
?>