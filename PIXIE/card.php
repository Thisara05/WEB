<?php 
$uname = 'pixie';
$pw = 'pixie@123';
$con=mysqli_connect("localhost",$uname,$pw);
mysqli_select_db($con,"pixie");
function item($con)
{
	$sql = "SELECT * FROM stock";
		$result = mysqli_query($con,$sql);
          while($row = mysqli_fetch_array($result))
          {
            echo "<option value=$row[0]>$row[1]</option>";
          }
}
if (isset($_POST['nab']))
{
	$name = $_POST['nan'];
	$qt = $_POST['nq'];
	mysqli_query($con, "INSERT INTO stock (Item_Name, Quantity) VALUES ('$name', $qt)");
	header("Location: index.php");
}
if (isset($_POST['eab']))
{
	$item = $_POST['aeis'];
	$qt = $_POST['eq'];
	mysqli_query($con, "UPDATE stock SET Quantity = Quantity + $qt WHERE Item_no=$item");
	header("Location: index.php");
}
if (isset($_POST['rmb']))
{
	$item = $_POST['rms'];
	mysqli_query($con, "DELETE FROM stock WHERE Item_no=$item");
	header("Location: index.php");
}
if (isset($_POST['selb']))
{
	$name = $_POST['cname'];
	$item = $_POST['sels'];
	$qt = $_POST['sq'];
	if ("SELECT Quantity FROM stock WHERE Item_no=$item" <= $qt) 
	{
		mysqli_query($con, "INSERT INTO orders (Item_no, Quantity, Customer_Name) VALUES ($item, $qt, '$name')");
		mysqli_query($con, "UPDATE stock SET Quantity = Quantity - $qt WHERE Item_no=$item");
		mysqli_query($con, "DELETE FROM stock WHERE Quantity < 1 AND Item_no = $item");
		header("Location: index.php");
	}
	else
	{
		echo("<script type='text/javascript'> alert('No $qt items')</script>");
	}
}
?>
<script type="text/javascript">
	function valna()
	{
		if (document.card.nan.value.length == 0)
		{
			alert("Name akak danna onee");
			return false;
		}
		if (isNaN(document.card.nq.value))
		{
			alert("Quantity aka ilakkamak nee");
			return false;
		}
	}
	function valea()
	{
		if (document.card.aeis.selectedIndex == 0)
		{
			alert("akak select karanna onee");
			return false;
		}
		if (isNaN(document.card.eq.value))
		{
			alert("Quantity aka ilakkamak nee");
			return false;
		}
	}
	function valrm()
	{
		if (document.card.rms.selectedIndex == 0)
		{
			alert("akak select karanna onee");
			return false;
		}
	}
	function valsell()
	{
		if (document.card.cname.value.length == 0)
		{
			alert("Name akak danna onee");
			return false;
		}
		if (document.card.sels.selectedIndex == 0)
		{
			alert("akak select karanna onee");
			return false;
		}
		if (isNaN(document.card.sq.value))
		{
			alert("Quantity aka ilakkamak nee");
			return false;
		}
	}
	
</script>
<form method="post" action="#" name="card">
<center>
	<div class="subcard" id="subcard">
		<img src="img/cover.png" height="400px">
	</div>
<div class="subcard1" id="subcard1" style="vertical-align: middle;">
	<button onclick="addn()" type="button">ADD NEW ITEM</button>
	<button style="margin-left: 100px;" onclick="adde()" type="button">RESTOCK EXISTING ITEMS</button>
</div>
<div class="subcard1" id="subcard2" style="vertical-align: middle;">
	<select name="rms">
		<option>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp---Select Item---</option>
		<?php
		item($con)
        ?>
	</select>
	<button style="margin-left: 100px;" name="rmb" onclick="return valrm()">REMOVE ITEM</button>
</div>
<div class="subcard1" id="subcard3" style="vertical-align: middle;">
	<input type="text" name="cname" id="name" style="width: 280px; margin-top: 100px;" placeholder="Customer Name">&nbsp&nbsp&nbsp&nbsp
	<select style="width: 280px; margin-top: 100px;" name="sels">
		<option>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp---Select Item---</option>
		<?php
		item($con)
        ?>
	</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h1 style="font-size: 30pt; margin-top: 120px; color: white; font-weight: bold;" onclick="m('sq')" id="-">-&nbsp</h1>
	<input type="text" name="sq" id="sq" style="width: 75px; margin-top: 100px;" value="Qt">&nbsp&nbsp&nbsp&nbsp<h1 style="font-size: 30pt; margin-top: 130px; color: white; font-weight: bold;" onclick="p('sq')" id="+">+</h1>&nbsp&nbsp&nbsp&nbsp
	<button style="margin-top: -200px;" name="selb" onclick="return valsell()">SUBMIT</button>
</div>
<div class="subcard1" id="subcard4" style="vertical-align: middle;">
	<button>VIEW SUMMARY</button>
</div>
<div class="subcard1" id="subcard5" style="vertical-align: middle;">
	<input type="text" name="nan" id="name" style="width: 280px; margin-top: 30px;" placeholder="New Item Name">&nbsp&nbsp&nbsp&nbsp
	<h1 style="font-size: 30pt; margin-top: 50px; color: white; font-weight: bold;" onclick="m('nq')" id="-">-&nbsp</h1>
	<input type="text" name="nq" id="nq" style="width: 75px; margin-top: 30px;" value="Qt">&nbsp&nbsp&nbsp&nbsp<h1 style="font-size: 30pt; margin-top: 60px; color: white; font-weight: bold;" onclick="p('nq')" id="+">+</h1>&nbsp&nbsp&nbsp&nbsp
	<button style="margin-top: 30px;" name="nab" onclick="return valna()">SUBMIT</button>
</div>
<div class="subcard1" id="subcard6" style="vertical-align: middle;">
	<select style="width: 280px; margin-top: 30px;" name="aeis">
		<option>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp---Select Item---</option>
		<?php
		item($con)
        ?>
	</select>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h1 style="font-size: 30pt; margin-top: 50px; color: white; font-weight: bold;" onclick="m('eq')" id="-">-&nbsp</h1>
	<input type="text" name="eq" id="eq" style="width: 75px; margin-top: 30px;" value="Qt">&nbsp&nbsp&nbsp&nbsp<h1 style="font-size: 30pt; margin-top: 60px; color: white; font-weight: bold;" onclick="p('eq')" id="+">+</h1>&nbsp&nbsp&nbsp&nbsp
	<button style="margin-top: 30px;" name="eab" onclick="return valea()">SUBMIT</button>
</div>
</form>
</center>