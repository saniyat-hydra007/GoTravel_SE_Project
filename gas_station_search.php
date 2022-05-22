<?php
include 'db_connect.php';
$searchErr = '';
$gas_station_details = '';

if (isset($_POST['save'])) {
    if (!empty($_POST['search'])) {
        $search = $_POST['search'];
        $stmt = $con->prepare("select * from gas_station where city like '%$search%' or district like '%$search%'");
        $stmt->execute();
        $gas_station_details = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } else {
        $searchErr = "Please enter the information";
    }
}

?>



<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
  <title>Gas Stations</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="bootstrap/js/bootstrap-theme.css" crossorigin="anonymous">
    <style>
        .container {
            width: 70%;
            height: 30%;
            padding: 20px;
        }
    </style>
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
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
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
                    <!--Brand--><a class="brand" href="index.html"><img src="images/logo-default-450x37.png" alt="" width="225" height="18"/></a>
                  </div>
                </div>
                <div class="rd-navbar-aside-right rd-navbar-collapse">
                  <ul class="rd-navbar-corporate-contacts">
                    <li>
                      <div class="unit unit-spacing-xs">
                        <div class="unit-left"><span class="icon fa fa-clock-o"></span></div>
                        <div class="unit-body">
                          <p>09:00<span>am</span> â€” 05:00<span>pm</span></p>
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
                  <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Home</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="post.php">Post Query</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="exchange rate/index.html">Currency Rate</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="gas_station_search.php">Search Gas Station</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="currency_shop_search.php">Search Currency Exchange Shop</a>
                  </li>
                  <li class="rd-nav-item"><a class="rd-nav-link" href="bus\index.php">Book Bus Tickets</a>
                  </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>


<!-- Code here-->
<div class="container">
        <h3><u>Gas Stations</u></h3>
        <br /><br />



        <!-- <input type="button" value = "Check!" onclick = "go();"> -->



        <form class="form-horizontal" action="#" method="post">
            <div class="row">
                <div class="form-group">
                    <label class="control-label col-sm-4" for="email"><b>Search Gas Stations</b>:</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" name="search" placeholder="city/district name">
                    </div>
                    <div class="col-sm-2">
                        <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
                    </div>
                </div>
                <div class="form-group">
                    <span class="error" style="color:red;">* <?php echo $searchErr; ?></span>
                </div>

            </div>
        </form>
        <br /><br />
        <h3><u>Search Result</u></h3><br />
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Station Name</th>
                        <th>Road No.</th>
                        <th>City</th>
                        <th>District</th>
                        <th>Division</th>
                        <th>Country</th>
                        <th>Phone Number</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (!$gas_station_details) {
                        echo '<tr>No data found</tr>';
                    } else {
                        foreach ($gas_station_details as $key => $value) {
                    ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $value['name']; ?></td>
                                <td><?php echo $value['road']; ?></td>
                                <td><?php echo $value['city']; ?></td>
                                <td><?php echo $value['district']; ?></td>
                                <td><?php echo $value['district']; ?></td>
                                <td><?php echo $value['country']; ?></td>
                                <td><?php echo $value['phone_number']; ?></td>

                            </tr>

                    <?php
                        }
                    }
                    ?>

                </tbody>
            </table>
        </div>
    </div>
    <script src="jquery-3.2.1.min.js"></script>
    <script src="bootstrap.min.js"></script>


    <!-- <script>
      function go(){
        location.assign('client.html');
      }
    </script> -->


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