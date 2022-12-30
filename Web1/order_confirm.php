<?php
session_start();
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $add=$_POST["add"] .','. $_POST["city"];
    $pcode=$_POST["pcode"];
    $country=$_POST["country"];
    $name=$_POST["fname"] .' '. $_POST["lname"];
    $cardtype=$_POST["cardtype"];
    $cardname=$_POST["cardname"];
    $cardnum=$_POST["cardnum"];
    $cvv=$_POST["cvv"];
    $expdate=$_POST["expdate"];
    $book=$_GET["id"];
    $date=date("Y-M-d");
    $con=mysqli_connect("localhost","Buddhini","Buddhini@123");
    mysqli_select_db($con,"book_lovers");
    mysqli_query($con, "INSERT INTO book_order (Name, Email, PhoneNum, Add_City, PostalCode, Country, CardType, CardName, CardNumb, CVV, ExpDate, BookID) VALUES ('$name', '$email', '$phone', '$add', '$pcode', '$country', '$cardtype', '$cardname', '$cardnum', '$cvv', '$expdate', '$book')");
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
  <title>Book Lovers</title>
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
    <div class="overlay">
      <div class="container">
        <div class="content">
          <h1>Thank You !</h1>
          <p>
            Your order has been confirmed! 
          </p>
          <a href="listing.php" class="btn btn-hero">
            CONTIUNE
          </a>
        </div>
      </div>
    </div>
  </div><br><br>
  <center><div class="rec">
    <?php
    $con=mysqli_connect("localhost","Buddhini","Buddhini@123");
    mysqli_select_db($con,"book_lovers");
    $sql = "SELECT * FROM books";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))//show books data from database
          {
            if ($row[0] == $book) 
            {
              $bname=$row[1];
              $bprice=$row[5];
              $bimg=$row[3];
            }
          }
           mysqli_close($con);
    ?>
    <h1 style="color: red;">Order Confirmation Recipt</h1>
    <h2><?php echo "$bname"; ?></h2>
    <img src=<?php echo "$bimg"; ?>>
    <h2><?php echo "$bprice"; ?></h2>
    <h2>Delivery Address</h2>
    <h3><?php echo "$add,$pcode,$country"; ?></h3>
    <h2>Date</h2>
    <h3><?php echo "$date"; ?></h3>
    <br>
  </div>
  </center>



  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="copyright">
        <p>© Copyright 2018
          Buddhini Irandika Kumari Jayasundara | All Rights Reserved.</p>
      </div>
    </div>
  </footer>
</body>

</html>