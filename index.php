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
        <span class="navbar-toggler-icon"></span>
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
        <button class="btn btn-outline-success mr-2" onclick="openOrderWeb()">ORDER</button>
        <button class="btn btn-outline-success" type="button" onclick="openBookingTableForm()">BOOK TABLE</button>
    </div>
</nav>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 img-w-h-fix" src="img/bg_img/Untitled-3.png" alt="First slide">
            <div class="carousel-caption d-none d-md-block caption-fix">
                <h1>RESTAURANT</h1>
                <p>TASTY AND CRUNCHY</p>
                <p>Every thing you need no fill you stomache is in here</p>
                <button class="btn btn-hover"><a class="nav-link text-dark" href="#">VIEW OUR MENU</a></button>

            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-w-h-fix" src="img/bg_img/Untitled-1.png" alt="Second slide">
            <div class="carousel-caption d-none d-md-block caption-fix">
                <h1>ENJOYABLE</h1>
                <p>WINE AND DINE</p>
                <button class="btn btn-hover"><a class="nav-link text-dark" href="#">VIEW OUR MENU</a></button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 img-w-h-fix" src="img/bg_img/Untitled-2.png" alt="Third slide">
            <div class="carousel-caption d-none d-md-block caption-fix">
                <h1>DELICIOUS</h1>
                <p>CRISPY AND SOFT</p>
                <button class="btn btn-hover"><a class="nav-link text-dark" href="#">VIEW OUR MENU</a></button>
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
                <img class="small-img-set" src="img/photo-1414235077428-338989a2e8c0.jpg" alt="">
            </div>
            <div class="col-6">
                <img class="small-img-set" src="img/photo-1464195643332-1f236b1c2255.jpg" alt="">
            </div>
            <div class="col-12 text-center">
                <img class="sign" src="img/screenshotAtUploadCS_1616248159241.png" alt="">
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
                <img class="pt-5 small-img-set" src="img/home1-main-image-4.jpg" alt="">
            </div>
        </div>
    </div>
</div>
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
</script>
<script>
    function openBookingTableForm() {
        document.getElementById("bookTableForm").style.display = "block";
    }
</script>
<script>
    function openOrderWeb() {
        window.location = "order.php";

    }
</script>
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