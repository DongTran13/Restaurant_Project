<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link rel="stylesheet" href="bs/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style/foodMenu.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant</title>
    <?php require_once ('check.php')?>
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
        <a class="btn btn-outline-success" href="booktable.php">BOOK TABLE</a>
    </div>
</nav>

<!-- boook tablle-->
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
</script>

<!--oder-->
<script>
    function openOrderWeb() {
        window.location = "order.php";

    }
</script>
<!--image-->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner ">
        <div class="carousel-item active">
            <img class="d-block w-100 img-w-h-fix" src="img/foodMenu/bg-img/img1.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block caption-fix">
                <h1>FOOD MENU</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-w-h-fix" src="img/foodMenu/bg-img/img2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block caption-fix">
                <h1>FOOD MENU</h1>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-w-h-fix" src="img/foodMenu/bg-img/img3.jpg" alt="Third slide">
            <div class="carousel-caption d-none d-md-block caption-fix">
                <h1>FOOD MENU</h1>
            </div>
        </div>
    </div>
    <div class="carousel-item">
            <img class="d-block w-100 img-w-h-fix" src="img/foodMenu/bg-img/img4.jpg" alt="Forth slide">
            <div class="carousel-caption d-none d-md-block caption-fix">
                <h1>FOOD MENU</h1>
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
<div class="Menu">
    <div class="row">
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
            <div class="text-center">
                <h2 class="title">
                    <div class="ribbon">
                        <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 261.98 57.981" enable-background="new 0 0 261.98 57.981" xml:space="preserve" preserveAspectRatio="none">
                         <g>
                            <g>
                                <path d="M36.638,7.173l8.318,50.808h172.071l8.318-50.808H36.638z M45.59,0H0.369l15.234,25.403L0,50.808h39.688
                                L32.451,4.784L45.59,0z M246.377,25.403L261.611,0h-45.22l13.137,4.784l-7.235,46.023h39.686L246.377,25.403z"/>
                            </g>
                        </g>
                         <span>Sea Food</span>
                        </svg>
                    </div>
                </h2>
                <hr>
                <div class="food">
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Sea_Food/ca-hoi.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Salmon</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Sea_Food/dieu-hong-ca-chep-song.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>River Carp</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Sea_Food/ca-chep-gion.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Crispy carp</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Sea_Food/Cua-Ghe.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Crab</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Sea_Food/ngao-so.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Clams</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Sea_Food/tom-hum.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Lobster</h6>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
            <div class="text-center">
                <h2 class="title">
                    <div class="ribbon">
                        <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 261.98 57.981" enable-background="new 0 0 261.98 57.981" xml:space="preserve" preserveAspectRatio="none">
                         <g>
                            <g>
                                <path d="M36.638,7.173l8.318,50.808h172.071l8.318-50.808H36.638z M45.59,0H0.369l15.234,25.403L0,50.808h39.688
                                L32.451,4.784L45.59,0z M246.377,25.403L261.611,0h-45.22l13.137,4.784l-7.235,46.023h39.686L246.377,25.403z"/>
                            </g>
                        </g>
                         <span>Hot Pot</span>
                        </svg>
                    </div>
                </h2>
                <hr>
                <div class="food">
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Hot_Pot/lau-hong-kong.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Hong Kong Hotpot</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Hot_Pot/lau-ga-chua-cay.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Chicken Hotpot</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Hot_Pot/lau-ca-chep.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Carp Hotpot</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Hot_Pot/lau-son-sun.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Rib Cartilage Hotpot</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Hot_Pot/lau-thai.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Thai HotPot</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Hot_Pot/lau-hai-san.png">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Sea Hotpot</h6>
                        </div>
                    </div>
                    <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
            <div class="text-center">
                <h2 class="title">
                    <div class="ribbon">
                        <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 261.98 57.981" enable-background="new 0 0 261.98 57.981" xml:space="preserve" preserveAspectRatio="none">
                         <g>
                            <g>
                                <path d="M36.638,7.173l8.318,50.808h172.071l8.318-50.808H36.638z M45.59,0H0.369l15.234,25.403L0,50.808h39.688
                                L32.451,4.784L45.59,0z M246.377,25.403L261.611,0h-45.22l13.137,4.784l-7.235,46.023h39.686L246.377,25.403z"/>
                            </g>
                        </g>
                         <span>Rice</span>
                        </svg>
                    </div>
                </h2>
                <hr>
                <div class="food">
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Rice/ca-muoi.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Salty Berries</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Rice/canh-chua-ngao.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Clam Sour Soup</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Rice/canh-chua-thit.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Clam Meat Soup</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Rice/Com-gao-tam-thom.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Rice</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Rice/thit-bam-mam-tep.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Minced Meat</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Rice/trung-ducthit.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Meat Molded Eggs</h6>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12 col-xs-12">
            <div class="text-center">
                <h2 class="title">
                    <div class="ribbon">
                        <svg version="1.1" xmlns="//www.w3.org/2000/svg" xmlns:xlink="//www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 261.98 57.981" enable-background="new 0 0 261.98 57.981" xml:space="preserve" preserveAspectRatio="none">
                         <g>
                            <g>
                                <path d="M36.638,7.173l8.318,50.808h172.071l8.318-50.808H36.638z M45.59,0H0.369l15.234,25.403L0,50.808h39.688
                                L32.451,4.784L45.59,0z M246.377,25.403L261.611,0h-45.22l13.137,4.784l-7.235,46.023h39.686L246.377,25.403z"/>
                            </g>
                        </g>
                         <span>Beef</span>
                        </svg>
                    </div>
                </h2>
                <hr>
                <div class="food">
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Beef/Bo-hap-tuong-gung.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Steamed Beef</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Beef/bo-nuong.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Grilled Beef</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Beef/Bo-tai-chanh.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Undercooked Beef</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Beef/Bo-xao-lan-can-toi.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Fried Beef</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Beef/duoi-bo-chat.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Cow's Tail Chop
</h6>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4 text-left">
                            <img src="img/foodMenu/food/Beef/lau-gau-bo.jpg">
                        </div>
                        <div class="col-8 text-right">
                            <h6>Beef Tendon Hotpot</h6>
                        </div>
                    </div>
                    <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
</div>

<div class="container-fluid">
    <div class="jumbotron bg-Menu">
        <div class="text-center">
            <a href="foodMenu.php">
               <button class="btn btn-lg btn-outline-success">Food Menu</button> 
            </a>
            <button class="btn btn-lg btn-outline-success">Drink Menu</button>
        </div> 
    </div>
</div>
</body>
</html>