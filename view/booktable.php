<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../bs/bootstrap.min.css">
    <script src="../js/jquery.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <?php require_once ('../model/check.php')?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="index.php"> <img class="logo" src="../img/logo.png"></a>
    <a class="navbar-brand" href="index.php">Restaurant</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="menu-icon" onclick="myFunction(this)">
            <div class="bar1"></div>
            <div class="bar2"></div>
            <div class="bar3"></div>
        </div>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="container">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="drinkMenu.php">Drink</a>
                        <a class="dropdown-item" href="foodMenu.php">Food</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
        <a class="btn btn-outline-success" href="booktable.php">BOOK TABLE</a>
    </div>
</nav>
<script>
    <!--icon-menu-->
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>

<div class="container">
    <form class="form animate container bg-light" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>"
          method="post">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center mt-3">BOOK TABLE</h1>
            </div>
        </div>
        <div class="row ml-5 mr-5">
            <div class="col-5 m-3">
                <input type="text" placeholder="Name*" name="username" class="form-control">
                <span class="text-danger"><?php if (isset($erroName)) echo $erroName ?></span>
                <input type="date" name="day" class="form-control mt-3">
                <span class="text-danger"><?php if (isset($erroDate)) echo $erroDate ?></span>
            </div>
            <div class="col-1"></div>
            <div class="col-5 ml-3 mt-3 mb-3">
                <input type="tel" class="form-control" name="telephone" placeholder="PHONE*">
                <span class="text-danger"><?php if (isset($erroTelephone)) echo $erroTelephone ?></span>
                <input type="time" name="time" class="form-control mt-3">
                <span class="text-danger"><?php if (isset($erroTime)) echo $erroTime ?></span>
            </div>
        </div>
        <div class="row ml-5 mr-5">
            <div class="col-8 m-auto">
                <input type="email" class="form-control mt-3" name="email" placeholder="EMAIL*">
                <span class="text-danger"><?php if (isset($erroEmail)) echo $erroEmail ?></span>
            </div>
        </div>
        <div class="row text-center mt-3 mb-3">
            <div class="col-12">
                <button class="btn btn-success" type="submit" name="save">RESERVE</button>
            </div>
        </div>
        <div class="row">
            <div class="col"></div>
        </div>
    </form>
</div>

</body>
</html>