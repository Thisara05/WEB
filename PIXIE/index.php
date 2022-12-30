<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>PIXIE | Home</title>
	<link rel="stylesheet" type="text/css" href="css/home.css">
	<script type="text/javascript">
		function add()
		{
			document.getElementById("subcard").style.display = "none";
			document.getElementById("subcard2").style.display = "none";
			document.getElementById("subcard3").style.display = "none";
			document.getElementById("subcard4").style.display = "none";
			document.getElementById("subcard5").style.display = "none";
			document.getElementById("subcard6").style.display = "none";
			document.getElementById("subcard1").style.display = "flex";
			document.getElementById("add").style.color = "black";
			document.getElementById("add").style.background = "white";
			document.getElementById("remove").style.color = "white";
			document.getElementById("remove").style.background = "black";
			document.getElementById("sell").style.color = "white";
			document.getElementById("sell").style.background = "black";
			document.getElementById("sum").style.color = "white";
			document.getElementById("sum").style.background = "black";

		}
		function remove()
		{
			document.getElementById("subcard").style.display = "none";
			document.getElementById("subcard3").style.display = "none";
			document.getElementById("subcard4").style.display = "none";
			document.getElementById("subcard1").style.display = "none";
			document.getElementById("subcard5").style.display = "none";
			document.getElementById("subcard6").style.display = "none";
			document.getElementById("subcard2").style.display = "flex";
			document.getElementById("remove").style.color = "black";
			document.getElementById("remove").style.background = "white";
			document.getElementById("sell").style.color = "white";
			document.getElementById("sell").style.background = "black";
			document.getElementById("sum").style.color = "white";
			document.getElementById("sum").style.background = "black";
			document.getElementById("add").style.color = "white";
			document.getElementById("add").style.background = "black";
		}
		function sell()
		{
			document.getElementById("subcard").style.display = "none";
			document.getElementById("subcard2").style.display = "none";
			document.getElementById("subcard4").style.display = "none";
			document.getElementById("subcard1").style.display = "none";
			document.getElementById("subcard5").style.display = "none";
			document.getElementById("subcard6").style.display = "none";
			document.getElementById("subcard3").style.display = "flex";
			document.getElementById("sell").style.color = "black";
			document.getElementById("sell").style.background = "white";
			document.getElementById("remove").style.color = "white";
			document.getElementById("remove").style.background = "black";
			document.getElementById("sum").style.color = "white";
			document.getElementById("sum").style.background = "black";
			document.getElementById("add").style.color = "white";
			document.getElementById("add").style.background = "black";
		}
		function sum()
		{
			document.getElementById("subcard").style.display = "none";
			document.getElementById("subcard2").style.display = "none";
			document.getElementById("subcard3").style.display = "none";
			document.getElementById("subcard1").style.display = "none";
			document.getElementById("subcard5").style.display = "none";
			document.getElementById("subcard6").style.display = "none";
			document.getElementById("subcard4").style.display = "flex";
			document.getElementById("sum").style.color = "black";
			document.getElementById("sum").style.background = "white";
			document.getElementById("remove").style.color = "white";
			document.getElementById("remove").style.background = "black";
			document.getElementById("sell").style.color = "white";
			document.getElementById("sell").style.background = "black";
			document.getElementById("add").style.color = "white";
			document.getElementById("add").style.background = "black";

		}
		function addn()
		{
			document.getElementById("subcard").style.display = "none";
			document.getElementById("subcard2").style.display = "none";
			document.getElementById("subcard3").style.display = "none";
			document.getElementById("subcard4").style.display = "none";
			document.getElementById("subcard1").style.display = "none";
			document.getElementById("subcard6").style.display = "none";
			document.getElementById("subcard5").style.display = "flex";
			document.getElementById("add").style.color = "black";
			document.getElementById("add").style.background = "white";
			document.getElementById("remove").style.color = "white";
			document.getElementById("remove").style.background = "black";
			document.getElementById("sell").style.color = "white";
			document.getElementById("sell").style.background = "black";
			document.getElementById("sum").style.color = "white";
			document.getElementById("sum").style.background = "black";
		}
		function adde()
		{
			document.getElementById("subcard").style.display = "none";
			document.getElementById("subcard2").style.display = "none";
			document.getElementById("subcard3").style.display = "none";
			document.getElementById("subcard4").style.display = "none";
			document.getElementById("subcard5").style.display = "none";
			document.getElementById("subcard1").style.display = "none";
			document.getElementById("subcard6").style.display = "flex";
			document.getElementById("add").style.color = "black";
			document.getElementById("add").style.background = "white";
			document.getElementById("remove").style.color = "white";
			document.getElementById("remove").style.background = "black";
			document.getElementById("sell").style.color = "white";
			document.getElementById("sell").style.background = "black";
			document.getElementById("sum").style.color = "white";
			document.getElementById("sum").style.background = "black";
		}
		function p(x)
		{
			if (isNaN(document.getElementById(x).value))
			{
				document.getElementById(x).value = 1
			}
			if (document.getElementById(x).value < 999)
			{
				document.getElementById(x).value = +document.getElementById(x).value + 1
			} 
		}
		function m(x)
		{
			if (isNaN(document.getElementById(x).value))
			{
				document.getElementById(x).value = 1
			}
			if (document.getElementById(x).value > 1)
			{
				document.getElementById(x).value = +document.getElementById(x).value - 1
			} 
		}
	</script>
</head>
<body class="body">
	<div><center>
		<h1 style="margin-top: -60px;"><img src="img/LOGO.png" width="300px"></h1>
		<div class="card">
			<table>
				<tr>
					<td width="20%" style="font-size: 30px; text-align: center; background: white; color: black;">MENU</th>
					<th width="65%" rowspan="10"><?php include 'card.php';?></th>
				</tr>
				<tr>
					<td onclick="add()" id="add">&nbsp&nbsp&nbsp&nbspADD STOCK</td>
				</tr>
				<tr>
					<td onclick="remove()" id="remove">&nbsp&nbsp&nbsp&nbspREMOVE STOCK</td>
				</tr>
				<tr>
					<td onclick="sell()" id="sell">&nbsp&nbsp&nbsp&nbspSELL</td>
				</tr>
				<tr>
					<td onclick="sum()" id="sum">&nbsp&nbsp&nbsp&nbspSUMMARY</td>
				</tr>
			</table>
		</div>
		</center>
	</div>
<div class="pro">PROFIT : </div>
</body>
</html>