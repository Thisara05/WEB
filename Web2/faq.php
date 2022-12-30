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
    <link href="faq.css" rel="stylesheet" />
</head>

<body>
    <div id="cover" style="background: none; height: 0 !important;">
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
                            <a class="nav-link active" href="faq.php">FAQ/Help</a>
                        </nav>
                    </div>
                </div>
            </header>
        </div>

        <div class="content">
            <div>
                <input type="checkbox" id="question1" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question1" class="question">
                    This is the question that will be asked?
                </label>
                <div class="answers">
                    This is the answer of the question.. keep it short.</div>
            </div>

            <div>
                <input type="checkbox" id="question2" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question2" class="question">
                    Short?
                </label>
                <div class="answers">
                    short!
                </div>
            </div>

            <div>
                <input type="checkbox" id="question3" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question3" class="question">
                    Keep answers short. But in case of...If the question is long, the text wraps.
                </label>
                <div class="answers">
                    This is the answer!
                </div>
            </div>
        </div>

        <br><br><br><br><br><br><br>
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