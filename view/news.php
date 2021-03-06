<!DOCTYPE html>
<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" type="text/css" href="../vendor/style/news.css">
    <link rel="stylesheet" href="../vendor/bs/bootstrap.min.css">
    <script src="../vendor/js/jquery.min.js"></script>
    <script src="../vendor/js/popper.min.js"></script>
    <script src="../vendor/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../vendor/style/style.css">
    <link rel="stylesheet" href="../vendor/font/style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
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
<script>
    <!--icon-menu-->
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>
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
<script>
    <!--icon-menu-->
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>
<div class="content">
    <div class="bg-Brown text-center text-white"><h2 class="pt-5"><img width="60px" height="40px" src="../img/foodNews/hamburger.png"> FOOD.NEWS</h2></div>
    <div class="text-center mt-5"><img width="80px" height="60px" src="../img/foodNews/new-product.png"></div>
    <div class="foodNews mt-5 container">
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2 text-right">
            <img src="../img/foodNews/MUSSELS SOUP.png">
            </div>
            <div class="col-7 text-center pt-5">
            <h6>MUSSELS SOUP</h6>
            <p class="text-secondary">Lorem ipsum dolor sit amet, feugiat delicata.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2 text-right">
            <img src="../img/foodNews/ITALIAN SPAGHETTI.png">
            </div>
            <div class="col-7 text-center pt-5">
            <h6>ITALIAN SPAGHETTI</h6>
            <p class="text-secondary">Lorem ipsum dolor sit amet, feugiat delicata.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2 text-right">
            <img src="../img/foodNews/BEEF BURGER.png">
            </div>
            <div class="col-7 text-center pt-5">
            <h6>BEEF BURGER</h6>
            <p class="text-secondary">Lorem ipsum dolor sit amet, feugiat delicata.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2 text-right">
            <img src="../img/foodNews/STUFFED STRAWBERRY.png">
            </div>
            <div class="col-7 text-center pt-5">
            <h6>STUFFED STRAWBERRY</h6>
            <p class="text-secondary">Lorem ipsum dolor sit amet, feugiat delicata.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2 text-right">
            <img src="../img/foodNews/SICILIAN MEATBALLS.png">
            </div>
            <div class="col-7 text-center pt-5">
            <h6>SICILIAN MEATBALLS</h6>
            <p class="text-secondary">Lorem ipsum dolor sit amet, feugiat delicata.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2 text-right">
            <img src="../img/foodNews/SEAFOOD SALAD.png">
            </div>
            <div class="col-7 text-center pt-5">
            <h6>SEAFOOD SALAD</h6>
            <p class="text-secondary">Lorem ipsum dolor sit amet, feugiat delicata.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2 text-right">
            <img src="../img/foodNews/ROAST CHICKEN.png">
            </div>
            <div class="col-7 text-center pt-5">
            <h6>ROAST CHICKEN</h6>
            <p class="text-secondary">Lorem ipsum dolor sit amet, feugiat delicata.</p>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-2 text-right">
            <img src="../img/foodNews/GRILLED FISH.png">
            </div>
            <div class="col-7 text-center pt-5">
            <h6>GRILLED FISH</h6>
            <p class="text-secondary">Lorem ipsum dolor sit amet, feugiat delicata.</p>
            </div>
        </div>
    </div>
</div>
<!--footer-->
<footer class="bg-dark mt-5">
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
                    <a href="#" class="mr-3" ><i class="fab fa-facebook"></i></a>
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
                <a href="">
                    <div class="row">
                    <div class="col-6"><h5 class="text-white">SERVICE</h5></div>
                    <div class="col-6"><h5 class="text-white">92</h5></div>
                </div>
                </a>                
                <a href="">
                    <div class="row">
                    <div class="col-6"><h5 class="text-white">COFFEE SHOP</h5></div>
                    <div class="col-6"><h5 class="text-white">88</h5></div>
                </div>
                </a>
                <a href="">
                    <div class="row">
                    <div class="col-6"><h5 class="text-white">TRAVEL</h5></div>
                    <div class="col-6"><h5 class="text-white">72</h5></div>
                </div>
                </a>
                <a href="">
                    <div class="row">
                    <div class="col-6"><h5 class="text-white">DISH</h5></div>
                    <div class="col-6"><h5 class="text-white">66</h5></div>
                </div>
                </a>
                <a href="">
                    <div class="row">
                    <div class="col-6"><h5 class="text-white">RESTAURANT</h5></div>
                    <div class="col-6"><h5 class="text-white">34</h5></div>
                </div>
                </a>
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