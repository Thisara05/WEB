<?php 
session_start();
unset($_SESSION["login"]);
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
  <script type="text/javascript">
    function vallog()//login form JS validation
        {
            if (document.order_form.email.value.length==0)
            {
                alert("Please enter your E-MAIL");
                return false;
            }
            if (document.order_form.pass.value.length==0) 
            {
              alert("Please enter your Password");
              return false;
            }
        }
        function valreg()//register form JS validation
        {
            if (document.order_form.rname.value.length==0)
            {
                alert("Please enter your NAME");
                return false;
            }
            if (document.order_form.remail.value.length==0)
            {
                alert("Please enter your E-MAIL");
                return false;
            }
            if (document.order_form.rphone.value.length < 10)
            {
                alert("Please enter a valied Phone Number");
                return false;
            }
            if(isNaN(document.order_form.rphone.value))
            {
                alert("Phone Number must be Numeric");
                return false;
            }
            if (document.order_form.rpass.value.length==0) 
            {
              alert("Please enter your Password");
              return false;
            }
            if (document.order_form.rrpass.value.length==0) 
            {
              alert("Please ReType-Password");
              return false;
            }
            if (document.order_form.rpass.value != document.order_form.rrpass.value) 
            {
              alert("Password dosen't match");
              return false;
            }
            if (!document.order_form.agree.checked) 
            {
              alert("Please agree to Terms and Conditions");
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
    <div class="book-section-container">

        <form class="newForm" action='succus.php' method="post"name="order_form">
        <p>Please Create or Login to your Book Lovers account</p><br>

        <div class="column">
          <h2> LOGIN </h2><!-- login form -->
            <label for="the_email">Email Address</label>
            <input type="email" name="email" id="the_email">

            <label for="the_pass">Password</label>
            <input type="password" name="pass" id="the_pass"><br>

            <input type="submit" value="LOGIN" onclick="return vallog()" name="login">
        </div>
        <div class="column">
          <h2> Register</h2><!-- register form -->

            <label for="the_fname">Name</label>
            <input type="text" name="rname" id="the_fname">

            <label for="the_email">Email Address</label>
            <input type="email" name="remail" id="the_email">

            <label for="the_phone">Phone Number</label>
            <input type="tel" name="rphone" id="the_phone"><br>

            <label for="the_pass">Password</label>
            <input type="password" name="rpass" id="the_pass"><br>

            <label for="the_rpass">ReType-Password</label>
            <input type="password" name="rrpass" id="the_rpass"><br><br>

                <input type="checkbox" name="agree" value="yes"> By here I agree to Book Lovers Terms of Use and Privacy Policy
            </label>
            <input type="submit" value="Register" onclick="return valreg()" name="reg">
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