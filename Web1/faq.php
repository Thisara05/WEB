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
          <a class="nav-link" href="contact.php">Contact</a>
          <a class="nav-link active" href="faq.php">FAQ/Help</a>
        </nav>
      </div>
      <div class="search-box">
        <script type="text/javascript">//search bar Js validations
          function val1()
          {
            if (document.search.search.value.length < 3)
            {
              alert("Please enter at least 3 characters to search");
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


    <div class="content">

        <!-- __________________________ SECTIONS ___________________________ -->

        <h3 style="margin-top: 1rem;">OUR BOOKS & MATERIALS</h3>

        <div>
            <input type="checkbox" style="display: none;" id="question1" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question1" class="question">
                Will your books and materials withstand repeated use—are they satisfaction guaranteed?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Our hardcover books are library bound with exposed reinforced endsheets, which means extra lasting
                    power, use after use. They are side sewn or section sewn, and all covers are laminated with glossy
                    film. The books are vibrant, durable, and unconditionally guaranteed. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input type="checkbox" id="question2" style="display: none;" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question2" class="question" style="padding-bottom: 1rem;">
                Do you have “green” products?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Many of Cavendish Square’s products are produced with recycled pulp content, allowing our company to
                    pursue its green goals while adding additional value for your eco-conscious purchases. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question3" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question3" class="question">
                Do you provide book processing?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Cavendish Square gladly provides library processing services. Please call 1-877-980-4450 or email
                    Customer Service to learn more about processing and available and customizable options for your
                    bookshelf needs. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question4" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question4" class="question">
                Do you keep my library processing specifications on file?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Yes, Cavendish Square keeps all customer processing specifications on file. You won't need to fill
                    out library processing forms each time you order, we’ll do it for you. You can download a processing
                    form here. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question5" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question5" class="question">
                What is the charge for processing?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>We offer free processing on all orders over $350. On orders less than $350 the cost of barcodes and
                    marc records is $25.00 per order. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question6" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question6" class="question">
                Are your books on Accelerated Reader®?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Accelerated Reader quizzes are available for many of our books. The AR Logo will appear where quizzes
                    are available. For more about AR, please click here. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question7" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question7" class="question">
                Are your books correlated to state and national standards?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Yes, all of our books are correlated to state and national standards. This web site’s correlation
                    page will help you easily match our products with your state standards, and choose excellent
                    selections for national standards. Otherwise, feel free to call us at 1-877-980-4450 and we’ll
                    assist you in meeting your needs. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question8" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question8" class="question">
                Where can I find information about your authors or how can I contact them?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Cavendish Square commissions authors who are subject-matter experts and professional writers. If
                    you’d like to learn more about an author’s background or if you wish to contact one of our authors,
                    please click here to submit your contact information along with the author’s name. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question9" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question9" class="question">
                How do I submit a book idea, collection suggestion, or artwork to Cavendish Square?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Cavendish Square would like to hear from you—we’re dedicated to offering an ever-expanding array of
                    solutions that will meet your needs. Any ideas, suggestions, or creative input that Cavendish Square
                    can follow to help you achieve academic success, please feel free to share with our representatives.
                    Artists and writers may also contact our Customer Service team for information about contributing to
                    Cavendish. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question10" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question10" class="question">
                Are your books available in other formats, such as eBooks?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Cavendish Square titles are also available as eBooks. Also available are over 50 database titles.
                    Click here for more information on our eBooks and digital databases. For a complete list of
                    available digital resources, please call Customer Service at 1-877-980-4450 between 9AM and 5 PM
                    EST, Monday through Friday. </p>

            </div>
        </div>

        <!-- __________________________ SECTIONS ___________________________ -->

        <h3>PURCHASE, ORDERING, & RETURNS</h3>

        <div>
            <input style="display: none;" type="checkbox" id="question11" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question11" class="question">
                What is the "S&L" price?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>S&L means school/library. Our school/library prices reflect a 30% discount off list prices.
                </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question12" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question12" class="question">
                How do I order Cavendish Square Materials?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>You can order Cavendish Square Products by mail, toll-free fax or telephone, and online through our
                    cart or quick order portals.</p>
                <p>

                    By mail, please submit your order form (from a catalog, brochure, or PDF) or purchase order to:</p>
                <p>
                    Cavendish Square<br />
                    243 5th Avenue, Suite 136<br />
                    New York, NY 10016<br />
                    Attention: Customer Service</p>
                <p>
                    Place an order anytime through our toll-free fax at 1-877-980-4454. Please fax the order form or
                    purchase order; be sure to include the billing and shipping addresses, item ISBNs, titles, quantity,
                    price, shipping/handling, and tax (if applicable). Please include any special instructions or
                    library processing requests.</p>
                <p>
                    Please feel free to order toll-free via telephone between 9 AM and 5 PM, Eastern Standard Time,
                    Monday through Friday at 1-877-980-4450.</p>
                <p>
                    To order online, please select items for your cart and proceed to Checkout, or you can input ISBNs
                    directly to create a quick order here.
                </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question13" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question13" class="question">
                How do I redeem coupons/discounts/online purchase bonuses?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Cavendish Square is happy to redeem all coupons, price-reduction offers, online purchase bonuses, and
                    special discounts. Please include any coupons or offers with mailed or faxed orders.</p>
                <p>

                    When placing your online order please follow instructions for coupon and bonus redemption. For any
                    price-reduction offers and special discounts, please include these details within the comment
                    section of the purchase portal.</p>
                <p>

                    You can also contact Customer Service at 1-877-980-4450 between 9 AM and 5 PM, EST, Monday through
                    Friday to redeem offers.
                </p>
            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question14" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question14" class="question">
                How long will it take for me to receive my order once it has been placed?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Our standard shipping time is 7 to 10 business days from the receipt of your purchase order for
                    in-stock items. If your order requires expedited delivery, please call Customer Service at
                    1-877-980-4450. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question15" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question15" class="question">
                What happens when an item is Out of Stock? Does that mean it will be backordered?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Cavendish Square does its very best to keep everything in stock. If a product is temporarily out of
                    stock, it will be backordered automatically and shipped immediately upon availability.</p>

                <p> At the time of placing your order (either via phone, fax, or online), please specify how you would
                    wish to process backorders if they occur. </p>
                <p>Selections include:<br />
                <ul>
                    <li>Billing at the time of order processing or billing when the backordered item(s) ship</li>
                    <li>Canceling an order if backorder status occurs, or creating a termination date when an order
                        should be canceled if items still remain on backorder status on that date</li>
                </ul>
                </p>
            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question16" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question16" class="question">
                What is your return policy?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Our products are satisfaction guaranteed. If you are not completely satisfied with your purchase,
                    please contact Customer Service within 30 days of delivery and we will gladly replace your products
                    or credit your account.<br />
                    We will accept returns on any material that is found to be unsatisfactory including improperly
                    processed books, however, properly process books cannot be returned. Products must be returned
                    within 60 days of purchase and must be accompanied by a copy of the invoice. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->


        <!-- __________________________ SECTIONS ___________________________ -->

        <h3>TAX &amp; SHIPPING</h3>

        <div>
            <input style="display: none;" type="checkbox" id="question17" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question17" class="question">
                Do you charge sales tax?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>We only apply taxes for states where applicable. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question18" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question18" class="question">
                What is the cost for shipping & handling?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Shipping is FREE on all orders over $350. </p>
                <p>On orders less than $350, shipping is 9% of your invoice total. </p>
                <p>Additional shipping charges will be applied to all orders that are outside of the United States. </p>
            </div>
        </div>
        <!-- _____________________________________________________ -->


        <!-- __________________________ SECTIONS ___________________________ -->

        <h3>RIGHTS &amp; USAGE</h3>

        <div>
            <input style="display: none;" type="checkbox" id="question19" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question19" class="question">
                How do I inquire about reproduction, translation, electronic publishing, or subsidiary rights?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Permissible usage varies per product. Many of our books are available for translation, subsidiary
                    rights licensing, and usage other than original purposes.</p>
                <p>

                    You can verify usage rights through Customer Service at 1-877-980-4450 or by submitting your query
                    through our Customer Service form.</p>
                <p>

                    When contacting us, please have the book title/product name and ISBN that you’re inquiring about,
                    along with a description of how you would like to use/reproduce the materials.</p>
                <p>

                    Via standard mail, please apply for permissions to:<br />
                    Cavendish Square Publishing<br />
                    Attn: Permissions Department<br />
                    243 5th Avenue, Suite 136<br />
                    New York, NY 10016
                </p>
            </div>
        </div>


        <!-- __________________________ SECTIONS ___________________________ -->

        <h3>DOMESTIC &amp; INTERNATIONAL SALES</h3>

        <div>
            <input style="display: none;" type="checkbox" id="question20" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question20" class="question">
                How can I find my local sales representative?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Our Representatives—who are experts in making sure that your acquisition needs are met—can be located
                    by calling Customer Service at 1-877-980-4450. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question21" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question21" class="question">
                How do I purchase books if I live outside of the United States?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Customer Service can help you directly with international purchases. Additional shipping charges will
                    be added for international delivery. Please call Customer Service at 1-877-980-4450. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question22" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question22" class="question">
                Do you have distributors outside of the United States?
            </label>
            <div class="answers" style="margin-top: 1rem;">

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question23" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question23" class="question">
                How can I obtain a copy of your catalogs and brochures?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>We produce several catalogs and brochures, covering our full line across all divisions. To download
                    any brochures and catalogs in PDF form, or to request delivery of any of our current materials,
                    please click here. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->


        <!-- __________________________ SECTIONS ___________________________ -->

        <h3>CUSTOMER SERVICE</h3>

        <div>
            <input style="display: none;" type="checkbox" id="question24" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question24" class="question">
                What are your customer services?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>Our Customer Service Representatives are outstanding individuals who understand the importance of
                    knowing you. Cavendish Square customer services are varied and flexible, depending upon your
                    specific needs. If you need to view a sample or find out more about our books, collections, or other
                    products in order to make an informed purchase, we’re ready to serve you.</p>
                <p>

                    Our Customer Service Representatives are available from 9 AM to 5 PM EST at 1-877-980-4450. <br />

                    Cavendish Square<br />
                    243 5th Avenue, Suite 136<br />
                    New York, NY 10016<br />
                    Customer Service <br />
                    Toll-free: 1-877-980-4450<br />
                    Toll-free fax: 1-877-980-4454<br />
                    Customer Service Form </p>
            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question25" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question25" class="question">
                May I submit a question for FAQ?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                We would like your Cavendish Square experience to be as user-friendly as possible, please feel free to
                submit a FAQ for inclusion in this section.
            </div>
        </div>
        <!-- _____________________________________________________ -->



        <!-- __________________________ SECTIONS ___________________________ -->

        <h3>USING THIS WEBSITE</h3>

        <div>
            <input style="display: none;" type="checkbox" id="question26" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question26" class="question">
                What are the benefits of registering for an online user account?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>We know that your time is very valuable. As a registered user, the time you spend browsing our site
                    and learning about our products can be saved in your Wish List, and you can create multiple Wish
                    Lists for future visits. You can also save carts for impending purchases. You can customize the
                    information that you’d like to receive from Cavendish Square regarding your areas of interest. </p>
                <p>
                    Another advantage of being an online user is that you become eligible for exclusive discounts and
                    generous offers from Cavendish Square.</p>
                <p>
                    Register Me Today!
                </p>
            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question27" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question27" class="question">
                What if I lose my username/password or I cannot log into my account?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>If you have entered the correct username/password and you’re still unable to log in, please call
                    Customer Service at 1-877-980-4450. We will also remind you of your username and password in case
                    you forget. Otherwise, you can reset your password through our reset portal. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->
        <div>
            <input style="display: none;" type="checkbox" id="question28" name="q" class="questions">
            <div class="plus">+</div>
            <label for="question28" class="question">
                Who do I contact with feedback regarding this site?
            </label>
            <div class="answers" style="margin-top: 1rem;">
                <p>All comments are welcome. Please submit your feedback, suggestions, or comments here.  To read our
                    privacy policy, please click here. </p>

            </div>
        </div>
        <!-- _____________________________________________________ -->






    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="copyright">
                <p>© Copyright 2018
                    Buddhini Irandika Kumari Jayasundara| All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>

</html>