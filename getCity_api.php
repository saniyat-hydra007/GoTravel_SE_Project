<?php
$country = $_GET['country'];

require_once('db_connect.php');
$connect = mysqli_connect( HOST, USER, PASS, DB )
  or die("Can not connect");


$returnobj= mysqli_query( $connect, "SELECT* FROM city WHERE Country_ID = $country" )
  or die("Can not execute query");

$string="";

while( $rows = mysqli_fetch_array( $returnobj ) ) {
    extract( $rows );
    $string=$string."<option value="."$City_ID".">"."$City_Name"."</option>";
  }

echo json_encode($string) ;

?>
