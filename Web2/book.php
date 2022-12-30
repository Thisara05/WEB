<?php 
session_start();
function book($id,$name,$author,$img,$dis,$price)
{
  echo"
  <img src='$img' alt='book3' width='340' height='500' />
                    <div class='bookd'>
                        <h3 style='margin-top: 100px'>$author</h3><br>
                        <p style='text-align: left;'>$dis
                        </p><br>
                        <h3> $price USD</h3>
                        <a href='buy.php?action=remove&id=$id' class='bookbt' style='margin-left: -5px;'>BUY NOW</a>
                    </div>
  ";

}
$con=mysqli_connect("localhost","Danusha","Danu123");
mysqli_select_db($con,"book_corner");
$sql = "SELECT * FROM books";
$result = mysqli_query($con,$sql);
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
</head>

<body>
    <div id="cover" style="background: none; height: 0 !important;background-color: #d9b22b;">
        <div class="cover-container d-flex h-100 pt-3 mx-auto flex-column" style="height: 300px !important;">
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
            <div role="main" class="inner cover">
                <div class="search">
                    <form name="search" action="search.php" method="get">
                    <input type="text" placeholder="search Books" name="search">
                    <div class="button-src">
                        <button>Search</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="three">
            <h2 class="text-center">BOOK NAME</h2>
            <div class="row justify-content-md-center">
                    <?php
          $x=1;
          while($row = mysqli_fetch_array($result))//show data from database
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