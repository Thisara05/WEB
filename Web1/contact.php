<?php
session_start();
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
          <a class="nav-link" href="index.php">Home</a>
          <a class="nav-link" href="book.php">Books</a>
          <a class="nav-link active" href="contact.php">Contact</a>
          <a class="nav-link" href="faq.php">FAQ/Help</a>
        </nav>
      </div>
      <div class="search-box">
        <script type="text/javascript">
          function val1()//search box JS validations
          {
            if (document.search.search.value.length < 3)
            {
              alert("Please enter at least 3 characters to search");
                return false;
            }
          }

          //contact form JS validations
          function val()
          {
            if (document.contact_form.name.value.length == 0)
            {
              alert("Please enter your Name");
                return false;
            }
            if (document.contact_form.email.value.length == 0)
            {
              alert("Please enter your E-MAIL");
                return false;
            }
            if (document.contact_form.phone.value.length < 10)
            {
              alert("Please enter a valied Phone Number");
                return false;
            }
            if (document.contact_form.message.value.length == 0)
            {
              alert("Please enter a Your Message");
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
                    <a href="listing.php" class="btn btn-hero">
                        ALL BOOKS
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Contact form -->

    <form class="newForm" action="message_confirm.php" method="post"name="contact_form">
        <p>Please take a moment to get in touch, we will get back to you shortly.</p>

        <div class="column">
            <label for="the-name">Your Name</label>
            <input type="text" name="name" id="the_name">

            <label for="the-email">Email Address</label>
            <input type="email" name="email" id="the_email">

            <label for="the-phone">Phone Number</label>
            <input type="tel" name="phone" id="the_phone">
        </div>
        <div class="column">
            <label for="the-message">Message</label>
            <textarea name="message" id="the_message"></textarea>
            <label>
                <input type="checkbox" name="newsletter" value="yes"> Join our mailing list?
            </label>
            <input type="submit" value="Send Message" onclick="return val()">
        </div>
    </form>

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