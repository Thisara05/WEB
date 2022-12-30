<?php
session_start();
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $add=$_POST["add"];
    $pcode=$_POST["postal"];
    $name=$_POST["name"];
    $cardtype=$_POST["ctype"];
    $cardname=$_POST["cname"];
    $cardnum=$_POST["cnum"];
    $cvv=$_POST["cvv"];
    $expdate=$_POST["edate"];
    $book=$_GET["id"];
    $date=date("Y.M.d");
    $con=mysqli_connect("localhost","Danusha","Danu123");
    mysqli_select_db($con,"book_corner");
    mysqli_query($con, "INSERT INTO book_order (Name, Email, PhoneNum, Addr, PostalCode, CardType, CardName, CardNumb, CVV, ExpDate, BookID) VALUES ('$name', '$email', '$phone', '$add', '$pcode', '$cardtype', '$cardname', '$cardnum', '$cvv', '$expdate', '$book')");
    $sql = "SELECT * FROM books";
    $result = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result))
          {
            if ($row[0] == $book) 
            {
              $bookname=$row[1];
              $price=$row[5];
              $img=$row[3];
            }
          }
           mysqli_close($con);
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
        <div class="mes"><center>
            <h1>Your Order Has been<br>Confirmed!</h1>
            <img src=<?php echo "$img"; ?>>
            <table>
                <tr>
                    <td width="700px"><h1>Book Name</h1></td>
                    <td width="60px"><h1>-</h1></td>
                    <td><h2><?php echo "$bookname"; ?></h2></td>
                </tr>
                <tr>
                    <td><h1>Price</h1></td>
                    <td><h1>-</h1></td>
                    <td><h2><?php echo "$price"; ?></h2></td>
                </tr>
                <tr>
                    <td><h1>Customer Name</h1></td>
                    <td><h1>-</h1></td>
                    <td><h2><?php echo "$name"; ?></h2></td>
                </tr>
                <tr>
                    <td><h1>Customer Address</h1></td>
                    <td><h1>-</h1></td>
                    <td><h2><?php echo "$add"; ?></h2></td>
                </tr>
                <tr>
                    <td><h1>Date</h1></td>
                    <td><h1>-</h1></td>
                    <td><h2><?php echo "$date"; ?></h2></td>
                </tr>
                
            </table>
            <br>
            <a href="index.php">Continue</a><br>
        </center>
        </div>
        <footer class="cookbookf mt-auto">
            <div class="inner">
                <p>© Copyright 2018
                    Danusha Dewmin Indrarathna | All Rights Reserved</p>
            </div>
        </footer>
    
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