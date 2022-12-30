<?php 
session_start();
function book($id,$name,$author,$img,$dis,$price)
{
  echo"
  </div>
  <center>
  <h1 class='title' style='font-size: 30pt'>$name</h1><br><br>
  <img src='$img' class='sp'><br><br>
  <p class='des' style='font-size: 15pt'>$dis</p><br><br>
  <a href='order.php?action=remove&id=$id' class='bt'>ORDER NOW | USD $price</a><br><br><br><br>
   </center>
  ";

}
$con=mysqli_connect("localhost","Buddhini","Buddhini@123");
mysqli_select_db($con,"book_lovers");
$sql = "SELECT * FROM books";
$result = mysqli_query($con,$sql);
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
          <h1>Welcome to Book Lovers</h1>
          <p>
            Meet your favorite book, find your reading community, and manage
            your reading life.
          </p>
          <a href="listing.php" class="btn btn-hero"> ALL BOOKS </a>
        </div>
      </div>
    </div>
  </div>
  <main>
    <div class="book-section-container"> <!-- show data from Database table -->

        <?php
          $x=1;
          while($row = mysqli_fetch_array($result))
          {
            $id = $_GET['id'];
            if ($row[0] == $id) 
            {
              book($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
            }
          }
           mysqli_close($con);
        ?>
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