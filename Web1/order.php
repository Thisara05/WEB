<?php
session_start(); 
if (!isset($_SESSION["login"])) 
{
  header("Location: login.php");
}
$con=mysqli_connect("localhost","Buddhini","Buddhini@123");
mysqli_select_db($con,"book_lovers");
$sql = "SELECT * FROM books";
$result = mysqli_query($con,$sql);
$id=$_GET["id"];
function item($name,$author,$img,$price)
{
	echo "<div class='item'>
            	<img src='$img' style='position: absolute; height: 120px;
            	margin-top: 15px;'>
            	<h2 style='position: absolute; margin-top: 30px;
            	margin-left: 100px;'>$name</h1>
            	<h3 style='position: absolute; margin-top: 60px;
            	margin-left: 100px;'>$author</h2>
        	    <h4 style='position: absolute; margin-top: 90px;
            	margin-left: 100px;'>USD $price</h3>
        </div>"; 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="css/style.css" />
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Roboto&display=swap" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/2e0586df66.js"></script>
  <title>Listing - Book Lovers</title>
  <script type="text/javascript">//order form JS validations
    function val()
        {
            if (document.order_form.fname.value.length==0)
            {
                alert("Please enter your NAME");
                return false;
            }
            if (document.order_form.lname.value.length==0)
            {
                alert("Please enter your NAME");
                return false;
            }
            if (document.order_form.email.value.length==0)
            {
                alert("Please enter your E-MAIL");
                return false;
            }
            if (document.order_form.phone.value.length < 10)
            {
                alert("Please enter a valied Phone Number");
                return false;
            }
            if(isNaN(document.order_form.phone.value))
            {
                alert("Phone Number must be Numeric");
                return false;
            }
            if (document.order_form.add.value.length < 5)
            {
                alert("Please enter a valied Address");
                return false;
            }
            if (document.order_form.city.value.length==0)
            {
                alert("Please enter your City");
                return false;
            }
            if (document.order_form.pcode.value.length==0)
            {
                alert("Please enter your Postal Code");
                return false;
            }
            if (document.order_form.country.value.length==0)
            {
                alert("Please enter your Country");
                return false;
            }
            if(document.order_form.cardtype.selectedIndex==0)
            {
              alert("Please select a Card Type");
              return false;;
            }
            if (document.order_form.cardname.value.length==0)
            {
                alert("Please enter your Card Name");
                return false;
            }
            if (document.order_form.cardnum.value.length != 16)
            {
                alert("Please enter a valied Card Number");
                return false;
            }
            if(isNaN(document.order_form.cardnum.value))
            {
                alert("Card Number must be Numeric");
                return false;
            }
            if (document.order_form.cvv.value.length != 3)
            {
                alert("Please enter a valied CVV");
                return false;
            }
            if(isNaN(document.order_form.cvv.value))
            {
                alert("CVV must be Numeric");
                return false;
            }
            if (document.order_form.expdate.value.length==0)
            {
                alert("Please enter your Card Expdate");
                return false;
            }
        }
  </script>
</head>

<body>
  <!-- Top Nav -->
  <header>
    <div class="container">
      <div class="logo">
        <h2><a href="index.php">Book Lovers</a></h2>
        <p>Your one stop book shop</p>
      </div>

      <div class="navbar-collapse collapse" id="navbarNav">
        <nav class="nav nav-bookconcept float-right navbar">
          <a class="nav-link active" href="index.php">Home</a>
          <a class="nav-link" href="book.php">Books</a>
          <a class="nav-link" href="contact.php">Contact</a>
          <a class="nav-link" href="faq.php">FAQ/Help</a>
        </nav>
      </div>
      <div class="search-box">
        <script type="text/javascript">
          function val1()
          {
            if (document.search.search.value.length < 3)
            {
              alert("Please enter at least 3 characters to search");
                return false;
            }
          }
        </script>
        <form action="search.php" method="GET" name="search" onsubmit="return val1()">
        <input type="search" placeholder="Search Books" name="search">&nbsp&nbsp<button type="submit" style="font-size: 15px; padding: 5px 19px; margin-top: 0px; position: absolute; color: var(--primary-color); font-weight: bold;">SEARCH</button></form>
      </div>
      <div class="navbar-collapse collapse" id="navbarNav">
        <nav class="nav nav-bookconcept float-right navbar">
      <a class="nav-link" href="login.php" style="margin-left: 100px;"><?php if (isset($_SESSION["login"])) 
		{
			echo "LOGOUT";
		}
		else
		{
			echo "LOGIN";
		}
		?></a>
    </nav>
    </div>
  </div>
  </header>
<!-- Hero -->
  <div class="hero">
  </div>
  <main>
    <div class="book-section-container"> <!-- order form -->

        <form class="newForm" action='<?php echo"order_confirm.php?action=remove&id=$id" ?>' method="post"name="order_form">
        <p>Please fill the form and complete your order.</p><br>

        <div class="column">
          <h2> Personal Details</h2>
            <label for="the_fname">First Name</label>
            <input type="text" name="fname" id="the_fname">

            <label for="the_lname">Last Name</label>
            <input type="text" name="lname" id="the_lname">

            <label for="the_email">Email Address</label>
            <input type="email" name="email" id="the_email">

            <label for="the_phone">Phone Number</label>
            <input type="tel" name="phone" id="the_phone"><br>

            <h2> Billing Address</h2>

            <label for="the_add">Address</label>
            <input type="text" name="add" id="the_add">

            <label for="the_city">City</label>
            <input type="text" name="city" id="the_city">

            <label for="the_pcode">Postal Code</label>
            <input type="text" name="pcode" id="the_pcode">

            <label for="the_country">Country</label>
            <input type="text" name="country" id="the_country">

        </div>
        <div class="column">
          <h2> Credit/Debit card Details</h2>

            <label for="the_cardtype">Card Type</label>
            <select name="cardtype" id="the_cardtype">
            <option>-----Select card type-----</option>
            <option>VISA</option>
            <option>MASTER</option>
            </select>
            <label for="the_cardname">Name on Card</label>
            <input type="text" name="cardname" id="the_cardname">
            <label for="the_cardnum">Card Number</label>
            <input type="the_cardnum" name="cardnum" id="the_cardnum">
            <label for="the_cvv">CVV</label>
            <input type="text" name="cvv" id="the_cvv">
            <label for="the_expdate">Expire Date</label>
            <input type="text" name="expdate" id="the_expdate">
            <label>
                <input type="checkbox" name="save_card" value="yes"> Remember this card for future orders
            </label>
            <input type="submit" value="Confirm and Pay" onclick="return val()">
            <?php
          $x=1;
          while($row = mysqli_fetch_array($result)) // show orderd book's details from database
          {
            $id = $_GET['id'];
            if ($row[0] == $id) 
            {
              item($row[1],$row[2],$row[3],$row[5]);
            }
          }
           mysqli_close($con);
        ?>
        </div>
    </form>
      </div>
    </div></center>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="copyright">
        <p>© Copyright 2018
          Buddhini Irandika Kumari Jayasundara| All Rights Reserved.</p>
      </div>
    </div>
  </footer>
</body>

</html>