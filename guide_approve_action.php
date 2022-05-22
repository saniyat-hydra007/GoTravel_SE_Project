<?php
    session_start();
    date_default_timezone_set( 'Asia/Dhaka' );
    $joining_date = date('y-m-d');
    if(isset($_SESSION['username']) && !empty($_SESSION['username']))
    {
      $access = $_SESSION['access'];
      if($access  == 'admin'){

          if(isset($_GET['guide_id']) && !empty($_GET['guide_id'])){
                $guide_id=$_GET['guide_id'];

                  require_once('db_connect.php');
                	$connect = mysqli_connect( HOST, USER, PASS, DB )
                		or die("Can not connect");
                  $returnobj= mysqli_query( $connect, "SELECT * FROM guide WHERE guide_id = '$guide_id'" )
                    or die("Can not execute query");

                  while( $rows = mysqli_fetch_array( $returnobj ) ) {
                    extract( $rows );
                    $returnobj = mysqli_query( $connect, "UPDATE guide SET Approved = 1 WHERE guide_id = $guide_id" )
                        or die("Can not execute query");
                    $returnobj = mysqli_query( $connect, "UPDATE guide SET Joining_Date = '$joining_date' WHERE guide_id = $guide_id" )
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
