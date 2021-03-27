<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="bs/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <?php include("checked.php")?>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="index.php"> <img class="logo" src="img/logo.png"></a>
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
                    <a class="nav-link" href="#">Contact Us</a>
                </li>
            </ul>
        </div>

        <button class="btn btn-outline-success" type="button" onclick="openBookingTableForm()">BOOK TABLE</button>
        <button class="btn btn-outline-success mr-2 ml-2" onclick="openSignInWeb()">Sign In</button>
        <button class="btn btn-outline-secondary mr-2" onclick="openSignUpWeb()">Sign Up</button>

    </div>
</nav>
<!-- Form bool table float -->
<div id="bookTableForm" class="modal">
    <form class="form animate container bg-light" action="#" method="post">
        <div class="row mt-5">
            <div class="col-12">
                <h1 class="text-center mt-3">BOOK TABLE</h1>
            </div>
        </div>
        <div class="row ml-5 mr-5">
            <div class="col-5 m-3">
                <input type="text" placeholder="Name*" required class="form-control">
                <input type="date" required class="form-control mt-3">
                <input type="text" placeholder="Seat" class="form-control mt-3">
            </div>
            <div class="col-1"></div>
            <div class="col-5 ml-3 mt-3 mb-3">
                <input type="tel" required class="form-control" placeholder="PHONE*">
                <input type="time" class="form-control mt-3">
                <input type="email" required class="form-control mt-3" placeholder="EMAIL*">
            </div>
        </div>
        <div class="row mt-3 ml-3 mr-5">
            <div class="col-12">
                <textarea name="note" placeholder="NOTE*" class="form-control w-100" cols="25" rows="5"></textarea>
            </div>
        </div>
        <div class="row text-center mt-3 mb-3">
            <div class="col-12">
                <button class="btn btn-success ">RESERVE</button>
            </div>

        </div>
        <div class="row">
            <div class="col"></div>
        </div>
    </form>
</div>
<!-- boook tablle-->
<script>
    var modal = document.getElementById('bookTableForm');
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    function openBookingTableForm() {
        document.getElementById("bookTableForm").style.display = "block";
    }
    <!--icon-menu-->
    function openSignInWeb() {
        window.location = "signIn.php";

    }
    function openSignUpWeb() {
        window.location = "signUp.php";

    }
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>
<!-- main -->


<div class="container">
        <div class="form-control">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
                    <h1>Sign In</h1>
            </form>
        </div>

</div>

<!-- Footer -->
<div class="row">
    <div class="col bg-dark">
        <div class="container text-white">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        <img class="w-25 m-5" src="img/logo.png">
                        <div class="row">
                        </div>

                    </div>
                </div>
            </div>


        </div>

    </div>

</div>
</body>
</html>