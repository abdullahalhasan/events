<?php
    include('db_connect.php');
    error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>ACEDB Dashboard</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link href="style.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head><!--/head-->
<body>
<br>
<!--Heading-->
<div class="container-fluid text-md-center">
    <div class="jumbotron">
        <h1>Dashboard ACEDB Events</h1>
    </div>
</div>
<br>
<!--Heading End-->

<!--Table Start-->
<div class="container-fluid" style="overflow-x:auto;">
    <table class="table table-striped table-bordered table-md" cellspacing="1"
           width="100%">
        <thead>
        <tr>
            <th class="th-md">#
            </th>
            <th class="th-md">Name
            </th>
            <th class="th-md">Mobile Number
            </th>
            <th class="th-md">Organization
            </th>
            <th class="th-md">Question One
            </th>
            <th class="th-md">Question Two
            </th>
            <th class="th-md">Question Three
            </th>
            <th class="th-md">Question Four
            </th>
            <th class="th-md">Question Five
            </th>

        </tr>
        </thead>
        <tbody>
        <?php
        $query = "SELECT * FROM `acedb_table`";
        $results = mysqli_query($db, $query);

        //$row = mysqli_fetch_assoc($results);
        while ($row = mysqli_fetch_assoc($results)) {
            ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['mobile'] ?></td>
                <td><?php echo $row['organization'] ?></td>
                <td><?php echo $row['q1'] ?></td>
                <td><?php echo $row['q2'] ?></td>
                <td><?php echo $row['q3'] ?></td>
                <td><?php echo $row['q4'] ?></td>
                <td><?php echo $row['q5'] ?></td>

            </tr>

            <?php
        }
        ?>

    </table>
</div>
<!--Table End-->
<br>
<br>
<div class="col-md-12" ">
<form action="dump.php">
    <button type="submit" name="asd" class="btn btn-primary">Excel Download</button>
</form>
</div>
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
                        <h5 class="title mb-3">বিস্তারিত তথ্যের জন্য যোগাযোগ করুন</h5>
                        <p>সেন্টার ফর গ্লোবাল হেলথ রিসার্চ
                            রুম নংঃ ২৩৩, ২য় তলা, বারডেম জেনারেল হাসপাতাল ১২২ কাজী নজরুল ইসলাম এভিনিউ, শাহবাগ, ঢাকা ১০০০, বাংলাদেশ
                            <br>
                            মোবাইল হেল্প লাইনঃ ০১৭০৫৩৬০২৬৮ ,০১৫৩৪১১৮৪৫৪
                            <br>
                            ইমেইলঃ info@pcc-badas.org / cghr.badas@gmail.com</p>
                    </div>
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

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="table.js"></script>
</body>
</html>
