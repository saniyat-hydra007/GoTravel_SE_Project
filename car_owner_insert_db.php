<?php
    date_default_timezone_set( 'Asia/Dhaka' );

      if(
          isset($_POST['name']) &&
          isset($_POST['nid_no']) &&
          isset($_POST['contact_no']) &&
          isset($_POST['bank_acc']) &&
          !empty($_POST['name']) &&
          !empty($_POST['nid_no']) &&
          !empty($_POST['contact_no']) &&
          !empty($_POST['bank_acc'])
        ){


          $name = $_POST['name'];
          $nid_no = $_POST['nid_no'];
          $contact_no = $_POST['contact_no'];
          $bank_acc = $_POST['bank_acc'];
          $area = $_POST['area'];



          if( isset($_POST['email']) &&
              !empty($_POST['email'])
            ){
                $email = $_POST['email'];
          }

          else {
            $email = 'empty';
          }


          $request_date = date('y-m-d');


          require_once('db_connect.php');
        	$connect = mysqli_connect( HOST, USER, PASS, DB )
        		or die("Can not connect");


          mysqli_query( $connect, "INSERT INTO car_owners VALUES(NULL, '$name', $contact_no, '$email', NULL, NULL, $bank_acc, $nid_no, '$request_date', NULL, 0)")
            or die("Can not execute query");

          ?>
              <script>
              alert("Sent for validation.");
              location.assign("index.php");
              </script>
          <?php


        }
        else{
          ?>
          <script>
          alert("Please enter all required data");
          location.assign("guide_register.php");
          </script>

          <?php
        }

?>
