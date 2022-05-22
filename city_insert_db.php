<?php
    date_default_timezone_set( 'Asia/Dhaka' );

      if(
          isset($_POST['name']) &&
          isset($_POST['country']) &&
          !empty($_POST['name']) &&
          !empty($_POST['country'])
        ){


          $name = $_POST['name'];
          $country = $_POST['country'];


          // $gImage=$_FILES['gImage'];
          // $img_name=$gImage['name'];
          //
          //
          // $img_tmp_path=$gImage['tmp_name'];
          // $img_dst_path="gImage/$img_name";
          // move_uploaded_file($img_tmp_path,$img_dst_path);
          //
          // $pv_Image=$_FILES['pv_Image'];
          // $pv_img_name=$pv_Image['name'];
          //
          // $pv_img_tmp_path=$pv_Image['tmp_name'];
          // $pv_img_dst_path="pv_Image/$img_name";
          // move_uploaded_file($pv_img_tmp_path,$pv_img_dst_path);


          require_once('db_connect.php');
        	$connect = mysqli_connect( HOST, USER, PASS, DB )
        		or die("Can not connect");


          mysqli_query( $connect, "INSERT INTO city VALUES(NULL, $country, '$name')")
            or die("Can not execute query");

          ?>
              <script>
              alert("City Added!");
              location.assign("index.php");
              </script>
          <?php


        }
        else{
          ?>
          <script>
          alert("Please enter all required data");
          location.assign("city_register.php");
          </script>

          <?php
        }

?>
