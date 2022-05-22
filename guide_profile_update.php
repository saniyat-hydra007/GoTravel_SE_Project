<?php
session_start();
if(isset($_SESSION['username']) && !empty($_SESSION['username']) )
{
    if(isset($_GET['guide_id']) && !empty($_GET['guide_id'])){
        $access = $_SESSION['access'];
        $guide_id=$_GET['guide_id'];
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
            <link rel="stylesheet" href="css/css.css">
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
                          <a class="button button-md button-default-outline-2 button-ujarak" href="logout.php">Sign Out</a>
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
                            <li class="rd-nav-item"><a class="rd-nav-link" href="about.html">About</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="typography.html">Typography</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="contact-us.html">Contact Us</a>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="guide_list.php">Guide List</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </nav>
                </div>
              </header>

              <?php
                require_once('db_connect.php');
              	$connect = mysqli_connect( HOST, USER, PASS, DB )
              		or die("Can not connect");
              ?>

        <!--------------------------------------------------------------------------------------------------------------------------------------->

              <?php

                $returnobj= mysqli_query( $connect, "SELECT * FROM guide AS g JOIN area AS a ON g.Area_ID = a.Area_ID JOIN city AS c ON a.City_ID = c.City_ID JOIN country AS co ON c.Country_ID = co.Country_ID WHERE guide_id = '$guide_id'" )
                  or die("Can not execute query");


                    while( $rows = mysqli_fetch_array( $returnobj ) ) {
                        extract( $rows );
                      ?>
                      <br>
                      <form action="guide_update_db.php" method="post" enctype="multipart/form-data" id="box2">
                          <br>

                          <img src="<?php echo $Image?>" width="200" height="150">
                          <br><br>
                          <label for="name">Name</label>:
                          <br>
                          <input class="text" type="text" id="name" name="name" size="40px" value="<?php echo $Name;?>">
                          <br><br>

                          <label for="country">Country</label>:
                          <br>
                          <select class="text" id="country" name="country" onchange="selectCity()">
                            <option selected="selected" value="<?php echo $Country_ID;?>"><?php echo $Country_Name;?></option>;
                            <?php
                            $returnobj= mysqli_query( $connect, "SELECT * FROM country" )
                              or die("Can not execute query");

                            while( $rows = mysqli_fetch_array( $returnobj ) ) {
                                extract( $rows );
                                echo "<option value='$Country_ID'>$Country_Name</option>";
                            }
                            ?>
                          </select>
                          <script type="text/javascript">
                          // selectCity();
                              setTimeout(() => { selectCity(); }, 10);
                          </script>
                          <br><br>
                          <label for="city">City</label>:
                          <br>
                          <select class="text" name="city" id="city" onchange="selectArea()">
                              <option selected="selected" value="<?php echo $City_ID;?>"><?php echo $City_Name;?></option>
                          </select>
                          <br><br>
                          <label for="area">Area</label>:
                          <br>
                          <select class="text" name="area" id="area">
                              <option selected="selected" value="<?php echo $Area_ID;?>"><?php echo $Area_Name;?></option>
                          </select>

                          <br><br>
                          <label for="contact_no">Contact No</label>:
                          <br>
                          <input class="text" type="text" id="contact_no" name="contact_no" size="40px" value="0<?php echo $Contact_no ?>">
                          <br><br>
                          <label for="email">Email</label>:
                          <br>
                          <input class="text" type="text" id="email" name="email" size="40px" value="<?php echo $Email ?>">
                          <br><br>
                          <label for="bank_acc">NID</label>:
                          <br>
                          <input class="text" type="text" id="nid" name="nid" size="40px" value="<?php echo $nid?>">
                          <br><br>
                          <label for="joining_date">Joining Date</label>:
                          <br>
                          <input class="text" id="joining_date" name="joining_date" size="40px" value="<?php echo $Joining_Date ?>">
                          <br><br>
                          <label for="addrees">Address</label>:
                          <br>
                          <input class="text" type="text" id="address" name="address" size="40px" value="<?php echo $Address?>">
                          <br><br>
                          <label for="addrees">Bank Account</label>:
                          <br>
                          <input class="text" type="text" id="bank_acc" name="bank_acc" size="40px" value="<?php echo $Bank_Account_no ?>">
                          <br><br>
                          <label for="pv">Police Varification</label>:
                          <br>
                          <img src="<?php echo $pv_Image?>" width="400" height="300">
                          <br><br>

                          <input type="submit" id="button" value="Submit">
                          <input type="button" id="button" value="Back" onclick="back();">

                      </form>



                      <?php

                    }

              ?>


        <!--------------------------------------------------------------------------------------------------------------------------------------->


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
            <script>


              function selectCity(){
                var country = document.getElementById("country").value;
                if (country == "") {
                  document.getElementById("city").innerHTML = "<option value=>Select City</option>";
                  setTimeout(() => { selectArea(); }, 100);
                  return;
                }
                fetch("getCity_api.php?country="+country)
                .then(response => response.json())
                .then(json=> {
                  var string = "<option value=>Select City</option>" + JSON.stringify(json)
                  document.getElementById("city").innerHTML= string;
                })

                setTimeout(() => { selectArea(); }, 100);

              }


              function selectArea(){
                var city = document.getElementById("city").value;
                if (city == "") {
                  document.getElementById("area").innerHTML = "<option value=>Select Area</option>";
                  return;
                }
                fetch("getArea_api.php?city="+city)
                .then(response => response.json())
                .then(json=> {
                  var string = "<option value=>Select Area</option>" + JSON.stringify(json)
                  document.getElementById("area").innerHTML= string;
                })
              }

              function deleteProfile(guide_id){
                location.assign('guide_profile_delete.php?guide_id='+guide_id);
              }
              function blockGuide(guide_id){
                location.assign('guide_block.php?guide_id='+guide_id);
              }

              function back(){
                location.assign('guide_list.php');
              }


            </script>

          </body>
        </html>
        <?php
    }

    else{
      ?>
      <script>

        location.assign('guide_list.php');

      </script>
      <?php
    }
}
else{
  ?>
  <script>

    location.assign('login.php');

  </script>
  <?php
} ?>
