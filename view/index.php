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
        <a class="btn btn-outline-secondary mr-3" href="login.php">ADMIN</a>
        <a class="btn btn-outline-success" href="booktable.php">BOOK TABLE</a>
    </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 img-w-h-fix" src="../img/bg_img/Untitled-3.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block caption-fix">
                <h1>RESTAURANT</h1>
                <p>TASTY AND CRUNCHY</p>
                <p>Every thing you need no fill you stomache is in here</p>
                <button class="btn btn-hover"><a class="nav-link text-dark" href="foodMenu.php">VIEW OUR MENU</a></button>

            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-w-h-fix" src="../img/bg_img/Untitled-1.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block caption-fix">
                <h1>ENJOYABLE</h1>
                <p>WINE AND DINE</p>
                <button class="btn btn-hover"><a class="nav-link text-dark" href="foodMenu.php">VIEW OUR MENU</a></button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-w-h-fix" src="../img/bg_img/Untitled-2.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block caption-fix">
                <h1>DELICIOUS</h1>
                <p>CRISPY AND SOFT</p>
                <button class="btn btn-hover"><a class="nav-link text-dark" href="foodMenu.php">VIEW OUR MENU</a></button>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="container">
    <div class="our-story">
        <h1 class="text-danger text-center mt-5 mb-5 ">OUR STORY</h1>
        <p class="text-center">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim voluptates exercitationem,
            perferendis deleniti corporis facere natus veritatis officiis autem at? Voluptatem, sunt ex voluptatum quas
            a vero distinctio quam atque.</p>
        <div class="row">
            <div class="col-6">
                <img class="small-img-set" src="../img/photo-1414235077428-338989a2e8c0.jpg" alt="">
            </div>
            <div class="col-6">
                <img class="small-img-set" src="../img/photo-1464195643332-1f236b1c2255.jpg" alt="">
            </div>
            <div class="col-12 text-center">
                <img class="sign" src="../img/screenshotAtUploadCS_1616248159241.png" alt="">
            </div>
        </div>
    </div>
</div>
</div>
<div class="bg-ingredients">
    <div class="container">
        <div class="row">
            <div class="col-6 ">
                <p class="pt-5 mt-5">TASTY AND CRUNCHY</p>
                <h1>INGREDIENTS</h1>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vero expedita libero ad provident molestiae
                    quos harum nemo assumenda? Esse ducimus vero odit enim quas reprehenderit quis sequi repudiandae
                    voluptas nesciunt.</p>
                <button class="btn btn-outline-dark mb-5">VIEW OUR MENU</button>
            </div>
            <div class="col-6">
                <img class="pt-5 small-img-set" src="../img/home1-main-image-4.jpg" alt="">
            </div>
        </div>
    </div>
</div>


<script>
    <!--icon-menu-->
    function myFunction(x) {
        x.classList.toggle("change");
    }
</script>

<!--Món chính-->
<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Main Dishes</h1>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1 class="text-center">Mons</h1>
        </div>
        <div class="col">
            <h1 class="text-center">Mons</h1>
        </div>
    </div>

</div>




<!---->
<!-- Footer -->
<footer class="bg-dark">
    <div class="container">
        <div class="row p-3">
            <div class="col text-center">
                <img src="../img/logo.png" style="width: 10%">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xl-4 col-sm-12 col-xs-12">

                <p class="text-white">Our restaurant always has the best food, the best service for you - To reserve a table, contact us by phone number: 090990099</p>
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
                        <h5 ><a class="text-white" href="#">THE RESTAUNRANT'S EXCLUSIVE SPECIALS</a></h5>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3">
                        <img src="../img/165548260_545214619800687_18765277717506597_n.jpg" alt="">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-8">
                        <h5 ><a class="text-white" href="#">OFFICIALLY OPENED A SPECIAL TEA ROOM, ROMANTIC SPACE</a></h5>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-3">
                        <img src="../img/165548260_545214619800687_18765277717506597_n.jpg" alt="">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-8">
                        <h5 ><a class="text-white" href="#">THE RESTAUNRANT'S EXCLUSIVE SPECIALS</a></h5>
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
                <h5 class="text-center text-white">&copy; COPPPYRIGHT T3H-US 2021. DEVICE BY INFORMATION-COMMUNICATION DEPARTMENT</h5>
            </div>
        </div>
</footer>
</body>
</html>