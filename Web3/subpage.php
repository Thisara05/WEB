<?php 
session_start();
function book($id,$name,$author,$img,$dis,$price)
{
  echo"<h1>$name<span>(by $author)</span></h1>
                <div class='image_panel'><img src=$img alt='$name'/></div>
                <h2>Read the lessons - Watch the videos - Do the exercises</h2>
                <ul>
                    <li>By $author</li>
                    <li>Price $price</li>
                </ul>

                <p>$dis</p>

  ";
}
$con=mysqli_connect("localhost","Tharusha","Tharusha21");
mysqli_select_db($con,"book_store");
$sql = "SELECT * FROM books";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Book Store|BOOKS</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="templatemo_container">
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li><a href="faq.php">FAQ/Help</a></li>
                <li><a href="login.php"><?php if (isset($_SESSION["login"])){echo "Logout";}else{echo "Login";}?></a></li>
                <li><form action="search.php" method="GET" name="search" onsubmit="return val1()" style="margin-left: 650px;">
        <input type="search" placeholder="Search Books" name="search" style="font-size: 15px; background: #0005;color: var(--primary-color);">&nbsp&nbsp<button type="submit" style="font-size: 15px;  margin-top: 0px; position: absolute; color: var(--primary-color); font-weight: bold; background: url(images/templatemo_btn_01.jpg) no-repeat;">SEARCH</button></form></li>
            </ul>
        </div> <!-- end of menu -->

        <div id="templatemo_header">
            <div id="templatemo_special_offers">
                <p>
                    <span>25%</span> discounts for
                    purchase over $ 40
                </p>
                
            </div>


            <div id="templatemo_new_books">
                <ul>
                    <li>Suspen disse</li>
                    <li>Maece nas metus</li>
                    <li>In sed risus ac feli</li>
                </ul>
                
            </div>
        </div> <!-- end of header -->

        <div id="templatemo_content">

             <!-- end of content left -->

            <div id="templatemo_content_right">

                 <?php
          $x=1;
          while($row = mysqli_fetch_array($result))//VIEW BOOKS DETAIL FROM DB
          {
            $id = $_GET['id'];
            if ($row[0] == $id) 
            {
              book($row[0],$row[1],$row[2],$row[3],$row[4],$row[5]);
            }
          }
           mysqli_close($con);
        ?>

                <div class="cleaner_with_height">&nbsp;</div>

                <?php echo "<div class='buy_now_button'><a href='order.php?action=remove&id=$id'>Buy Now</a></div>";?>

            </div> <!-- end of content right -->

            <div class="cleaner_with_height">&nbsp;</div>
        </div> <!-- end of content -->

        <div id="templatemo_footer" style="margin-left: -10px;">
            <a href="index.php">Home</a> | <a href="books.php">Books</a> | <a href="contact.php">Contact</a> | <a
                href="faq.php">FAQ/Help</a> <br />
            <p>© Copyright 2018
                Tharusha | All Rights Reserved.</p> <a href="#"><strong>WONDERBOOKS</strong></a>
        </div>
    </div> 
</body>

</html>