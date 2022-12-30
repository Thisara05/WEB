<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Book Store|CONTACT</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <link href="style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript">
        function val()//CONTACT FORM VALIDATION
        {
            if (document.contact_form.name.value.length==0)
            {
                alert("Please enter your NAME");
                return false;
            }
            if (document.contact_form.email.value.length==0)
            {
                alert("Please enter your E-MAIL");
                return false;
            }
            if (document.contact_form.phone.value.length < 10)
            {
                alert("Please enter a valied Phone Number");
                return false;
            }
            if(isNaN(document.contact_form.phone.value))
            {
                alert("Phone Number must be Numeric");
                return false;
            }
            else if (document.contact_form.message.value.length < 10) 
            {
                alert("Message must need more than 10 characters");
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
                <li><a href="contact.php" class="current">Contacts</a></li>
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

                <div class="container">
                    <form id="contact" action="message_confirm.php" method="post"><!-- CONTACT FORM -->
                        <h3>Quick Contact</h3>
                        <h4>Contact us today, and get reply with in 24 hours!</h4>
                        <fieldset>
                            <input placeholder="Your name" type="text" tabindex="1" required autofocus name="name">
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Email Address" type="email" tabindex="2" required name="email">
                        </fieldset>
                        <fieldset>
                            <input placeholder="Your Phone Number" type="tel" tabindex="3" required name="phone">
                        </fieldset>
                        <fieldset>
                            <textarea placeholder="Type your Message Here...." tabindex="5" required name="message"></textarea>
                        </fieldset>
                        <fieldset>
                            <button name="submit" type="submit" id="contact-submit"
                                data-submit="...Sending" onclick="return val()">Submit</button>
                        </fieldset>
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