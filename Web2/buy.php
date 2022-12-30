<?php
session_start(); 
if (!isset($_SESSION["login"])) 
{
  header("Location: login.php");
}
$con=mysqli_connect("localhost","Danusha","Danu123");
mysqli_select_db($con,"book_corner");
$sql = "SELECT * FROM books";
$result = mysqli_query($con,$sql);
$id=$_GET["id"];
function book($name,$author,$img,$price)
{
    echo "<div class='item'>
                <img src='$img' style='position: absolute; height: 220px;
                margin-top: 15px; margin-left: 480px'>
                <h2 style='position: absolute; margin-top: 30px;
                margin-left: 680px;'>$name</h1>
                <h4 style='position: absolute; margin-top: 160px;
                margin-left: 680px;'>USD $price</h3>
        </div>"; 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="favicon.ico" />
    <title>Book Corner</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link href="cover.css" rel="stylesheet" />
    <link href="contact.css" rel="stylesheet" />
    <script type="text/javascript">//order form validation
    function val()
        {
            if (document.order.name.value.length==0)
            {
                alert("Please enter your NAME");
                return false;
            }
            if (document.order.email.value.length==0)
            {
                alert("Please enter your E-MAIL");
                return false;
            }
            if (document.order.phone.value.length < 10)
            {
                alert("Please enter a valied Phone Number");
                return false;
            }
            if(isNaN(document.order.phone.value))
            {
                alert("Phone Number must be Numeric");
                return false;
            }
            if (document.order.add.value.length < 5)
            {
                alert("Please enter a valied Address");
                return false;
            }
            if (document.order.postal.value.length==0)
            {
                alert("Please enter your Postal Code");
                return false;
            }
            if(document.order.ctype.selectedIndex==0)
            {
              alert("Please select a Card Type");
              return false;;
            }
            if (document.order.cname.value.length==0)
            {
                alert("Please enter your Card Name");
                return false;
            }
            if (document.order.cnum.value.length != 16)
            {
                alert("Please enter a valied Card Number");
                return false;
            }
            if(isNaN(document.order.cnum.value))
            {
                alert("Card Number must be Numeric");
                return false;
            }
            if (document.order.cvv.value.length != 3)
            {
                alert("Please enter a valied CVV");
                return false;
            }
            if(isNaN(document.order.cvv.value))
            {
                alert("CVV must be Numeric");
                return false;
            }
            if (document.order.edate.value.length==0)
            {
                alert("Please enter your Card Expdate");
                return false;
            }
        }
  </script>
</head>

<body>
    <div id="cover" style="background: none; height: 0 !important;">
        <div class="cover-container d-flex h-100 pt-3 mx-auto flex-column" style="height: 200px !important;">
            <header class="bookconcept mb-auto">
                <div class="inner">
                    <h3 class="bookconcept-brand">
                        <a href="index.php">
                        <img src="logo.svg" alt="bookconcept" width="55" height="55" />
                        </a>
                    </h3>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">menu</span>
                    </button>
                    <div class="navbar-collapse collapse" id="navbarNav">
                        <nav class="nav nav-bookconcept float-right navbar">
                            <a class="nav-link" href="index.php">Home</a>
                            <a class="nav-link" href="books.php">Books</a>
                            <a class="nav-link" href="contact.php">Contact</a>
                            <a class="nav-link" href="faq.php">FAQ/Help</a>
                        </nav>
                    </div>
            </header>
        </div>
        <div class="form_body">
            <h1>BUY IT!</h1>
            <?php
          $x=1;
          while($row = mysqli_fetch_array($result))//show orderd books data from database
          {
            $id = $_GET['id'];
            if ($row[0] == $id) 
            {
              book($row[1],$row[2],$row[3],$row[5]);
            }
          }
           mysqli_close($con);
        ?>
            <form name="order" action='<?php echo"orderconfirmed.php?action=remove&id=$id"?>' method="post" style="margin-left: 30rem;margin-bottom: 10rem;">
                

                <div class="column">
                    <label for="the-name">Your Name</label>
                    <input type="text" name="name" id="the-name">

                    <label for="the-email">Email Address</label>
                    <input type="email" name="email" id="the-email">

                    <label for="the-phone">Phone Number</label>
                    <input type="tel" name="phone" id="the-phone">

                    <label for="the-address">Delivery Address</label>
                    <input type="text" name="add" id="the-address1"><br>

                    <label for="the-postal">Postal Code</label>
                    <input type="text" name="postal" id="the-postal">

                    <label for="the-ctype">Card Type</label>
                    <select id="the-ctype" name="ctype">
                        <option>##### Card Type #####</option>
                        <option>Visa</option>
                        <option>Master</option>
                    </select>

                    <label for="the-cname">Card Holder's Name</label>
                    <input type="text" name="cname" id="the-cname">

                    <label for="the-cnum">Card Number</label>
                    <input type="text" name="cnum" id="the-cnum">

                    <label for="the-cvv">CVV</label>
                    <input type="text" name="cvv" id="the-cvv">

                    <label for="the-edate">Expire Date</label>
                    <input type="text" name="edate" id="the-edate">

                </div>
                <div class="column"><br><br>
                    <input type="submit" value="Confirm And Buy" onclick="return val()">
                </div>
            </form>
        </div>

        <footer class="cookbookf mt-auto">
            <div class="inner">
                <p>© Copyright 2018
                    Danusha Dewmin Indrarathna | All Rights Reserved</p>
            </div>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>