<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
   <body>
       <div id="container">
           <div id="t">
               <span id="cls">CLASSROOM</span>
       <form id="top" action="userlogin.php" method="POST">
           <span>LOGIN</span><br>
           <input type="text" name="uid" required placeholder="username"><br>
           <input type="text" name="pwd" required placeholder="password"><br>
           <input  id="btn" type="submit" value="log in" placeholder="username"><br>
       </form>
       <form id="mid" action="usersignup.php" method="POST">
            <span>SIGNUP</span><br>
           <input type="text" name="uid" required placeholder="username"><br>
           <input type="email" name="email" required placeholder="Email"><br>
           <input type="text" name="pwd" required placeholder="password"><br>
           <input id="btn" type="submit" value="Sign-up" placeholder="username">
       </form>
           </div>
       </div>
   </body>
</html>