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
          function val1()
          {
            if (document.search.search.value.length < 3)
            {
              alert("Please enter at least 3 characters to search");//search bar validatiion
                return false;
            }
          }
          function val()//contact form validation
          {
            if (document.message.name.value.length == 0)
            {
              alert("Please enter your Name");
                return false;
            }
            if (document.message.email.value.length == 0)
            {
              alert("Please enter your E-MAIL");
                return false;
            }
            if (document.message.phone.value.length < 10)
            {
              alert("Please enter a valied Phone Number");
                return false;
            }
            if (document.message.message.value.length == 0)
            {
              alert("Please enter a Your Message");
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
                            <a class="nav-link active" href="contact.php">Contact</a>
                            <a class="nav-link" href="faq.php">FAQ/Help</a>
                        </nav>
                    </div>
            </header>
        </div>
        <div class="form_body">
            <h1>Contact Us</h1>
                <p>Please take a moment to get in touch, we will get back to you shortly.</p>

            <form name="message" action="messageconfirmed.php" method="post" style="margin-left: 30rem;margin-bottom: 10rem;">
                

                <div class="column"><!-- contact form -->
                    <label for="the-name">Your Name</label>
                    <input type="text" name="name" id="the-name">

                    <label for="the-email">Email Address</label>
                    <input type="email" name="email" id="the-email">

                    <label for="the-phone">Phone Number</label>
                    <input type="tel" name="phone" id="the-phone">

                </div>
                <div class="column">
                    <label for="the-message">Message</label>
                    <textarea name="message" id="the-message"></textarea>
                    <label>
                        <input type="checkbox" name="newsletter" value="yes"> Join our mailing list?
                    </label>
                    <input type="submit" value="Send Message" onclick="return val()">
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