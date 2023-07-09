<?php
session_start();
$uid=$_SESSION['uid'];
if($_SESSION['uid'] != "$uid")
{
header ('Location: home.php');
}
?>