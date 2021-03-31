<?php require('config.php') ?>
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
<?php
if (isset($_POST['save'])) {
    $name = mysqli_real_escape_string($conn, $_POST["username"]);
    $password = mysqli_real_escape_string($conn, $_POST["password"]);
    $rePassword = mysqli_real_escape_string($conn, $_POST["rePassword"]);
    $telephone = mysqli_real_escape_string($conn, $_POST["telephone"]);


    if (empty(trim($name))) {
        $nameErro = "Please enter your name!";
    } else {
        $sql = "SELECT username FROM customer WHERE username = '$name'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $nameErro = "This user name already taken";
        }
    }
    if (empty(trim($password))) {
        $passwordErro = "Please enter your password!";
    } elseif (strlen(trim($password)) < 6) {
        $passwordErro = "Your password have at least 6 characters.";
    } else {
        $password = md5(trim($password));
    }
    if (empty(trim($_POST['rePassword']))) {
        $rePasswordErro = "Please enter your password";
    } else {
        $rePassword = trim($_POST['rePassword']);
        if (empty($rePassword) && ($password != $rePassword)) {
            $rePasswordErro = "Password did not match! Please try again!";
        }
    }
    if (empty($telephone)) {
        $telErro = "Please enter your telephone!";
    }
    if (empty($telErro) && empty($passwordErro) && empty($rePasswordErro) && empty($nameErro)) {
        $sql = "INSERT INTO `customer`(`username`, `pass`, `telephone`) VALUES ($name, $password,$telephone)";
        mysqli_query($conn, $sql);

    }
}
?>
<div class="container">
    <div class="form-control">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?>">
            <h1>Sign up</h1>
            <label>Username: </label>
            <input class="form-group" type="text" name="username" placeholder="Username">
            <span class="text-danger"><?php if (isset($nameErro)) echo $nameErro ?></span><br>
            <label>Telephone: </label>
            <input class="form-group" type="tel" name="telephone" placeholder="Your phone number">
            <span class="text-danger"><?php if (isset($telErro)) echo $telErro ?></span><br>
            <label>Password: </label>
            <input class="form-group" type="password" name="password" placeholder="Your password">
            <span class="text-danger"><?php if (isset($passwordErro)) echo $passwordErro ?></span><br>
            <label>Confim password: </label>
            <input class="form-group" type="password" name="rePassword" placeholder="Confim password">
            <span class="text-danger"><?php if (isset($rePasswordErro)) echo $rePasswordErro ?></span><br>
            <input type="submit" name="save" class="bg-primary text-white" value="Registration"><br>
            <p>Do you already have an account? <a href="signIn.php">Click here!</a></p>
        </form>
    </div>
</div>

<!-- Footer -->

</body>
</html>