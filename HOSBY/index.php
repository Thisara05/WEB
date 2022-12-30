<?php
if (isset($_POST["lemail"])) {


	$email=$_POST["lemail"];
	$pass=$_POST["lpass"];			
	$con=mysqli_connect("localhost","HOSBY","NIBM192f");
	mysqli_select_db($con,"hosby");
	$sql = "SELECT Name FROM users WHERE EMAIL = '".$email."' AND Password = '".$pass."' LIMIT 1";
	$result = mysqli_query($con,$sql);
	if (mysqli_num_rows($result)==1) 
	{
		$row = mysqli_fetch_array($result);
		$uname = $row[0];
	}
	else
	{
		header("Location: loginun.php");
		exit();
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>HOSBY | Home</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<link rel="stylesheet" type="text/css" href="css/top.css">
	<link rel="stylesheet" type="text/css" href="css/manu.css">
	<link rel="stylesheet" type="text/css" href="css/front.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
    
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
			<a href="#" class="toplink">HOME<hr></a>
			<a href="#" class="toplink">HOME<hr></a>
			<a href="login.php" class="toplink">LOGIN<hr></a>
		</div>	
</fieldset>
<fieldset class="body">
	<center>
		<h1 class="head" style="text-transform: uppercase;">WELCOME TO HOSBY PCS<br> <?php if (isset($uname)) {echo "$uname";}else{echo "GUST";} ?></h1>
	<div class="sl">
		<div class="imgs">
			<img src="img/1.png" class="img1" id="fimg">
			<img src="img/2.png">
			<img src="img/3.png">
			<img src="img/4.png">
			<script type="text/javascript" src="js/home.js"></script>	
		</div>
		<div class="slbt">
			<div onclick="sl(1)" class="slbta" id="slbt1"> </div> &nbsp&nbsp
			<div onclick="sl(2)" class="slbta" id="slbt2"> </div> &nbsp&nbsp
			<div onclick="sl(3)" class="slbta" id="slbt3"> </div> &nbsp&nbsp
			<div onclick="sl(4)" class="slbta" id="slbt4"> </div> &nbsp&nbsp
		</div> 
	</div>
	<br><br><br>
	<h1 class="head">CATERGORIES</h1><br><br>
	<div class="catesl">
		<div class="aleft" onclick="left()"><img src="img/arrow.png" width="100px" height="100px"></div>
		<div  id="cate1">		
		<a href="PROCESSORS.php"><div class="cate"><img src="img/PROCESSORS.png"><br><br>PROCESSORS</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="b"><div class="cate"><img src="img/MOTHERBOARDS.png"><br><br>MOTHERBOARDS</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="c"><div class="cate"><img src="img/RAM.png"><br><br>RAM (MEMORYS)</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="d"><div class="cate"><img src="img/GRAPHIC CARDS.png"><br><br>GRAPHIC CARDS</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="e"><div class="cate"><img src="img/POWER SUPPLYS.png"><br><br>POWER SUPPLYS</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="f"><div class="cate"><img src="img/STORAGES.png"><br><br>STORAGES</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="g"><div class="cate"><img src="img/COOLINGS.png"><br><br>COOLINGS</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<a href="h"><div class="cate"><img src="img/MONITORS.png"><br><br>MONITORS</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		</div><div class="aright" onclick="right()"><img src="img/arrow.png" width="100px" height="100px"></div>
		
		<script type="text/javascript">
			setTimeout(function() 
				{
					document.getElementById("cate1").style.transition = "20s";
					document.getElementById("cate1").style.marginLeft = "-990px";
				},0);
			setTimeout(function() 
				{
					document.getElementById("cate1").style.transition = "20s";
					document.getElementById("cate1").style.marginLeft = "60px";
				},20000);
			function left()
			{
				document.getElementById("cate1").style.transition = "1s";
				document.getElementById("cate1").style.marginLeft = "60px";
				document.getElementById("cate1").style.marginLeft = "-990px";
			}
			function right()
			{
				document.getElementById("cate1").style.transition = "1s";
				document.getElementById("cate1").style.marginLeft = "-990px";
				document.getElementById("cate1").style.marginLeft = "60px";
			}
		</script>
	</div>
	<div class="footer">
		<center>
			<br><br>
		<table>
			<tr>
				<th width="400px">LOGO</th>
				<th width="400px">Contact</th>
				<th width="400px">Follow us</th>
			</tr>
			<tr>
				<td></td>
				<td>Email : Hosbypc@gmail.com<br>Phone : (+94)713285043</td>
				<td><br><br><br><a href="https://facebook.com"><img src="img/fb.png" width="50px" height="50px"></a>&nbsp&nbsp&nbsp
					<a href="https://twitter.com"><img src="img/tw.png" width="50px" height="50px"></a>&nbsp&nbsp&nbsp
					<a href="https://www.instagram.com"><img src="img/in.png" width="50px" height="50px"></a>&nbsp&nbsp&nbsp
					<a href="https://www.youtube.com"><img src="img/yt.png" width="50px" height="50px"></a>&nbsp&nbsp&nbsp
				</td></a>
			</tr>
		</table>
		</center>
	</div>
</fieldset>	
</center>
</body>
</html>
