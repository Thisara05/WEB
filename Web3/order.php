<?php 
session_start(); 
if (!isset($_SESSION["login"])) 
{
  header("Location: login.php");
}
function item($name,$author,$img,$price)
{
    echo "<div class='item'>
    <h2 style='position: absolute; height: 240px;
                margin-left: 155px;'> Order Details</h2><br>
                <img src='$img' style='position: absolute; height: 240px;
                margin-top: 15px; margin-left: -55px;'>
                <h2 style='position: absolute; margin-top: 280px;
                margin-left: 155px;'>$name</h1>
                <h3 style='position: absolute; margin-top: 310px;
                margin-left: 155px;'>$author</h2>
                <h4 style='position: absolute; margin-top: 340px;
                margin-left: 155px;'>USD $price</h3>
        </div>"; 
}
$id=$_GET["id"];
$con=mysqli_connect("localhost","Tharusha","Tharusha21");
mysqli_select_db($con,"book_store");
$sql = "SELECT * FROM books";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Book Store|ORDER</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
    function val()//ORDER FORM JS VALIDATION
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
                alert("Please enter a valied Billing Address");
                return false;
            }
            if (document.order_form.city.value.length==0)
            {
                alert("Please enter your Billing City");
                return false;
            }
            if (document.order_form.pcode.value.length==0)
            {
                alert("Please enter your Billing Postal Code");
                return false;
            }
            if (document.order_form.country.value.length==0)
            {
                alert("Please enter your Billing Country");
                return false;
            }
             if (document.order_form.sadd.value.length < 5)
            {
                alert("Please enter a valied Shipping Address");
                return false;
            }
            if (document.order_form.scity.value.length==0)
            {
                alert("Please enter your Shipping City");
                return false;
            }
            if (document.order_form.spcode.value.length==0)
            {
                alert("Please enter your Shipping Postal Code");
                return false;
            }
            if (document.order_form.scountry.value.length==0)
            {
                alert("Please enter your Shipping Country");
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
    <div id="templatemo_container">
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li><a href="faq.php">FAQ/Help</a></li>
                <li><a href="login.php"><?php if (isset($_SESSION["login"])){echo "Logout";}else{echo "Login";}?></a></li>
                <li><form action="search.php" method="GET" name="search" onsubmit="return val1()" style="margin-left: 650px;">
        <input type="search" placeholder="Search Books" name="search" style="font-size: 15px; background: #0005;color: var(--primary-color);">&nbsp&nbsp<button type="submit" style="font-size: 15px;  margin-top: 0px; position: absolute; color: var(--primary-color); font-weight: bold; background: url(images/templatemo_btn_01.jpg) no-repeat;">SEARCH</button></form></li>
            </ul>
        </div> <!-- end of menu -->

        <div id="templatemo_header">
            <div id="templatemo_special_offers">
                <p>
                    <span>25%</span> discounts for
                    purchase over $ 40
                </p>
                
            </div>


            <div id="templatemo_new_books">
                <ul>
                    <li>Suspen disse</li>
                    <li>Maece nas metus</li>
                    <li>In sed risus ac feli</li>
                </ul>
                
            </div>
        </div> <!-- end of header -->

        <div id="templatemo_content">
            <form class="newForm" action='<?php echo"order_confirm.php?action=remove&id=$id" ?>' method="post" name="order_form"><!-- ORDER FORM -->
        <p>Please fill the form and complete your order.</p><br>

        <table>
            <tr>
                <td style="vertical-align: top; align-items: center;text-align: center; width: 25%;">
          <h2> Personal Details</h2><br>
            <label for="the_fname">First Name</label><br>
            <input type="text" name="fname" id="the_fname"><br>

            <label for="the_lname">Last Name</label><br>
            <input type="text" name="lname" id="the_lname"><br>

            <label for="the_email">Email Address</label><br>
            <input type="email" name="email" id="the_email"><br>

            <label for="the_phone">Phone Number</label><br>
            <input type="tel" name="phone" id="the_phone"><br><br>

            <h2> Billing Address</h2><br>

            <label for="the_add">Address</label><br>
            <input type="text" name="add" id="the_add"><br>

            <label for="the_city">City</label><br>
            <input type="text" name="city" id="the_city"><br>

            <label for="the_pcode">Postal Code</label><br>
            <input type="text" name="pcode" id="the_pcode"><br>

            <label for="the_country">Country</label><br>
            <input type="text" name="country" id="the_country"><br><br>

            <h2> Shipping Address</h2><br>

            <label for="the_add">Address</label><br>
            <input type="text" name="sadd" id="the_add"><br>

            <label for="the_city">City</label><br>
            <input type="text" name="scity" id="the_city"><br>

            <label for="the_pcode">Postal Code</label><br>
            <input type="text" name="spcode" id="the_pcode"><br>

            <label for="the_country">Country</label><br>
            <input type="text" name="scountry" id="the_country"><br>
        </td>
        <td style="vertical-align: top; align-items: center;text-align: center; width: 25%;">
          <h2> Credit/Debit card Details</h2><br>

            <label for="the_cardtype">Card Type</label><br>
            <select name="cardtype" id="the_cardtype">
            <option>-----Select card type-----</option>
            <option>VISA</option>
            <option>MASTER</option>
            </select><br>
            <label for="the_cardname">Name on Card</label><br>
            <input type="text" name="cardname" id="the_cardname"><br>
            <label for="the_cardnum">Card Number</label><br>
            <input type="the_cardnum" name="cardnum" id="the_cardnum"><br>
            <label for="the_cvv">CVV</label><br>
            <input type="text" name="cvv" id="the_cvv"><br>
            <label for="the_expdate">Expire Date</label><br>
            <input type="text" name="expdate" id="the_expdate"><br><br>
            <label>
                <input type="checkbox" name="save_card" value="yes"> Save this card for future orders
            </label><br><br>
            <div class='buy_now_button'><input type="submit" value="Pay Now" onclick="return val()"></div><br>
            </td>
            <td style="vertical-align: top; align-items: center;text-align: center;">

                <?php
          $x=1;
          while($row = mysqli_fetch_array($result))
          {
            $id = $_GET['id'];
            if ($row[0] == $id) 
            {
              item($row[1],$row[2],$row[3],$row[5]);
            }
          }
           mysqli_close($con);
        ?>
            </td>
            </tr>
            </table>
            
    </form>
        </div> <!-- end of content -->
        <div id="templatemo_footer" style="margin-left: -10px;">
            <a href="index.php">Home</a> | <a href="books.php">Books</a> | <a href="contact.php">Contact</a> | <a
                href="faq.php">FAQ/Help</a> <br />
            <p>© Copyright 2018
                Tharusha | All Rights Reserved.</p> <a href="#"><strong>WONDERBOOKS</strong></a>
        </div>
    </div> 
</body>

</html>