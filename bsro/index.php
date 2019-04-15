<?php
//include('db_connect.php');
//error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>BSRO Events</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.min.css">

    <!--Jquery CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>

</head><!--/head-->
<body>

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <!--<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>-->
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="images/brand_cover.jpg" alt="First slide">
        </div>
        <!--<div class="carousel-item">
            <img class="d-block w-100" src="images/222.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/333.jpg" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/444.jpg" alt="Fourth slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="images/555.jpg" alt="Fifth slide">
        </div>-->
    </div>
    <!--<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>-->
</div>
<!--/#main-slider-->
<br>
<!--Heading-->
<div class="container">
    <div class="jumbotron">
        <h1 style="text-align: center">BSRO Registration!</h1>
    </div>
</div>
<br>
<!--First Form-->


<div class="container">
    <form method="post" action="insert_data.php">
        <div class="form-group row">
            <label for="center" class="col-sm-3 col-form-label">1. Name</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name" required>
            </div>

        </div>
        <div class="form-group row">
            <label for="center" class="col-sm-3 col-form-label">2. Mobile Number</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile Number" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="center" class="col-sm-3 col-form-label">3. Organization</label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="organization" id="organization" placeholder="Organization" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="center" class="col-sm-3 col-form-label">4. Chamber Address  </label>
            <div class="col-sm-3">
                <input type="text" class="form-control" name="chamber" id="chamber" placeholder="Chamber Address" required>
            </div>
        </div>

        <br>
        <br>


        <div class="col-md-12">
            <button type="submit" name="submit_btn" class="btn btn-primary">Register !</button>
        </div>
    </form>
</div>
<br>
<br>
<div class="container">
    <img class="d-block w-100" src="images/lower_banner.jpg" alt="First slide">
</div>
<br>
<hr>

<!--First Form Ends-->
<!-- Footer -->
<!-- Grid row -->
<div class="row">

    <!-- Grid column -->
    <div class="col-md-12 mb-4">

        <!--Footer-->
        <footer class="page-footer blue text-center text-md-left mt-0">

            <!--Footer Links-->
            <div class="container">
                <div class="row">

                    <!--First column-->
                    <!--<div class="col-md-6">
                        <h5 class="title mb-3"></h5>
                        <p>সেন্টার ফর গ্লোবাল হেলথ রিসার্চ
                            রুম নংঃ ২৩৩, ২য় তলা, বারডেম জেনারেল হাসপাতাল ১২২ কাজী নজরুল ইসলাম এভিনিউ, শাহবাগ, ঢাকা ১০০০, বাংলাদেশ
                            <br>
                            মোবাইল হেল্প লাইনঃ ০১৭০৫৩৬০২৬৮ ,০১৫৩৪১১৮৪৫৪
                            <br>
                            ইমেইলঃ info@pcc-badas.org / cghr.badas@gmail.com</p>
                    </div>-->
                    <!--/.First column-->

                    <!--Second column-->
                    <!--<div class="col-md-6">
                        <h5 class="title mb-3">যোগাযোগ</h5>
                        <ul>
                            <li>ওয়েবসাইট <a href="https://www.pcc-badas.org/"> https://www.pcc-badas.org/</a></li>
                            <li>ফেসবুক <a href="https://www.facebook.com/pcc.badas/">https://www.facebook.com/pcc.badas/</a></li>
                            <li>ইউটিউব <a href="https://www.youtube.com/pcc-badas">https://www.youtube.com/pcc-badas</a></li>
                        </ul>
                    </div>-->
                    <!--/.Second column-->
                </div>
            </div>
            <!--/.Footer Links-->

            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2019 Developed by: <a href="https://www.parlancecs.com" target="_blank"> Parlance Consulting Services Limited </a>

                </div>
            </div>
            <!--/.Copyright-->

        </footer>
        <!--/.Footer-->

    </div>
    <!-- Grid column -->

</div>
<!-- Grid row -->
<!-- Footer -->

<!-- Optional JavaScript -->

</body>
</html>
