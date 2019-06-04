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
	th { background-color: #f0f0f0; }
</style>
</head>

 <body id="secondbody" vlink="white" >		
	
		
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
	<br>
<h1>Select information.</h1>
	<?php
		// Establish connection
		$conn = new mysqli("localhost", "root", "apmsetup", "mydb");
		if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		}

		// Execute a query
		$sql = "SELECT NAME, PASSWORD, DATE, COUNTRY FROM reservation";
		$result = $conn->query($sql);

		// Print query result
		if ($result->num_rows > 0) {
			echo "<table border=1 cellpadding=3>";
			echo "<tr><th>NAME</th><th>PASSWORD</th>
			<th>DATE</th><th>COUNTRY</th</tr>";
			while($row = $result->fetch_assoc()) {
				echo "<tr><td>"$row["NAME"]"</td><td>"$row["PASSWORD"]"</td><td>"$row["DATE"];
				echo "</td><td>",$row["COUNTRY"],"</td></tr>";
			}
			echo "</table>";
		} else {
			echo "0 rows</br>";
		}

		// Close connection
		$conn->close();
		?>

	<form action="insert.php">
		<input type="button" value="Reload" onclick="window.location.reload()"/>
		<input type="submit" value="Insert Page"/>
	</form>
	<br>
	
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
	<center>Copyright &copy; 2016. YangHanJin All rights reserved</center> 		
 </body>
</html>