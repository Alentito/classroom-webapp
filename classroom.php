<?php
session_start();
$uid = $_SESSION['uid'];
if ($_SESSION['uid'] != "$uid") {
    header('Location: home.php');
}
?>
<html>

<head>
    <meta charset="utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>
<link rel="stylesheet" type="text/css" id="applicationStylesheet" href="Home.css"/>
</head>

<body>
    <div id="Home">
		<div id="modal1">
			<div class="modal1">
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
        
            <td> <a class="div1" onclick=""  href="room.php?ano=<?php echo $ano;?>&class=<?php echo $tab;?>"><td> <?php echo $row[1]; ?></td><br>
            <td> <?php echo $row[2]; ?></td></a></td>
       
        </tr>
    <?php
    
   /* $id=$ano;
    $tabname=$tab;
    $_SESSION['id']=$id;
    $_SESSION['tab']=$tabname;*/
 } ?>
			</div>
		</div>
	<div id="menu" >

	
	<div class="grid-container">
	<svg class="Rectangle_1_h">
		<linearGradient id="Rectangle_1_h" spreadMethod="pad" x1="-0.09" x2="1.072" y1="-0.09" y2="1.06">
			<stop offset="0" stop-color="#f06" stop-opacity="1"></stop>
			<stop offset="1" stop-color="#fd0" stop-opacity="1"></stop>
		</linearGradient>
		<rect id="Rectangle_1_h" rx="0" ry="0" x="0" y="0" width="100%" height="60">
		</rect>
	</svg>
	</div>
	<div id="POLYHUB">
		<span>POLYHUB</span>
	</div>
	
	<div id="menu-black-18dp">
		<button id="menubtn"  class="menu">
		<svg class="Path_1" viewBox="0 0 24 24">
			<path id="Path_1" d="M 0 0 L 24 0 L 24 24 L 0 24 L 0 0 Z">
			</path>
		</svg>
		<svg class="Path_2" viewBox="3 6 18 12">
			<path id="Path_2" d="M 3 18 L 21 18 L 21 16 L 3 16 L 3 18 Z M 3 13 L 21 13 L 21 11 L 3 11 L 3 13 Z M 3 6 L 3 8 L 21 8 L 21 6 L 3 6 Z">
			</path>
		</svg>
		</button>
	</div>
	
	
		<a href="home.php" id="more_vert-24px"><svg class="Path_3" viewBox="0 0 24 24">
			<path id="Path_3" d="M 0 0 L 24 0 L 24 24 L 0 24 L 0 0 Z">
			</path>
		</svg>
		<svg class="Path_4" viewBox="10 4 4 16">
			<path id="Path_4" d="M 12 8 C 13.10000038146973 8 14 7.099999904632568 14 6 C 14 4.900000095367432 13.10000038146973 4 12 4 C 10.89999961853027 4 10 4.900000095367432 10 6 C 10 7.099999904632568 10.89999961853027 8 12 8 Z M 12 10 C 10.89999961853027 10 10 10.89999961853027 10 12 C 10 13.10000038146973 10.89999961853027 14 12 14 C 13.10000038146973 14 14 13.10000038146973 14 12 C 14 10.89999961853027 13.10000038146973 10 12 10 Z M 12 16 C 10.89999961853027 16 10 16.89999961853027 10 18 C 10 19.10000038146973 10.89999961853027 20 12 20 C 13.10000038146973 20 14 19.10000038146973 14 18 C 14 16.89999961853027 13.10000038146973 16 12 16 Z">
			</path>
		</svg></a>
	
	<div id="search-24px">
		<svg class="Path_5" viewBox="0 0 24 24">
			<path id="Path_5" d="M 0 0 L 24 0 L 24 24 L 0 24 L 0 0 Z">
			</path>
		</svg>
		<svg class="Path_6" viewBox="3 3 17.49 17.49">
			<path id="Path_6" d="M 15.5 14 L 14.71000003814697 14 L 14.43000030517578 13.72999954223633 C 15.40999984741211 12.59000015258789 16 11.10999965667725 16 9.5 C 16 5.909999847412109 13.09000015258789 3 9.5 3 C 5.909999847412109 3 3 5.909999847412109 3 9.5 C 3 13.09000015258789 5.909999847412109 16 9.5 16 C 11.10999965667725 16 12.59000015258789 15.40999984741211 13.72999954223633 14.43000030517578 L 14 14.71000003814697 L 14 15.5 L 19 20.48999977111816 L 20.48999977111816 19 L 15.5 14 Z M 9.5 14 C 7.010000228881836 14 5 11.98999977111816 5 9.5 C 5 7.010000228881836 7.010000228881836 5 9.5 5 C 11.98999977111816 5 14 7.010000228881836 14 9.5 C 14 11.98999977111816 11.98999977111816 14 9.5 14 Z">
			</path>
		</svg>
	</div>
	<div id="add-24px">
	
		<div>
			<button class="add">
				<svg class="Path_7" viewBox="0 0 26 26">
					<path id="Path_7" d="M 0 0 L 26 0 L 26 26 L 0 26 L 0 0 Z">
					</path>
				</svg>
				<svg class="Path_8" viewBox="5 5 16 16">
					<path id="Path_8" d="M 21.00000190734863 14.14285755157471 L 14.14285755157471 14.14285755157471 L 14.14285755157471 21.00000190734863 L 11.85714340209961 21.00000190734863 L 11.85714340209961 14.14285755157471 L 5 14.14285755157471 L 5 11.85714340209961 L 11.85714340209961 11.85714340209961 L 11.85714340209961 5 L 14.14285755157471 5 L 14.14285755157471 11.85714340209961 L 21.00000190734863 11.85714340209961 L 21.00000190734863 14.14285755157471 Z">
					</path>
				</svg>
			</button>
		</div>
		<div id="modal">
			<a id="btn" class="add_btn" href="join.php">JOIN</a>
            <a id="btn" href="create.php">CREATE</a>
		</div>
	</div>

	</div>
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
    
    $sql = "select * from $uid";
    $res = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($res);
    for ($i = 0; $i < $num; $i++) {
        $row = mysqli_fetch_row($res);
        $ano = $row[0];
        $tab=$row[1];
    ?>
        <tr >
        
            <td> <a class="div-shadow" onclick=""  href="room.php?ano=<?php echo $ano;?>&class=<?php echo $tab;?>"><td> <?php echo $row[1]; ?></td><br>
            <td> <?php echo $row[2]; ?></td></a></td>
       
        </tr>
    <?php
    
   /* $id=$ano;
    $tabname=$tab;
    $_SESSION['id']=$id;
    $_SESSION['tab']=$tabname;*/
 } ?>
	
	</div>
	<div class="footer">
		
		
			<a id="classes" href="#">Classes</a>
		
		
			<a id="chats" href="#">Chats</a>
		
	</div>

	
	
</div>
   
    <script id="applicationScript" type="text/javascript" src="Home.js"></script>
</head>
</body>

</html>