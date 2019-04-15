<?php
include('db_connect.php');
error_reporting(0);
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
        <link href="style.css" rel="stylesheet"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
              integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head><!--/head-->
    <body>
    <br>
    <br>
    <form method='post' action='database.php' onclick='myFunction'>
<?php
if (isset($_POST['submit_btn'])) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $organization = $_POST['organization'];
    $q01 = $_POST['q01'];
    $q02 = $_POST['q02'];
    $q03 = $_POST['q03'];
    $q04 = $_POST['q04'];
    $q05 = $_POST['q05'];
    echo "<br>";
    //echo $name.$mobile.$organization.$q01.$q02.$q03.$q04.$q05;
    $value = 0;
    if ($q01 == "CARMELINA") {
        $value++;
    } if ($q02 == "ADA 2019") {
        $value++;
    } if ($q03 == "2007") {
        $value++;
    } if ($q04 == "2016") {
        $value++;
    } if ($q05 == "Aspart") {
        $value++;
    }

    $query = "INSERT INTO `acedb_table`(`id`, `name`, `mobile`, `organization`, `q1`, `q2`, `q3`, `q4`, `q5`)
      VALUES (null,'$name','$mobile','$organization','$q01','$q02','$q03','$q04','$q05')";
    $ifInset = mysqli_query($db,$query);
    if ($ifInset) {
        echo "
                        <div class='container'>
                            <div class='jumbotron' >
                                <h1 class='txt-md-center'>Congratulations!!! You've Given ".$value." Answers Rightly!!</h1>
                                
                            </div>
                            <div style='float: right'>
                                 <a href='index.php'> <input type='button' class='btn btn-success' name='abs' value='Thank You!'> </a>
                            </div>
                        </div>
                    ";
    } else {
        echo "<div class='container'>
                            <div class='jumbotron' >
                                <h1 class='txt-md-center'>আপনার ডাটা এন্ট্রি সফল হয় নি। অনুগ্রহ করে আবার এন্ট্রি করুন।</h1>
                                
                            </div>
                            <div style='float: right'>
                                 <a href='index.php'> <input type='button' class='btn btn-success' name='abs' value='আবার জমা দিন'> </a>
                            </div>
                        </div>";
    }

}
?>

    </form>
    <br>
    <br>
    <br>
    <br>
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
    </body>
</html>

