<?php
    session_start();
    date_default_timezone_set( 'Asia/Dhaka' );
    $joining_date = date('y-m-d');
    if(isset($_SESSION['username']) && !empty($_SESSION['username']))
    {
      $access = $_SESSION['access'];
      if($access  == 'admin'){

          if(isset($_POST['owner_id']) && !empty($_POST['owner_id']) && isset($_POST['username']) && !empty($_POST['username'])){
                $owner_id=$_POST['owner_id'];
                $username=$_POST['username'];
                $password=$_POST['mypass'];

                  require_once('db_connect.php');
                	$connect = mysqli_connect( HOST, USER, PASS, DB )
                		or die("Can not connect");
                  $returnobj= mysqli_query( $connect, "SELECT * FROM car_owners WHERE owner_id = '$owner_id'" )
                    or die("Can not execute query");

                  while( $rows = mysqli_fetch_array( $returnobj ) ) {
                    extract( $rows );
                    $returnobj = mysqli_query( $connect, "UPDATE car_owners SET Approved = 1 WHERE owner_id = $owner_id" )
                        or die("Can not execute query");
                    $returnobj = mysqli_query( $connect, "UPDATE car_owners SET Joining_Date = '$joining_date' WHERE owner_id = $owner_id" )
                        or die("Can not execute query");
                    $returnobj = mysqli_query( $connect, "UPDATE car_owners SET login_id = '$username' WHERE owner_id = $owner_id" )
                        or die("Can not execute query");
                    $returnobj = mysqli_query( $connect, "UPDATE car_owners SET Joining_Date = '$password' WHERE owner_id = $owner_id" )
                        or die("Can not execute query");




                  ?>
                  <script>location.assign("guide_list.php");</script>
                  <?php

                }
            }
            else{
              ?>
              <script>alert("ID not found!");</script>
              <script>location.assign("review_application_guide.php");</script>
              <?php
            }
    }
    else{
      ?>
      <script>location.assign("index.php");</script>
      <?php
    }
  }
  else{
    ?>
    <script>location.assign("login.php");</script>
    <?php
  }
?>
