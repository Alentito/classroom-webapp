<?php
session_start();

/*    $idd=$_SESSION['id'];
    $ttabname=$_SESSION['tab'];*/

$id=$_GET['ano'];
$cl=$_GET['class'];

$_SESSION['ids']="$id";
$_SESSION['cll']="$cl";

$uid = $_SESSION['uid'];
if ($_SESSION['uid'] != "$uid") {
    header('Location: home.php');
}
?>
<html>

<head>
    <link rel="stylesheet" href="room.css">
    
    <style>
    #container{
        z-index: 1;
	width: 50%;
	overflow: hidden;
    margin:auto;
	margin-top: 50px;
    margin-bottom: 100px;
	display: grid;
	justify-content: center;
	grid-template-columns: 1fr ;
	padding: 0;
	background-color: rgb(255, 255, 255);
	
    }
    .div-shadow{
        border: 2px solid rgb(160 159 159);
      overflow: hidden;
    background: rgb(255, 255, 255);
	font-family: sans-serif;
    
	height: 150px;
	min-width: 100%;
    width: 100%;
    border-radius: 10px;
    padding: 10px 0px;
    text-decoration: none;
    text-align: left;
    color: rgb(0, 0, 0);
}
#bottom{
    padding: 0px 10px;
    border: none;
    border-top: 2px solid rgb(160 159 159);
    width: 100%;
    height: 50px;
    margin-top: 0px;
}
.div-shadow:hover{
	filter: drop-shadow(0px 3px 6px rgba(0, 0, 0, 0.161));
	overflow:visible;
	text-align: left;

  /*  transform: scale(2px);
	background: rgb(0, 0, 0);
	color: white;
	fill:white;
    transition: ease-in;
    transition: duration 1.3; */
}
#nav2{
    margin: auto;
    display: block;
    border: none;
    border-bottom: 2px solid grey;
    height: 60px;
    width: 50%;
}
#menu1{
    margin-top: 17px;
    margin-left: 10px;
    float: left;
}
#menubtn{
	background: none;
	width: 20px;
	height: 20px;
	cursor: pointer;
    border: none;
    background-color: none;
}
#Path_2{
    position: absolute;
    top: 5px;
    width: 20px;
    height: 20px;
    

}
    </style>
</head>

<body>
 
    <div id="contain">
        <div id="modal1">
			<div class="modal1">
<div id="inner1">
                 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "classroom";
    //create connection
    $conn = new mysqli($servername, $username, $password, $database);
    //check connection
    if ($conn->connect_error) {
        die("connection failded:" .
            $conn->connect_error);
    }

    mysqli_connect("localhost", "root", "");
    
    $sql = "select * from $uid";
    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);
    for ($i = 0; $i < $num; $i++) {
        $row = mysqli_fetch_row($res);
        $ano = $row[0];
        $tab=$row[1];
    ?>
        <tr >
        
            <td> <a class="div-sha" onclick=""  href="room.php?ano=<?php echo $ano;?>&class=<?php echo $tab;?>"><td> <?php echo $row[1]; ?></td><br>
            <td> <?php echo $row[2]; ?></td></a></td><br>
       
        </tr>
    <?php
    
   /* $id=$ano;
    $tabname=$tab;
    $_SESSION['id']=$id;
    $_SESSION['tab']=$tabname;*/
 } ?></div>
            </div>
		</div>
        <div id="nav2">
          <div id="menu1">
                <button id="menubtn" class="menu">
		
		<svg class="Path_2" viewBox="3 6 18 12">
			<path id="Path_2" d="M 3 18 L 21 18 L 21 16 L 3 16 L 3 18 Z M 3 13 L 21 13 L 21 11 L 3 11 L 3 13 Z M 3 6 L 3 8 L 21 8 L 21 6 L 3 6 Z">
			</path>
		</svg>
		</button>
          </div>
        </div>
    <div id="nav">
       <?php echo $cl;?>
    </div>
    <form id="top" method="post" action="fileupload.php">
        <div id="textarea">
            <input id="text" name="text" type="text" placeholder="send message...">
            <label for="addfile" >
                <svg id="svg" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
                    <g id="Group_1" data-name="Group 1" transform="translate(-276 -566)">
                        <rect id="Rectangle_2" data-name="Rectangle 2" width="2" height="20" transform="translate(285 566)" />
                        <rect id="Rectangle_3" data-name="Rectangle 3" width="2" height="20" transform="translate(296 575) rotate(90)" />
                    </g>
                </svg>
            </label>
            <input type="file" name="addfile" id="addfile" style="display:none;">
        </input>
            <button id="btn"><svg xmlns="http://www.w3.org/2000/svg" width="21.5" height="21" viewBox="0 0 21.5 21">
                    <g id="Group_2" data-name="Group 2" transform="translate(-322 -566)">
                        <rect id="Rectangle_4" data-name="Rectangle 4" width="21" height="21" transform="translate(322 566)" fill="#fff" />
                        <path id="Polygon_1" data-name="Polygon 1" d="M10,0,20,20H0Z" transform="translate(343.5 566.5) rotate(90)" />
                        <path id="Path_1" data-name="Path 1" d="M1.5,0,3.009,11.181H.022Z" transform="translate(333.715 575) rotate(90)" fill="#fff" />
                    </g>
                </svg>
            </button>
        </div>
    </form>
    <div id="container">

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "classroom";
    //create connection
    $conn = new mysqli($servername, $username, $password, $database);
    //check connection
    if ($conn->connect_error) {
        die("connection failded:" .
            $conn->connect_error);
    }

    mysqli_connect("localhost", "root", "");
    

    /*echo "$uid";
    echo "$ttabname";
    echo "$idd";*/
    $val=mysqli_query($conn,'select 1 from $cl');
    if($val !==TRUE){
    $sql="select * from $cl";
    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);
    for ($i = 0; $i < $num; $i++) {
        $row = mysqli_fetch_row($res);
        $ano = $row[0];
    ?>
        <tr>
        
            <td>
                 <div class="div-shadow">
                     <div id="inner"><td>
                     <div id="icon">
                     <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="48" height="48" viewBox="0 0 48 48">
  <defs>
    <filter id="Ellipse_1" x="0" y="0" width="48" height="48" filterUnits="userSpaceOnUse">
      <feOffset input="SourceAlpha"/>
      <feGaussianBlur stdDeviation="3" result="blur"/>
      <feFlood flood-opacity="0.141"/>
      <feComposite operator="in" in2="blur"/>
      <feComposite in="SourceGraphic"/>
    </filter>
    <filter id="Ellipse_2" x="10" y="3" width="28" height="28" filterUnits="userSpaceOnUse">
      <feOffset input="SourceAlpha"/>
      <feGaussianBlur stdDeviation="3" result="blur-2"/>
      <feFlood flood-opacity="0.141"/>
      <feComposite operator="in" in2="blur-2"/>
      <feComposite in="SourceGraphic"/>
    </filter>
    <filter id="Intersection_1" x="4" y="15" width="40.001" height="32.999" filterUnits="userSpaceOnUse">
      <feOffset input="SourceAlpha"/>
      <feGaussianBlur stdDeviation="3" result="blur-3"/>
      <feFlood flood-opacity="0.141"/>
      <feComposite operator="in" in2="blur-3"/>
      <feComposite in="SourceGraphic"/>
    </filter>
  </defs>
  <g id="Group_3" data-name="Group 3" transform="translate(-218 -552)">
    <g transform="matrix(1, 0, 0, 1, 218, 552)" filter="url(#Ellipse_1)">
      <circle id="Ellipse_1-2" data-name="Ellipse 1" cx="15" cy="15" r="15" transform="translate(9 9)" fill="#d6d6d6"/>
    </g>
    <g transform="matrix(1, 0, 0, 1, 218, 552)" filter="url(#Ellipse_2)">
      <circle id="Ellipse_2-2" data-name="Ellipse 2" cx="5" cy="5" r="5" transform="translate(19 12)" fill="#fff"/>
    </g>
    <g transform="matrix(1, 0, 0, 1, 218, 552)" filter="url(#Intersection_1)">
      <path id="Intersection_1-2" data-name="Intersection 1" d="M4.032,25.232Q4,24.87,4,24.5C4,19.254,8.925,15,15,15s11,4.253,11,9.5q0,.369-.032.732a15,15,0,0,1-21.936,0Z" transform="translate(9 9)" fill="#fff"/>
    </g>
  </g>
</svg>

                     </div>
                      <?php echo $row[1]; ?></td><br>
                   <td> <?php echo $row[2]; ?></td></div>
                <td><input id="bottom" type="text" placeholder="Add class comment"></td>
                </div>
          </td>
    
        
        </tr>
    <?php }}
    
    else{
        echo "enter";
    }
    ?>

    </div>
    <div id="footer">
        <br> <a id="aa" href="classroom.php">BACK</a><br>
    </div>
    </div>
    <script id="applicationScript" type="text/javascript" src="room.js"></script>
</body>

</html>