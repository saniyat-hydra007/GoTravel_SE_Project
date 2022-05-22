<?php 
header("Cache-Control: max-age=300, must-revalidate"); 
?>
<?php


session_start();


$nam = $_GET['nam'];
$seat = $_GET['seat'];
$base = $_GET['base'];
$dest = $_GET['dest'];
$journey_date = $_GET['journey_date'];
$ticket_type = $_GET['ticket_type'];
$ticket_cancellation_fee = $_GET['ticket_cancellation_fee'];
$class = $_GET['classs'];
$starting_point = $_GET['slocation'];
$ending_point = $_GET['elocation'];
$person = $_GET['person'];
$floor = $_GET['floor'];
$fare = $_GET['fare'];
$journey_hour = $_GET['journey_hour'];
$l_id = $_GET['l_id'];
$rdate = $_GET['rdate'];
$trip = $_GET['trip'];





?>


</body>

</html>
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


        <!-- Code here-->
        <style>
            #b1:disabled,
            #b1[disabled] {
                border: 1px solid #999999;
                background-color: #cccccc;
                color: #666666;
            }

            #slide {

                height: 100%;
                width: 100%
            }

            #text {


                position: absolute;
                top: 35%;
                left: 40%;
                transform: translate(-50%, -50%);
                border: 3px;

            }

            table {
                display: flex;
                flex-wrap: wrap;
            }

            .break {
                flex-basis: 100%;
                height: 0;
            }

            #b1,
            #payment,
            #explore {

                text-align: center;
                background: cadetblue;
                color: white;
                font-size: 25px;
                cursor: pointer;
                border-radius: 12px;
                border: none;
                padding: 15px 20px;
                display: inline-block;
                margin: 4px 2px;

            }

            #b1:hover {
                background: brown;
            }

            #payment:hover {
                background: brown;
            }

            #explore:hover {
                background: brown;
            }

            #content {

                display: inline-block;
                width: 700px;
                height: 600px;
                text-align: center;
                background-image: linear-gradient(darksalmon, cadetblue);
                font-family: 'Times New Roman', Times, serif;
                border-radius: 20px;
                padding: 15px 20px;
                margin: 4px 2px;
                border: 2px solid sandybrown;
            }

            h4 {

                background-color: bisque;
                color: #212121
            }

            #n {
                display: flex;
            }

            #m {
                display: flex;
            }

            p {
                font-size: large;
            }
        </style>

        <div id="m">
            <img id="slide" src="images/5.jpg" alt="Background Img">
            <content id="text">
                <div id="n">
                    <?php

                    $conn = mysqli_connect("localhost", "root", "");
                    $database = mysqli_select_db($conn, 'go_travel');

                    // echo $nam . " " . $class;
                    // echo $journey_date . " " . $ticket_type . " " . $floor . " launch id" . $l_id . "    ";


                    $sql =  "SELECT id,availability FROM launch_seat WHERE ticket_type like '$ticket_type'and 
                             Date = '$journey_date' and class like '$class' and floor =$floor and l_id=$l_id and availability like 'y'";
                    $query_run0 = (mysqli_query($conn, $sql));

                    if ($query_run0->num_rows > 0) {
                    ?>

                        <table class="table">
                            <tbody>
                                <?php
                                $number1 = 0;
                                while ($result = mysqli_fetch_array($query_run0)) {
                                ?>
                                    <form action="laction.php" method="post">
                                        <tr id=<?php echo $number1 ?>>
                                            <td class="row-data"><input type="button" class="row-data1" id="b1" value="<?php echo $result['id'] ?>" onclick="show2(); this.disabled = true;" /></td>
                                            <td class="row-data" style="visibility:hidden;"><?php echo $result['availability'] ?> </td>
                                            <td class="row-data" style="visibility:hidden;"><?php echo $result['id'] ?> </td>
                                        </tr>
                                        <?php
                                        $number1 = $number1 + 1 ?>
                            </tbody>

                            </form>

                        <?php
                                }

                        ?>
                        </table>

                    <?php
                    } else {

                        echo "no seat available";
                    }

                    $sql1 = "SELECT * FROM launch_seat where availability= 'y' and l_id=$l_id ";
                    $query_run0 = (mysqli_query($conn, $sql1));
                    if ($query_run0->num_rows > 0) {
                        $c = 0;
                        while ($result = mysqli_fetch_array($query_run0)) {
                            $c = $c + 1;
                        }
                    }
                    echo "seat avilable" . $c;

                    $sql2 = "UPDATE `launch` SET `available_st`=$c where l_id=$l_id ";
                    $query_run0 = (mysqli_query($conn, $sql2));
                    ?>
                    <br>
                    <br>
                    <div id="content">
                        <h4>WELCOME to <?php echo $nam ?></h4>
                        <p>From<?php echo " " . $base ?>,<?php echo $starting_point ?> To <?php echo $dest ?>, <?php echo $ending_point ?>
                            at <b><?php echo $journey_date ?></b> </p>
                        <p>fare per seat:<b> <?php echo $fare ?></b></p>

                        <input type="button" id="payment" value="Pay now">
                        <input type="button" id="explore" value="Go back and explore_more">

                    </div>
                </div>
            </content>


        </div>


        <div id="1x" style="visibility:hidden;"> <?php echo $l_id; ?></div>
        <div id="2x" style="visibility:hidden;"> <?php echo $c; ?></div>
        <div id="3x" style="visibility:hidden;"> <?php echo $journey_date; ?></div>
        <div id="4x" style="visibility:hidden;"> <?php echo $person; ?></div>
        <div id="5x" style="visibility:hidden;"> <?php echo $fare; ?></div>
        <div id="6x" style="visibility:hidden;"> <?php echo $ticket_cancellation_fee; ?></div>
        <div id="7x" style="visibility:hidden;"> <?php echo $starting_point; ?></div>
        <div id="8x" style="visibility:hidden;"> <?php echo $ending_point; ?></div>
        <div id="9x" style="visibility:hidden;"> <?php echo $base ?></div>
        <div id="10x" style="visibility:hidden;"> <?php echo $dest; ?></div>
        <div id="11x" style="visibility:hidden;"> <?php echo $floor; ?></div>
        <div id="12x" style="visibility:hidden;"> <?php echo $class; ?></div> 
        <div id="13x" style="visibility:hidden;"> <?php echo $trip; ?></div> 
        <div id="14x" style="visibility:hidden;"> <?php echo $ticket_type; ?></div> 
        <div id="15x" style="visibility:hidden;"> <?php echo $rdate; ?></div> 

        <script>
            
            function show2() {
                
                let rowId2 = event.target.parentNode.parentNode.id;
                let data = document.getElementById(rowId2).querySelectorAll(".row-data");
                let seat = data[2].innerHTML;
                let availability = data[1].innerHTML;

                let l_id = document.getElementById("1x").innerHTML;

                let a_seat = document.getElementById("2x").innerHTML;
               

                fetch('http://localhost/site/api2.php?seat=' + seat)
                    .then(response => response.json())
                    .then(json => {
                        alert(JSON.stringify(json) + "is added in your cart");
                        //document.getElementById("content").innerHTML = document.getElementById("content").innerHTML + "seat" + JSON.stringify(json) + "is added in your cart\n";
                        document.getElementById("content").style.fontSize = "x-large";
                   
                    })


                    
        }
            payment.addEventListener('click', () => {
                let fare = document.getElementById("5x").innerHTML;
                let l_id = document.getElementById("1x").innerHTML;
                let j_date = document.getElementById("3x").innerHTML;

                let ticket_cancellation_fee = document.getElementById("6x").innerHTML;
                 let slocation = document.getElementById("7x").innerHTML;
                 let elocation = document.getElementById("8x").innerHTML;
                
                let base= document.getElementById("9x").innerHTML;
                 let dest = document.getElementById("10x").innerHTML;
                // let floor = document.getElementById("11x").innerHTML;
                // let classs = document.getElementById("12x").innerHTML;

                location.assign('addlist.php?l_id='+l_id+'&j_date='+j_date+'&fare='+fare+'&ticket_cancellation_fee='+ticket_cancellation_fee+'&slocation='+slocation+'&elocation='+elocation+'&base='+base+'&dest='+dest);
            });

            explore.addEventListener('click', () => {
               
    window.history.back();
    location.reload();
            

            });
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