<?php
//include('db_connect.php');
//error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Incepta Events</title>
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
            <img class="d-block w-100" src="images/001.jpg" alt="First slide">
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
        <h1 style="text-align: center">ACEDB QUIZ CONTEST!</h1>
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

        <br>
        <hr>
        <br>


        <div class="form-group">
            <label for="name" class="col-md-12 col-form-label">CardioRenal Safety of Linagliptin is established through which trial? </label>
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q01" id="001" value="CARMELINA">
                        <label class="form-check-label" for="inlineRadio1">CARMELINA</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q01" id="001" value="TECOS">
                        <label class="form-check-label" for="inlineRadio2">TECOS</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q01" id="001" value="EMPA-REG">
                        <label class="form-check-label" for="inlineRadio1">EMPA-REG</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q01" id="001" value="CANVAS">
                        <label class="form-check-label" for="inlineRadio2">CANVAS</label>
                    </div>
                </div>
            </div>

            <br>

            <label for="age" class="col-md-12 col-form-label">Which guideline recommends Empagliflozin for diabetic patients with Atherosclerotic
                cardiovascular disease?</label>
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q02" id="002" value="WHO">
                        <label class="form-check-label" for="inlineRadio1">WHO</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q02" id="002" value="ADA 2019">
                        <label class="form-check-label" for="inlineRadio2">ADA 2019</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q02" id="002" value="IDF">
                        <label class="form-check-label" for="inlineRadio1">IDF</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q02" id="002" value="AHA">
                        <label class="form-check-label" for="inlineRadio2">AHA</label>
                    </div>
                </div>
            </div>

            <br>

            <label for="name" class="col-md-12 col-form-label">When Maxsulin was introduced in Bangladesh? </label>
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q03" id="003" value="2013">
                        <label class="form-check-label" for="inlineRadio1">2013</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q03" id="003" value="2011">
                        <label class="form-check-label" for="inlineRadio2">2011</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q03" id="003" value="2009">
                        <label class="form-check-label" for="inlineRadio1">2009</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q03" id="003" value="2007">
                        <label class="form-check-label" for="inlineRadio2">2007</label>
                    </div>
                </div>
            </div>

            <br>

            <label for="age" class="col-md-12 col-form-label">In which year FDA revealed Metformin can be safely used in mild to moderate renal impaired
                patients?</label>
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q04" id="004" value="2015">
                        <label class="form-check-label" for="inlineRadio1">2015</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q04" id="004" value="2016">
                        <label class="form-check-label" for="inlineRadio2">2016</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q04" id="004" value="2017">
                        <label class="form-check-label" for="inlineRadio1">2017</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q04" id="004" value="2018">
                        <label class="form-check-label" for="inlineRadio2">2018</label>
                    </div>
                </div>
            </div>

            <br>

            <label for="name" class="col-md-12 col-form-label">Which insulin Analogue can be taken before or after meal?</label>
            <div class="col-md-12">
                <div class="col-md-12">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q05" id="004" value="Aspart">
                        <label class="form-check-label" for="inlineRadio1">Aspart</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q05" id="004" value="Glargine">
                        <label class="form-check-label" for="inlineRadio2">Glargine</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q05" id="004" value="Detemir">
                        <label class="form-check-label" for="inlineRadio1">Detemir</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="q05" id="004" value="Glulisine">
                        <label class="form-check-label" for="inlineRadio2">Glulisine</label>
                    </div>
                </div>
            </div>

            <br>
            <br>

            <div class="col-md-12">
                <button type="submit" name="submit_btn" class="btn btn-primary">Done !</button>
            </div>
            <br>
            <hr>
        </div>
    </form>
</div>
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
