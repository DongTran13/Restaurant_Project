<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" href="../vendor/bs/bootstrap.min.css">
    <script src="../vendor/js/jquery.min.js"></script>
    <script src="../vendor/js/popper.min.js"></script>
    <script src="../vendor/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../vendor/style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
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
<div class="contact-content">
    <div class="container-furid ">
        <div class="row">
            <div class="col-4">

            </div>
        </div>
    </div>
    <div class="container-furid mt-3 ml-2 mb-3">
        <div class="row">
            <div class="col-md-6">
                <h3>ODER INFORMATION </h3>
                <p>Please contact us immediately to receive many attractive offers for you!</p><br>
                  <form action="product" method="POST">
                      <div class="form-group">
                        <input class="form-control" type="text" name="name" id="namely" placeholder="FullName*">
                      </div> 
                      <div class="form-group">
                            <input class="form-control" type="email" name="email" id="emailly" placeholder="Email*">
                      </div> 
                      <div class="form-group">
                          <input class="form-control" type="number" name="number" id="numberly" placeholder="Quantity*">
                      </div> 
                      <div class="form-group">
                          <input class="form-control" type="text" name="product " id="namepro" placeholder="ProductName">
                      </div>
                        <input class="btn btn-outline-primary" type="submit" value="ODER">
                    </form> <br>
                    <p>Products purchased with an quantity of 4 or more products will be free ship
                        <br> FREE CONSULTATION : <a href="#">1900 63 68 09</a></p>
            </div>
            <div class="col-md-6">
                <h3>RESERVATION INFORMATION</h3> <br>
                <form action="product" method="POST">
                    <div class="form-group">
                        <label for="people">Number Of People :</label>
                        <input class="form-control" type="number" name="number" id="numberofpeople"  >
                    </div>
                    <div class="form-group">
                        <label for="Day/Month/Year">Day/Month/Year :</label>
                        <input class="form-control" type="date" name="date" id="dately" >
                    </div>
                    <div class="form-group">
                        <label for="time">Time :</label>
                        <input class="form-control" type="time" name="time" id="timely" >
                    </div>
                    <div class="form-group">
                        <label for="phone">PhoneNumber :</label>
                        <input class="form-control" type="text" name="phone" id="phonely">
                    </div>

                    <input class="btn btn-outline-primary" type="submit" value="Reservation In Advance">
                </form>
            </div>
            <div class="col-md-12 mt-3 ">
                <div id="map-container-google-1" class="z-depth-1-half map-container" >
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d164.03952838859558!2d2.3281282613712317!3d48.86521871960524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb78543c3df56d106!2sRestaurant%20le%20Meurice%20Alain%20Ducasse!5e0!3m2!1svi!2s!4v1617144698759!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark">
    <div class="container">
        <div class="row p-3">
            <div class="col text-center">
                
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-xl-4 col-sm-12 col-xs-12">
                <img src="img/logo.png" class="lg-footer">
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
                    <div class="col-4">
                        <img src="img/165548260_545214619800687_18765277717506597_n.jpg" alt="">
                    </div>
                    <div class="col-8">
                        <a href="#"><h5>THE RESTAUNRANT'S EXCLUSIVE SPECIALS</h5></a>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-4">
                        <img src="img/165548260_545214619800687_18765277717506597_n.jpg" alt="">
                    </div>
                    <div class="col-8">
                        <a href="#"><h5>OFFICIALLY OPENED A SPECIAL TEA ROOM, ROMANTIC SPACE</h5></a>
                    </div>
                </div>
                <div class="row pb-3">
                    <div class="col-4">
                        <img src="img/165548260_545214619800687_18765277717506597_n.jpg" alt="">
                    </div>
                    <div class="col-8">
                        <a href="#"><h5>THE RESTAUNRANT'S EXCLUSIVE SPECIALS</h5></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-xl-4 col-sm-12 col-xs-12">
                <h2 class="text-white">MULTI-VIEW ITEM</h2>            
                    <a href="">
                        <div class="row">
                            <div class="col-6"><h5 class="text-white">SERVICE</h5></div>
                            <div class="col-6"><h5 class="text-white">130</h5></div>
                        </div>     
                     </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <hr class="light-100">
                <h5 class="text-center text-white">&copy; COPPPYRIGHT T3H-US 2021. DEVICE BY INFORMATION-COMMUNICATION DEPARTMENT</h5>
            </div>
        </div>
    </div>

</div>
</body>
</html>