<?php
session_start(); 
if (isset($_POST["rsubmit"])) 
{
    $email=$_POST["remail"];
    $phone=$_POST["rtp"];
    $name=$_POST["rname"];
    $pass=$_POST["rpass"];
    $con=mysqli_connect("localhost","Tharusha","Tharusha21");
    mysqli_select_db($con,"book_store");
    mysqli_query($con, "INSERT INTO users (Name, Email, PhoneNum, Password) VALUES ('$name', '$email', '$phone', '$pass')");
    $_SESSION["login"]=mysqli_insert_id();
}
if (isset($_POST["lsubmit"])) 
{
    $con=mysqli_connect("localhost","Tharusha","Tharusha21");
    mysqli_select_db($con,"book_store");
    $email=$_POST['lemail'];
    $password=$_POST['lpass'];
    $sql = "SELECT U_ID FROM users WHERE EMAIL = '".$email."' AND Password = '".$password."' LIMIT 1";
    $result = mysqli_query($con,$sql);
    if (mysqli_num_rows($result)==1) 
    {
        $row = mysqli_fetch_array($result);
        $_SESSION['login'] = $row[0];
    }
    else
    {
        header("Location: logun.php");
         exit();
    }
}

?>
  <!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Book Store|LOGIN</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="templatemo_container">
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.php" >Home</a></li>
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

            <div id="templatemo_content_right" style="margin-left: 0px;">
                <center><h1>Thank You !</h1>
          <p>
            <center>
                <?php
                if (isset($_POST["rsubmit"])) 
                {
                    echo "You Have Registered in Successfully!";
                }
                if (isset($_POST["lsubmit"])) 
                {
                    echo "You Have Logged in Successfully!";
                }
                ?>
                
          </p>
          <div class='buy_now_button'><center><a href='books.php?action=remove&id=$id'>
            CONTIUNE
          </a></center>
          </div>
                 <!-- end of content right -->

            <div class="cleaner_with_height">&nbsp;</div>
        </div> <!-- end of content -->

        <div id="templatemo_footer">
            <a href="index.php">Home</a> | <a href="books.php">Books</a> | <a href="contact.php">Contact</a> | <a
                href="faq.php">FAQ/Help</a> <br />
            <p>© Copyright 2018
                Tharusha | All Rights Reserved.</p> <a href="#"><strong>WONDERBOOKS</strong></a>
        </div>
    </div> 
</body>

</html>