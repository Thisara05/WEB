<?php 
session_start();
unset($_SESSION["login"]);
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
    <script type="text/javascript">
        function log()
        {
            document.getElementById("regf").style.display = "none";
            document.getElementById("loginf").style.display = "block";
            document.getElementById("logb").style.opacity = "100%";
            document.getElementById("regb").style.opacity = "50%";
        }
        function reg()
        {
            document.getElementById("regf").style.display = "block";
            document.getElementById("loginf").style.display = "none";
            document.getElementById("logb").style.opacity = "50%";
            document.getElementById("regb").style.opacity = "100%";
        }
         function lval()//login form validation
        {
            if (document.login.lemail.value.length==0)
            {
                alert("Please enter your E-MAIL");
                return false;
            }
            if (document.login.lpassword.value.length==0) 
            {
              alert("Please enter your Password");
              return false;
            }
        }
        function rval()//sign uo form validation
        {
            if (document.sign.name.value.length==0)
            {
                alert("Please enter your NAME");
                return false;
            }
            if (document.sign.email.value.length==0)
            {
                alert("Please enter your E-MAIL");
                return false;
            }
            if (document.sign.phone.value.length < 10)
            {
                alert("Please enter a valied Phone Number");
                return false;
            }
            if(isNaN(document.sign.phone.value))
            {
                alert("Phone Number must be Numeric");
                return false;
            }
            if (document.sign.password.value.length==0) 
            {
              alert("Please enter your Password");
              return false;
            }
            if (document.sign.rpassword.value.length==0) 
            {
              alert("Please ReType-Password");
              return false;
            }
            if (document.sign.password.value != document.sign.rpassword.value) 
            {
              alert("Password dosen't match");
              return false;
            }
            if (!document.sign.Terms.checked) 
            {
              alert("Please agree to Terms and Conditions");
              return false;
            }
        }
  </script>
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
                </div>
            </header>
        </div>
        <div style="display: flex; justify-content: center; font-size: 15pt;"><div><h1 onclick="log()" id="logb">LOGIN</h1></div>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<div><h1 onclick="reg()" id="regb">SIGNUP</h1></div></div>
        <div class="form_body">
            <form name="login" action="loginconfirmed.php" method="post" style="margin-left: 30rem;margin-bottom: 10rem;" id="loginf" ><!-- login form -->
                <div class="column">

                    <label for="the-email">Email Address</label>
                    <input type="email" name="lemail" id="the-email">

                    <label for="the-pass">Password</label>
                    <input type="password" name="lpassword" id="the-pass">
                </div>
                <div class="column">
                    <button onclick="return lval()">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspLOGIN</button>
                </div>
            </form>
            <form name="sign" action="signupconfirmed.php" method="post" style="margin-left: 30rem;margin-bottom: 10rem;" id="regf"><!-- sign up form-->
                <div class="column">
                    <label for="the-name">Your Name</label>
                    <input type="text" name="name" id="the-name">

                    <label for="the-email">Email Address</label>
                    <input type="email" name="email" id="the-email">

                    <label for="the-phone">Phone Number</label>
                    <input type="tel" name="phone" id="the-phone">

                    <label for="the-birth">Birthday</label>
                    <input type="date" name="dob" id="the-birth">


                </div>
                <div class="column">
                    <label for="the-pass">Password</label>
                    <input type="password" name="password" id="the-pass">

                    <label for="the-rpass">ReType Password</label>
                    <input type="password" name="rpassword" id="the-rpass"><br>
                        <input type="checkbox" name="Terms" value="yes">By here I agree to Book Lovers Terms of Use and Privacy Policy
                    </label>
                    <button onclick="return rval()">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSIGNUP</button>
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