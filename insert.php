<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>welcome to BATEAUX MOUCHES's website</title>
<style type="text/css">
#secondbody{
		clear: both;
		margin: 0 auto 20px 0;
		padding: 0;
		background-color: black;
		color: white;		
	}
	#main-menu{
		margin: 0 auto 0 350px;
		width:600;height:50;
		background-color:#000000;color:#ffffff;}
	
	a:link{
		color:white;
		text-decoration:none}
	a:active{
		color:#9d0d21;
		text-decoration:none}
	a:hover{
		color:#9d0d21;
		text-decoration:none}
	label { float: left; width: 80px }
</style>
</head>

<body id="secondbody" vlink="white" >		
	<br>
	<hr color='#9d0d21'>	
	<div id="main-menu">
		<a href="second.html">
		<br><img src="logo.png"  hspace="50" >
		</a>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		
		<a href="second.html" align='right'>
											H O M E
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</a>
		
		<a href="route.html" align='right'>
											R O U T E
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</a>
		
		<a href="scene.html" align='right'>
											S C E N E
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</a>
		
		<a href="informations.html" align='right'>
											I N F O R M A T I O N S
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		</a>
		
		<a href="insert.php" align='right'>
											R E S E R V A T I O N
		</a>
		
	</div>
	<br>
	<img src="reservation.png">
	<h1>Enter your information</h1>
		<form action="select.php" method="get">
			<label>NAME:</label><input type="text" name="NAME"/><br/>
			<label>PASSWORD:</label><input type="text" name="PASSWORD"/><br/>
			<label>DATE:</label><input type="text" name="DATE"/><br/>
			<label>COUNTRY:</label><input type="text" name="COUNTRY"/><br/>

		<?php

		$conn = new mysqli("localhost", "root", "apmsetup", "mydb");
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}


		if (array_key_exists("NAME", $_GET)) {
			$stmt = $conn->prepare("INSERT INTO reservation  VALUES (NAME, PASSWORD, DATE, COUNTRY)"); 
			$stmt->bind_param("sssssss", $NAME, $PASSWORD, $DATE, $COUNTRY);

			$NAME = $_GET["NAME"];
			$PASSWORD = $_GET["PASSWORD"];
			$DATE = $_GET["DATE"];
			$COUNTRY = $_GET["COUNTRY"];
			$result = $stmt->execute();
			
			if ($result === TRUE) {
				echo "<p style=\"color: blue\">Row inserted successfully.</p>";
			} else {
				echo "<p style=\"color: red\">Error: insert failed.</p>";
			}
		}

			// Close connection
			$conn->close();
		?>
			
			<input type="submit" value="Insert"/>
			<input type="reset" value="Reset"/>
		</form>
		<form action="select.php">
			<input type="submit" value="Select Page"/>
		</form>
	<br>
	
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<center>Copyright &copy; 2016. YangHanJin All rights reserved</center> 		
 </body>
</html>