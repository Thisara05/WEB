<?php 
session_start();
unset($_SESSION["login"]);
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
    <script type="text/javascript">
        function vallog()//LOGIN FORM JS VALIDATION
        {
            if (document.contact_form.lemail.value.length==0)
            {
                alert("Please enter your E-MAIL");
                return false;
            }
            if (document.contact_form.lpass.value.length==0)
            {
                alert("Please enter your PASSWORD");
                return false;
            }
        }
        function valreg()//REGISTER FORM JS VALIDATION
        {
            if (document.contact_form.rname.value.length==0)
            {
                alert("Please enter your NAME");
                return false;
            }
            if (document.contact_form.remail.value.length==0)
            {
                alert("Please enter your E-MAIL");
                return false;
            }
            if (document.contact_form.rtp.value.length==0)
            {
                alert("Please enter your PHONE NUMBER");
                return false;
            }
            if (document.contact_form.rpass.value.length==0)
            {
                alert("Please enter your PASSWORD");
                return false;
            }
            if (document.contact_form.rcpass.value.length==0)
            {
                alert("Please re enter your PASSWORD");
                return false;
            }
            if (document.contact_form.rcpass.value != document.contact_form.rpass.value)
            {
                alert("Password dosen't match");
                return false;
            }
        }
    </script>
</head>

<body>
    <div id="templatemo_container">
        <div id="templatemo_menu">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="contact.php">Contacts</a></li>
                <li><a href="faq.php">FAQ/Help</a></li>
                <li><a href="login.php" class="current"><?php if (isset($_SESSION["login"])){echo "Logout";}else{echo "Login";}?></a></li>
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

                <div class="container" >
                    <form id="contact" action="loginsu.php" method="post" name="contact_form">
                        <table>
                            <tr>
                                <th width="400px">
                                    <h3>Login</h3>
                                </th>
                                <th width="50px"></th>
                                <th width="400px">
                                    <h3>Register</h3>
                                </th>
                            </tr>
                            <tr>
                                <td style="vertical-align: top;"><!-- LOGIN FORM-->
                        <fieldset>
                            <input placeholder="Your Email Address" type="email" name="lemail">
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Password" type="Password" name="lpass">
                        </fieldset>
                        <fieldset>
                            <button name="lsubmit" type="submit" id="contact-submit" onclick="return vallog()">Login</button>
                        </fieldset>
                                </td>
                                <td></td>
                                <td>
                        <fieldset><!-- REGISTER FORM -->
                            <input placeholder="Your name" type="text" name="rname">
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Email Address" type="email" name="remail">
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Phone Number" type="tel" name="rtp">
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Password" type="Password" name="rpass">
                        </fieldset>
                        <fieldset>
                            <input placeholder="ReType Password" type="Password" name="rcpass">
                        </fieldset>
                        <fieldset>
                            <button name="rsubmit" type="submit" id="contact-submit" onclick="return valreg()">Register</button>
                        </fieldset>
                                </td>
                            </tr>
                        </table>
                    </form>


                </div>
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