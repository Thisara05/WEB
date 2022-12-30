<!DOCTYPE html>
<html>
<head>
	<title>HOSBY | Home</title>
	<link rel="stylesheet" type="text/css" href="css/top.css">
	<link rel="stylesheet" type="text/css" href="css/manu.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<script type="text/javascript">  
		function lclick()
		{
			document.getElementById("btback").style.marginLeft = "220px";
			document.getElementById("bt1").style.color = "red";
			document.getElementById("bt2").style.color = "#4d0000";
			document.getElementById("forms").style.marginLeft = "550px";
		}
		function rclick()
		{
			document.getElementById("btback").style.marginLeft = "413px";
			document.getElementById("bt2").style.color = "red";
			document.getElementById("bt1").style.color = "#4d0000";
			document.getElementById("forms").style.marginLeft = "-750px";
		}
		function rval()
		{
			
			if (document.register.rname.value.length==0)
			{
				alert("Please enter your NAME");
				return false;
			}
			if (document.register.remail.value.length==0)
			{
				alert("Please enter your E-MAIL");
				return false;
			}
			if (document.register.rpass.value.length == 0)
			{
				alert("Please enter your PASSWORD");
				return false;
			}
			else if (document.register.rpass.value.length < 8) 
			{
				alert("PASSWORD need at leest 8 caractors");
				return false;
			}
			if (document.register.rpass.value == document.register.rcpass.value) 
			{

			}
			else
			{
				alert("password do not match");
				return false;
			}
		}
		function lval()
		{
			if (document.login.lemail.value.length==0) 
			{
				alert("Please Enter Your E-MAIL");
				return false;
			}
			else if (document.login.lpass.value.length==0) 
			{
				alert("Please Enter Your PASSWORD");
				return false;
			}
		}
	</script>    
</head>
<body style="background-image: url(img/body_back.png);"><br><br>
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
<fieldset class="body">
	<div class="logincard">
		<div id="btback"></div>
		<input type="button" class="tbtn" name="tbtn" value=" LOGIN " onclick="lclick()" style="color: red;" id="bt1">
		<input type="button" class="tbtn" name="tbtn" value="REGISTER" onclick="rclick()" id="bt2">
		<div class="forms" id="forms">
		<form name="login" class="login" method="POST" action="index.php" onsubmit="return lval()">
			<br><br><br>
			<input type="email" name="lemail" placeholder="E-MAIL"><br><br><br>
			<input type="password" name="lpass" placeholder="PASSWORD"><br><br><br><br><br>
			<button type="submit"> LOGIN </button>&nbsp&nbsp&nbsp&nbsp&nbsp
			<button type="reset"> CANCEL </button>
		</form>
		<form name="register" class="register" action="regsu.php" method="POST" onsubmit="return rval()">
			<input type="text" name="rname" placeholder="NAME"><br><br><br>
			<input type="email" name="remail" placeholder="E-MAIL"><br><br><br>
			<input type="password" name="rpass" placeholder="PASSWORD"><br><br><br>
			<input type="password" name="rcpass" placeholder="CONFIRM PASSWORD"><br><br><br><br>
			<button type="submit">REGISTER</button>&nbsp&nbsp&nbsp&nbsp&nbsp
			<button type="reset"> CANCEL </button>			
		</form>
		</div>
	</div>
</fieldset>	
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
</center>
</body>
</html>