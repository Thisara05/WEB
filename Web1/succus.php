<?php
session_start();
    $con=mysqli_connect("localhost","Buddhini","Buddhini@123");
    mysqli_select_db($con,"book_lovers");
function login()
{
  echo "<div class='hero'>
    <div class='overlay'>
      <div class='container'>
        <div class='content'>
          <h1>Thank You !</h1>
          <p>
            login Success
          </p>
          <a href='listing.php' class='btn btn-hero'>
            CONTIUNE
          </a>
        </div>
      </div>
    </div>
  </div>";
}
function Register()
{
  echo "<div class='hero'>
    <div class='overlay'>
      <div class='container'>
        <div class='content'>
          <h1>Thank You !</h1>
          <p>
            Registration Success
          </p>
          <a href='listing.php' class='btn btn-hero'>
            CONTIUNE
          </a>
        </div>
      </div>
    </div>
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
      <a class="nav-link" href="login.php" style="margin-left: 100px;">LOGOUT</a>
    </nav>
    </div>
  </div>
  </header>

  <!-- Hero -->
  <?php
  if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $password=$_POST['pass'];
    $sql = "SELECT U_ID FROM users WHERE EMAIL = '".$email."' AND Password = '".$password."' LIMIT 1";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result)==1) 
    {
      $row = mysqli_fetch_array($result);
      $_SESSION['login'] = $row[0];
    }
    else
    {
      header("Location: loginun.php");
      exit();
    }
    login();
  }
  if (isset($_POST['reg'])) 
  {
    $name=$_POST['rname'];
    $email=$_POST['remail'];
    $phone=$_POST['rphone'];
    $password=$_POST['rpass'];
    mysqli_query($con, "INSERT INTO users (Name, Email, PhoneNum,  Password) VALUES ('$name', '$email', '$phone', '$password')");
    $sql = "SELECT U_ID FROM users WHERE EMAIL = '".$email."' AND Password = '".$password."' LIMIT 1";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result)==1) 
    {
      $row = mysqli_fetch_array($result);
      $_SESSION['login'] = $row[0];
    }
    Register();
  }
  ?>

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