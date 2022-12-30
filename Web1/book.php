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
          <a class="nav-link active" href="listing.php">Books</a>
          <a class="nav-link" href="contact.php">Contact</a>
          <a class="nav-link" href="faq.php">FAQ/Help</a>
        </nav>
      </div>
      <div class="search-box">
        <script type="text/javascript">
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

  <main>
    <div class="book-section-container">
      <!-- Must Read Books -->
      <div class="book-section section-a">
        <h2>Must Read</h2>
        <div class="card-wraper">
          <div class="card">
            <img src="img/books/a.jpg" alt="Book" srcset="img/books/a.jpg" />
            <h3>Giant Days</h3>
            <p>by John Allison</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=1">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/b.jpg" alt="Book" srcset="img/books/b.jpg" />
            <h3>To Be Taught, If Fortunate</h3>
            <p>by Becky Chambers</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=2">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/c.jpg" alt="Book" srcset="img/books/c.jpg" />
            <h3>Bitch Planet</h3>
            <p>by Kelly Sue DeConnick</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=3">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/d.jpg" alt="Book" srcset="img/books/d.jpg" />
            <h3>Paper Girls</h3>
            <p>by Brian K. Vaughan</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=4">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/e.jpg" alt="Book" srcset="img/books/e.jpg" />
            <h3>A Terrible Plan</h3>
            <p>by Noelle Stevenson, Shannon Watters</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=5">Read More</a>
          </div>
        </div>
      </div>

      <!-- Best Selling Books -->
      <div class="book-section section-b">
        <h2>Best Selling Books</h2>
        <div class="card-wraper">
          <div class="card">
            <img src="img/books/a.jpg" alt="Book" srcset="img/books/a.jpg" />
            <h3>Giant Days</h3>
            <p>by John Allison</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=1">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/b.jpg" alt="Book" srcset="img/books/b.jpg" />
            <h3>To Be Taught, If Fortunate</h3>
            <p>by Becky Chambers</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=2">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/c.jpg" alt="Book" srcset="img/books/c.jpg" />
            <h3>Bitch Planet</h3>
            <p>by Kelly Sue DeConnick</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=3">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/d.jpg" alt="Book" srcset="img/books/d.jpg" />
            <h3>Paper Girls</h3>
            <p>by Brian K. Vaughan</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=4">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/e.jpg" alt="Book" srcset="img/books/e.jpg" />
            <h3>A Terrible Plan</h3>
            <p>by Noelle Stevenson, Shannon Watters</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=5">Read More</a>
          </div>
        </div>
      </div>

      <!-- Popular This Month Books -->
      <div class="book-section section-c">
        <h2>Popular This Month</h2>
        <div class="card-wraper">
          <div class="card">
            <img src="img/books/a.jpg" alt="Book" srcset="img/books/a.jpg" />
            <h3>Giant Days</h3>
            <p>by John Allison</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=1">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/b.jpg" alt="Book" srcset="img/books/b.jpg" />
            <h3>To Be Taught, If Fortunate</h3>
            <p>by Becky Chambers</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=2">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/c.jpg" alt="Book" srcset="img/books/c.jpg" />
            <h3>Bitch Planet</h3>
            <p>by Kelly Sue DeConnick</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=3">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/d.jpg" alt="Book" srcset="img/books/d.jpg" />
            <h3>Paper Girls</h3>
            <p>by Brian K. Vaughan</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=4">Read More</a>
          </div>
          <div class="card">
            <img src="img/books/e.jpg" alt="Book" srcset="img/books/e.jpg" />
            <h3>A Terrible Plan</h3>
            <p>by Noelle Stevenson, Shannon Watters</p>
            <a class="btn btn-primary" href="readmore.php?action=remove&id=5">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </main>
  <!-- Footer -->
  <div class="footer">
    <div class="fcon"><br><br>
      <h1>BOOK LOVERS</h1><br><br>
      <a href="https://www.instagram.com/"><img src="img/i2.png" width="80px" height="80px" class="inst"></a>
      <a href="https://www.facebook.com/"><img src="img/f2.png" width="80px" height="80px" class="inst"></a>
      <a href="https://www.twitter.com/"><img src="img/t2.png" width="80px" height="80px" class="inst"></a><br><br>
    </div>
  </div>
</body>

</html>