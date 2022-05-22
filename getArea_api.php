<?php
$city = $_GET['city'];

require_once('db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
  or die("Can not connect");


$returnobj= mysqli_query( $connect, "SELECT* FROM area WHERE City_ID = $city" )
  or die("Can not execute query");

$string="";

while( $rows = mysqli_fetch_array( $returnobj ) ) {
    extract( $rows );
    $string=$string."<option value="."$Area_ID".">"."$Area_Name"."</option>";
  }

echo json_encode($string) ;

?>
