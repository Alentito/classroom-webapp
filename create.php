<?php
session_start();
$uid=$_SESSION['uid'];
if($_SESSION['uid'] != "$uid")
{
header ('Location: home.php');
}
?>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div id="container">
            <div id="t">
        <form id="top" method="POST" action="createroom.php">
            <input type="text" name="classname" placeholder="Classname(required)"><br>
            <input type="text" name="subject" placeholder="Subject"><br>
            <input id="btn" type="submit" value="SUBMIT">
        </form>
            </div>
        </div>
    </body>
</html>