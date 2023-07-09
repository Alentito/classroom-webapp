<?php
session_start();
$ids=$_SESSION['ids'];
$cll=$_SESSION['cll'];

echo "";

$msg=$_POST['text'];
$files=$_POST['addfile'];


$uid = $_SESSION['uid'];
if ($_SESSION['uid'] != "$uid") {
    header('Location: home.php');
}



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
echo"$cll";
$in="insert into $cll (msg,file) values('$msg','$files')";
mysqli_query($conn,$in);
   $val=mysqli_query($conn,'select 1 from $cll');
if($val==true){
$head="Location: room.php?ano=$ids&class=$cll";
header($head);

}
else{
    $head="Location: room.php?ano=$ids&class=$cll";
header($head);
}
?>