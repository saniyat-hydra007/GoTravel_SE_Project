<?php


session_start();
$l_id = $_GET['l_id'];
$j_date = $_GET['j_date'];
$fare = $_GET['fare'];
$ticket_cancellation_fee = $_GET['ticket_cancellation_fee'];
$slocation = $_GET['slocation'];
$elocation = $_GET['elocation'];
$base = $_GET['base'];
$dest = $_GET['dest'];


?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Home</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
    <style>
        body {
            margin-top: 20px;
        }

        .panel-title {
            display: inline;
            font-weight: bold;
        }

        .checkbox.pull-right {
            margin: 0;
        }

        .pl-ziro {
            padding-left: 0px;
        }

        .container {
            margin-left: 35%;
        }
    </style>
</head>

<body>
    <div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class="page">

        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                    <div class="rd-navbar-aside-outer">
                        <div class="rd-navbar-aside">
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-panel">
                                <!-- RD Navbar Toggle-->
                                <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                                <!-- RD Navbar Brand-->
                                <div class="rd-navbar-brand">
                                    <!--Brand--><a class="brand" href="index.html"><img src="images/logo-default-450x37.png" alt="" width="225" height="18" /></a>
                                </div>
                            </div>
                            <div class="rd-navbar-aside-right rd-navbar-collapse">
                                <ul class="rd-navbar-corporate-contacts">
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                                            <div class="unit-body">
                                                <p>09:00<span>am</span> — 05:00<span>pm</span></p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="unit unit-spacing-xs">
                                            <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                            <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                                        </div>
                                    </li>
                                </ul><a class="button button-md button-default-outline-2 button-ujarak" href="#">Get a Free Quote</a>
                            </div>
                        </div>
                    </div>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">
                                <ul class="list-inline list-inline-md rd-navbar-corporate-list-social">
                                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                                </ul>
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.html">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact Us</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
        <style>
            h4 {
                background-color: lightblue;
            }


            body {
                margin-top: 20px;
            }

            .panel-title {
                display: inline;
                font-weight: bold;
            }

            .checkbox.pull-right {
                margin: 0;
            }

            .pl-ziro {
                padding-left: 0px;
            }

            .container {
                margin-left: 35%;
            }

            .panel-body,
            .panel-heading,
            .col-xs-12 col-md-4 {
                border-radius: 20px;
                padding: 15px 20px;
                margin: 4px 2px;
                border: 2px solid sandybrown;

            }

            th {
                text-align: center;
            }

            #fin {

                text-align: center;
                width: 20%;
                padding: 2px;
                background: darkslategrey;
                color: white;
                font-size: 15px;
                cursor: pointer;
                height: 15%;
            }

            #fin:hover {
                background: #259ee4;
            }
        </style>


        <!-- Code here-->
        <?php
        $conn = mysqli_connect("localhost", "root", "");
        $database = mysqli_select_db($conn, 'go_travel');


        $sql =  "SELECT id,ticket_type,n,Date,class,floor FROM launch_seat WHERE Date = '$j_date' and l_id=$l_id and userr='sooha' and pass=123 and pay='no' ";
        $query_run0 = (mysqli_query($conn, $sql));

        if ($query_run0->num_rows > 0) {
        ?>

            <table class="table">
                <thead>
                    <tr>
                        <th>Launch name.</th>
                        <th>Journey date</th>
                        <th>Seat no.</th>
                        <th>fare</th>
                        <th>ticket_type</th>
                        <th>ticket cancellation fee</th>
                        <th>Boarding point and destination</th>
                        <th>Class</th>
                        <th>Floor</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $number1 = 0;
                    $total = 0;
                    while ($result = mysqli_fetch_array($query_run0)) {
                    ?>
                        <form action="" method="post">
                            <tr id=<?php echo $number1 ?>>
                                <td class="row-data"><?php echo $result['n'] ?></td>
                                <td class="row-data"><?php echo $result['Date'] ?> </td>
                                <td class="row-data"><?php echo $result['id'] ?> </td>
                                <td class="row-data"><?php echo $fare; ?> </td>
                                <td class="row-data"><?php echo $result['ticket_type'] ?> </td>
                                <td class="row-data"><?php echo $ticket_cancellation_fee; ?> </td>
                                <td class="row-data"><?php echo $base . "," . $slocation; ?> - <?php echo $dest . "," . $elocation; ?></td>
                                <td class="row-data"><?php echo $result['class'] ?> </td>
                                <td class="row-data"><?php echo $result['floor'] ?> </td>
                                <td class="row-data"> <input type='submit' class="btn btn-success btn-lg btn-block" name='a' value="remove" onclick="remove()"></td>
                            </tr>
                            <?php
                            $number1 = $number1 + 1;


                            ?>



                </tbody>

                </form>

            <?php
                    }
                    $res = preg_replace("/[^0-9]/", "", $fare) * $number1;
            ?>



            </table>
            <h4> Total amount:<?php echo " " . $res . " " ?>BDT</h4>

        <?php
        } else {

            echo  "nothing in cart\r\n";
        ?> <br>
            <br><input type='submit' name='a' value="Go BACK" id="fin"><br><br><br><?php
                                                                                    $res = 0;
                                                                                }
                                                                                    ?>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <div class="panel panel-default">

                        <div class="panel-heading">
                            <h3 class="panel-title">
                                Payment Details
                            </h3>

                        </div>

                        <div class="panel-body">
                            <form role="form">
                                <div class="form-group">
                                    <label for="cardNumber">
                                        CARD NUMBER</label>

                                    <div class="input-group">
                                        <input type="text" class="form-control" id="cardNumber" placeholder="Valid Card Number" required autofocus />
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-7 col-md-7">
                                        <div class="form-group">
                                            <label for="expityMonth">
                                                EXPIRY DATE</label>
                                            <div class="col-xs-6 col-lg-6 pl-ziro">
                                                <input type="text" class="form-control" id="expityMonth" placeholder="MM" required />
                                            </div>
                                            <div class="col-xs-6 col-lg-6 pl-ziro">
                                                <input type="text" class="form-control" id="expityYear" placeholder="YY" required />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-5 col-md-5 pull-right">
                                        <div class="form-group">
                                            <label for="cvCode">
                                                CV CODE</label>
                                            <input type="password" class="form-control" id="cvCode" placeholder="CV" required />
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <ul class="nav nav-pills nav-stacked">

                        <li class="active"><a href="#"><span class="badge pull-right"><span class="glyphicon glyphicon-usd"></span><?php echo " " . $res . " " ?>BDT</span> Final Payment</a>
                        </li>
                    </ul>
                    <br />
                    <input type='submit' class="btn btn-success btn-lg btn-block" name='a' value="Pay" id="final">

                </div>
            </div>
        </div>
        <br>


        <div id="1x" style="visibility:hidden;"> <?php echo $l_id; ?></div>
        <div id="15x" style="visibility:hidden;"> <?php echo $res; ?></div>
        <script>
            final.addEventListener('click', () => {
                let res = document.getElementById("15x").innerHTML;
                if (res != 0) {
                    var count = 0;
                    let l_id = document.getElementById("1x").innerHTML;
                    var cardNumber = document.getElementById("cardNumber").value;
                    var cvCode = document.getElementById("cvCode").value;
                    var expityMonth = document.getElementById("expityMonth").value;
                    var expityYear = document.getElementById("expityYear").value;
                    if (cardNumber == "") {
                        alert("fill out the card number information");
                        count = count + 1;
                    }
                    if (cvCode == "") {
                        alert("fill out the cvCode");
                        count = count + 1;
                    }
                    if (expityMonth == "") {
                        alert("fill out the EXPIRY MONTH");
                        count = count + 1;
                    }
                    if (expityYear == "") {
                        alert("fill out the EXPIRY Year");
                        count = count + 1;
                    }
                    if (count == 0){
                        fetch('http://localhost/site/api3.php?l_id=' + l_id)
                    .then(response => response.json())
                    .then(json => {
                        alert(JSON.stringify(json));
                        //document.getElementById("content").innerHTML = document.getElementById("content").innerHTML + "seat" + JSON.stringify(json) + "is added in your cart\n";
                        document.getElementById("content").style.fontSize = "x-large";
                   
                    })

                        }
                } else {
                    alert("nothing in the cart");
                }
            });
            fin.addEventListener('click', () => {
                location.assign(history.back());

            });

            function remove() {
                let rowId2 = event.target.parentNode.parentNode.id;
                let data = document.getElementById(rowId2).querySelectorAll(".row-data");
                let seat = data[2].innerHTML;
                let l_id = document.getElementById("1x").innerHTML;

                fetch('http://localhost/site/api.php?seat=' + seat)
                    .then(response => response.json())
                    .then(json => {
                        alert(JSON.stringify(json) + "is removed from your cart");
                        window.location.reload();


                    })

                window.location.reload();

            }
        </script>

        <!-- Code end-->
        <footer class="section footer-corporate context-dark">
            <div class="footer-corporate-inset">
                <div class="container">
                    <div class="row row-40 justify-content-lg-between">
                        <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                            <div class="oh-desktop">
                                <div class="wow slideInRight" data-wow-delay="0s">
                                    <h6 class="text-spacing-100 text-uppercase">Contact us</h6>
                                    <ul class="footer-contacts d-inline-block d-sm-block">
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                                <div class="unit-body"><a class="link-phone" href="tel:#">+1 323-913-4688</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                                <div class="unit-body"><a class="link-aemail" href="mailto:#">info@demolink.org</a></div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="unit">
                                                <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                                                <div class="unit-body"><a class="link-location" href="#">4730 Crystal Springs Dr, Los Angeles, CA 90027</a></div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                            <div class="oh-desktop">
                                <div class="wow slideInDown" data-wow-delay="0s">
                                    <h6 class="text-spacing-100 text-uppercase">Popular news</h6>
                                    <!-- Post Minimal 2-->
                                    <article class="post post-minimal-2">
                                        <p class="post-minimal-2-title"><a href="#">Your Personal Guide to 5 Best Places to Visit on Earth</a></p>
                                        <div class="post-minimal-2-time">
                                            <time datetime="2019-05-04">May 04, 2019</time>
                                        </div>
                                    </article>
                                    <!-- Post Minimal 2-->
                                    <article class="post post-minimal-2">
                                        <p class="post-minimal-2-title"><a href="#">Top 10 Hotels: Rating by Wonder Tour Travel Experts</a></p>
                                        <div class="post-minimal-2-time">
                                            <time datetime="2019-05-04">May 04, 2019</time>
                                        </div>
                                    </article>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                            <div class="oh-desktop">
                                <div class="wow slideInLeft" data-wow-delay="0s">
                                    <h6 class="text-spacing-100 text-uppercase">Quick links</h6>
                                    <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="#">Our Tours</a></li>
                                        <li><a href="#">Our Team</a></li>
                                        <li><a href="#">Gallery</a></li>
                                        <li><a href="#">Blog</a></li>
                                    </ul>
                                    <div class="group-md group-middle justify-content-sm-start"><a class="button button-lg button-primary button-ujarak" href="#">Get in touch</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-corporate-bottom-panel">
                <div class="container">
                    <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
                        <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                            <div>
                                <ul class="list-inline list-inline-sm footer-social-list-2">
                                    <li><a class="icon fa fa-facebook" href="#"></a></li>
                                    <li><a class="icon fa fa-twitter" href="#"></a></li>
                                    <li><a class="icon fa fa-google-plus" href="#"></a></li>
                                    <li><a class="icon fa fa-instagram" href="#"></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4 order-sm-first">
                            <!-- Rights-->
                            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Wonder Tour</span>. All Rights Reserved. Design by <a href="https://www.templatemonster.com">TemplateMonster</a></p>
                        </div>
                        <div class="col-sm-6 col-md-4 text-md-right">
                            <p class="rights"><a href="#">Privacy Policy</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>