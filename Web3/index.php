<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Book Store|HOME</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>
    <div id="templatemo_container">
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.php" class="current">Home</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li><a href="faq.php">FAQ/Help</a></li>
                <li><a href="login.php"><?php session_start();if (isset($_SESSION["login"])){echo "Logout";}else{echo "Login";}?></a></li>
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
                <div class="cleaner_with_height">&nbsp;</div>
                <div class="catesl">
        <div class="aleft" onclick="right()"><img src="images/arrow.png" width="100px" height="100px"></div>
        <div  id="cate1">       
        <a href="subpage.php?action=remove&id=1"><div class="cate"><img src="images/1.jpg"><br><br>PROCESSORS</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="subpage.php?action=remove&id=8"><div class="cate"><img src="images/8.jpg"><br><br>MOTHERBOARDS</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="subpage.php?action=remove&id=2"><div class="cate"><img src="images/2.jpg"><br><br>RAM (MEMORYS)</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="subpage.php?action=remove&id=3"><div class="cate"><img src="images/3.jpg"><br><br>GRAPHIC CARDS</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="subpage.php?action=remove&id=4"><div class="cate"><img src="images/4.jpg"><br><br>POWER SUPPLYS</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <a href="subpage.php?action=remove&id=5"><div class="cate"><img src="images/5.jpg"><br><br>STORAGES</div></a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        </div><div class="aright" onclick="left()"><img src="images/arrow.png" width="100px" height="100px"></div>
        
        <script type="text/javascript">
            setTimeout(function() 
                {
                    document.getElementById("cate1").style.transition = "20s";
                    document.getElementById("cate1").style.marginLeft = "-700px";
                },0);
            setTimeout(function() 
                {
                    document.getElementById("cate1").style.transition = "20s";
                    document.getElementById("cate1").style.marginLeft = "60px";
                },20000);
            function left()
            {
                document.getElementById("cate1").style.transition = "1s";
                document.getElementById("cate1").style.marginLeft = "60px";
                document.getElementById("cate1").style.marginLeft = "-700px";
            }
            function right()
            {
                document.getElementById("cate1").style.transition = "1s";
                document.getElementById("cate1").style.marginLeft = "-700px";
                document.getElementById("cate1").style.marginLeft = "60px";
            }
        </script>
    </div>

                <a href="books.php"><img src="images/templatemo_ads.jpg" alt="css template ad" /></a>

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