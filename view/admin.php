<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../vendor/bs/bootstrap.min.css">
    <script src="../vendor/js/jquery.min.js"></script>
    <script src="../vendor/js/popper.min.js"></script>
    <script src="../vendor/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../vendor/style/style.css">
    <link rel="stylesheet" href="../vendor/font/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
          integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <?php require('../model/config.php') ?>
    <?php
    $sql = "SELECT * FROM `information`";
    $sqlPullDown = $conn->query($sql);

    $result = $sqlPullDown->fetch_all(MYSQLI_ASSOC);
    ?>
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
                    <a class="nav-link" href="news.php">News</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
            </ul>
        </div>
        <a class="btn btn-outline-success" href="booktable.php">BOOK TABLE</a>
    </div>
</nav>
<div class="container">
    <h1 class="text-center mb-5">Guest List</h1>
    <h5 class="text-center">Food is not simply food, it is also the sophistication of a chef</h5>
    <h6 class="mb-5 text-center">being wholehearted in the chef's feelings to put on the food</h6>
    <div class="table-bordered table-success row">
        <div class="pl-3 pr-3 col">#</div>
        <div class="pl-3 pr-3 col">Name</div>
        <div class="pl-3 pr-3 col">Date</div>
        <div class="pl-3 pr-3 col">Telephone</div>
        <div class="pl-3 pr-3 col">Time</div>
        <div class="pl-3 pr-3 col">Email</div>
        <div class="pl-3 pr-3 col">Table</div>
    </div>


    <?php
    if (count($result) > 0) {
        foreach ($result as $row) { ?>
            <div class="table-bordered row">
                <div class="pl-3 pr-3 col table-bordered"><?php echo $row['id'] ?></div>
                <div class="pl-3 pr-3 col table-bordered"><?php echo $row['name'] ?></div>
                <div class="pl-3 pr-3 col table-bordered"><?php echo $row['day'] ?></div>
                <div class="pl-3 pr-3 col table-bordered"><?php echo $row['telephone'] ?></div>
                <div class="pl-3 pr-3 col table-bordered"><?php echo $row['hour'] ?></div>
                <div class="pl-3 pr-3 col table-bordered"><?php echo $row['email'] ?></div>
                <div class="pl-3 pr-3 col table-bordered"><?php echo $row['bookTable'] ?></div>
            </div>
        <?php }
    }
    ?>


</div>
<footer class="bg-dark" style="margin-top: 132px">
    <div class="container">
        <div class="row p-3">
            <div class="col text-center">
                <img src="../img/logo.png" style="width: 10%">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xl-4 col-sm-12 col-xs-12">

                <p class="text-white">Our restaurant always has the best food, the best service for you - To reserve a
                    table, contact us by phone number: 090990099</p>
                <p class="text-white">Mail: apoloquestus@aduo.com</p>
                <div class="col-12 social padding">
                    <a href="#" class="mr-3"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="mr-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="mr-3"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="mr-3"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-md-4 col-xl-4 col-sm-12 col-xs-12">
                <div class="row pb-3">
                    <div class="col-3">
                        <img src="../img/165548260_545214619800687_18765277717506597_n.jpg" alt="">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-8">
                        <h5><a class="text-white" href="#">THE RESTAUNRANT'S EXCLUSIVE SPECIALS</a></h5>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3">
                        <img src="../img/165548260_545214619800687_18765277717506597_n.jpg" alt="">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-8">
                        <h5><a class="text-white" href="#">OFFICIALLY OPENED A SPECIAL TEA ROOM, ROMANTIC SPACE</a></h5>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3">
                        <img src="../img/165548260_545214619800687_18765277717506597_n.jpg" alt="">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-8">
                        <h5><a class="text-white" href="#">THE RESTAUNRANT'S EXCLUSIVE SPECIALS</a></h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-4 col-sm-12 col-xs-12">
                <h2 class="text-white">MULTI-VIEW ITEM</h2>
                <div class="row">
                    <div class="col-6"><h5 class="text-white">SERVICE</h5></div>
                    <div class="col-6"><h5 class="text-white">130</h5></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <hr class="light-100">
            <h5 class="text-center text-white">&copy; COPPPYRIGHT T3H-US 2021. DEVICE BY INFORMATION-COMMUNICATION
                DEPARTMENT</h5>
        </div>
    </div>
</footer>
</body>
</html>