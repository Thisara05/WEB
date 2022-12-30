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
          <a class="nav-link active" href="index.php">Home</a>
          <a class="nav-link" href="book.php">Books</a>
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
          <a href="listing.php" class="btn btn-hero"> ALL BOOKS </a>
        </div>
      </div>
    </div>
  </div>

  <main>
    
    <div class="container">
      <div class="column">
      	<a href="readmore.php?action=remove&id=2">
        <div class="up-title"></div>
        <div class="post-card">
          <div class="post-img">
            <div class="date">
              <div class="day">15</div>
              <div class="month">Aug</div>
            </div>
            <img src="img/books/b.jpg" />
          </div>
          <div class="post-content">
            <div class="category">Photos</div>
            <h1 class="title">Giant Days by John Allison</h1>
            <h2 class="sub_title">An upcoming superpower</h2>
            <p class="description">Giant Days by John Allison</p>
            <div class="post-meta">
              <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span><span class="comments"><i
                  class="fa fa-comments"></i><a href="#"> 39 comments</a></span>
            </div>
          </div>
        </div>
        </a>
      </div>

      <div class="column">
      	<a href="readmore.php?action=remove&id=1">
        <div class="up-title"></div>
        <div class="post-card">
          <div class="post-img">
            <div class="date">
              <div class="day">15</div>
              <div class="month">Aug</div>
            </div>
            <img src="img/books/a.jpg" />
          </div>
          <div class="post-content">
            <div class="category">Photos</div>
            <h1 class="title">Giant Days by John Allison</h1>
            <h2 class="sub_title">An upcoming superpower</h2>
            <p class="description">
              Giant Days by John Allison
            </p>
            <div class="post-meta">
              <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span><span class="comments"><i
                  class="fa fa-comments"></i><a href="#"> 39 comments</a></span>
            </div>
          </div>
        </div>
    </a>
      </div>
      <div class="column">
      	<a href="readmore.php?action=remove&id=3">
        <div class="up-title"></div>
        <div class="post-card">
          <div class="post-img">
            <div class="date">
              <div class="day">15</div>
              <div class="month">Aug</div>
            </div>
            <img src="img/books/c.jpg" />
          </div>
          <div class="post-content">
            <div class="category">Photos</div>
            <h1 class="title">Bitch Planet
              by Kelly Sue DeConnic</h1>
            <h2 class="sub_title">An upcoming superpower</h2>
            <p class="description">
              Bitch Planet
              by Kelly Sue DeConnic
            </p>
            <div class="post-meta">
              <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span><span class="comments"><i
                  class="fa fa-comments"></i><a href="#"> 39 comments</a></span>
            </div>
          </div>
        </div>
    </a>
      </div>
      <div class="column">
      	<a href="readmore.php?action=remove&id=4">
        <div class="up-title"></div>
        <div class="post-card">
          <div class="post-img">
            <div class="date">
              <div class="day">15</div>
              <div class="month">Aug</div>
            </div>
            <img src="img/books/d.jpg" />
          </div>
          <div class="post-content">
            <div class="category">Photos</div>
            <h1 class="title">To Be Taught, If Fortunate
              by Becky Chambers</h1>
            <h2 class="sub_title">An upcoming superpower</h2>
            <p class="description">
              To Be Taught, If Fortunate
              by Becky Chambers
            </p>
            <div class="post-meta">
              <span class="timestamp"><i class="fa fa-clock-o"></i> 6 mins ago</span><span class="comments"><i
                  class="fa fa-comments"></i><a href="#"> 39 comments</a></span>
            </div>
          </div>
        </div>
    </a>
      </div>
    </div>
  </main>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="copyright">
        <p>© Copyright 2018 Buddhini Irandika Kumari Jayasundara | All Rights Reserved.</p>
      </div>
    </div>
  </footer>
</body>

</html>