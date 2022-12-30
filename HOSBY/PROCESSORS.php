<?php
session_start();
function card($id,$name,$price,$dis,$img)
{
	echo"
	<div class='card'>
		<div class='img'>
			<h2 class='cardhead'> $name </h2>
			<img src=$img width='150px' height='150px'>
			<div class='text'>
				<h2 class='price'>$price LKR</h2>
				<h4 class='subtext'>$dis</h4>
				<form action='#' method='POST'>
				<input type='hidden' name='id' value='$id'>
				<a href='p$id.php' class='card_link'>See More</a>				
				<button type='submit' class='card_link' onclick='add($price)'>add to cart</button>	
				</form>			
			</div>			
		</div>
	</div> 
	&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	";
}
$con=mysqli_connect("localhost","HOSBY","NIBM192f");
mysqli_select_db($con,"products");
$sql = "SELECT * FROM processors";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOSBY | PROCESSORS</title>
	<link rel="stylesheet" type="text/css" href="css/PROCESSORS.css">
	<link rel="stylesheet" type="text/css" href="css/top.css">
	<link rel="stylesheet" type="text/css" href="css/manu.css">
</head>
<body style="background-image: url(img/body_back.png);"><br><br>
	<fieldset class="manu" >
		<a href="" class="manuhead">Catergories</a><br>
		<a href="PROCESSORS.php" class="manulink">
		<img src="img/PROCESSORS.png" width="50px" height="50px" class="mimg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp PROCESSORS</a><br>
		<a href="" class="manulink">
		<img src="img/MOTHERBOARDS.png" width="50px" height="50px" class="mimg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp MOTHERBOARDS</a><br>
		<a href="" class="manulink">
		<img src="img/RAM.png" width="50px" height="50px" class="mimg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp RAM (MEMORYS)</a><br>
		<a href="" class="manulink">
		<img src="img/GRAPHIC CARDS.png" width="50px" height="50px" class="mimg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp GRAPHIC CARDS</a><br>
		<a href="" class="manulink">
		<img src="img/POWER SUPPLYS.png" width="50px" height="50px" class="mimg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp POWER SUPPLYS</a><br>
		<a href="" class="manulink">
		<img src="img/STORAGES.png" width="50px" height="50px" class="mimg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp STORAGES</a><br>
		<a href="" class="manulink">
		<img src="img/COOLINGS.png" width="50px" height="50px" class="mimg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp COOLINGS</a><br>
		<a href="" class="manulink">
		<img src="img/MONITORS.png" width="50px" height="50px" class="mimg">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp MONITORS</a><br>
	</fieldset>
	<center>
		<fieldset class="top">
		<div class="logo">
			<img src="img/pclogo.png" width="112px" height="80px">
		</div>
		<div class="toptext">
			<a href="index.php" class="toplink">HOME<hr></a>
			<a href="#" class="toplink">HOME<hr></a>
			<a href="login.php" class="toplink">LOGIN<hr></a>
		</div>	
	</fieldset>
	<br><br><br>
	<fieldset class="body">
		<h1 class="head">PROCESSORS</h1>
	<div class="row">
		<?php
		while($row = mysqli_fetch_array($result))
		{
			card($row[0],$row[1],$row[2],$row[3],$row[4]);
			if ($row[0] % 4 == 0) 
			{
				echo "</div>	<br><br><br><br><br><br><br><br><div class='row'>;";				
			}
		}
		mysqli_close($con);
		?>	
	</div>

<br>
</fieldset>
	
	</center>

</body>
</html>

	