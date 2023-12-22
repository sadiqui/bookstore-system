<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo $title; ?>Bayt al-Hikmah</title>

    <link href="./bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="./bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="./bootstrap/css/jumbotron.css" rel="stylesheet">

    <style>
    a {
        text decoration: none;
        color: #60391f;
    }
    </style>
</head>

<body style="background-color: gray">

    <nav class="navbar bg-info navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Bayt al-Hikmah</a>
            </div>

            <!--/.navbar-collapse -->
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- link to publiser_list.php -->
                    <li><a href="publisher_list.php"><span class="glyphicon glyphicon-paperclip"></span>&nbsp;
                            Publisher</a></li>
                    <!-- link to books.php -->
                    <li><a href="books.php"><span class="glyphicon glyphicon-book"></span>&nbsp; Books</a></li>
                    <!-- link to contacts.php -->
                    <li><a href="contact.php"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; Contact</a></li>
                    <!-- link to shopping cart -->
                    <li><a href="cart.php"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp; My Cart</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <?php
      if(isset($title) && $title == "Index") {
    ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron" style="background-color: gray">
        <div class="container">
            <h1>Welcome to Bayt al-Hikmah,</h1>
            <h2>The online library.</h2><br>
            <p class="lead">We inspired our name from <a href="https://w.wiki/_uU2S">the Grand Library of Baghdad,</a>
                which was a major Abbasid public academy and<br>intellectual center in Baghdad and one of the world's
                largest public libraries during <a href="https://w.wiki/_iUZ">the Islamic Golden Age.</a></p>
            <p>Our online bookstore was established in 2023 by <a href="https://www.linkedin.com/in/sadiqui/">Developer
                    Abdelilah Sadiqui</a> & <a href="https://www.linkedin.com/in/said-aabilla/">Coach Said Aabilla.</a>
            </p>
        </div>
    </div>
    <?php } ?>

    <div class="container" id="main">