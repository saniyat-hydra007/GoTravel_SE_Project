<?php
// $l_id = $_GET['l_id'];
  $seat = $_GET['seat'];
//  $a_seat = $_GET['a_seat'];
//  $j_date = $_GET['j_date'];


// echo $l_id." ".$seat." ".$a_seat." ".$j_date;



error_reporting(0);


$link = mysqli_connect("localhost", "root", "", "go_travel");
$content ;
if (mysqli_connect_errno()) {
    $status = 'ERROR';
    $content = mysqli_connect_error();
}
$query = "UPDATE `launch_seat` SET `availability`='y' WHERE id=$seat ";
$query_run = (mysqli_query($link, $query));

$queryw = "UPDATE `launch_seat` SET `userr`='NULL',`pass`='NULL'  WHERE id=$seat";
$query_run = (mysqli_query($link, $queryw));



$query1 = "SELECT availability,n,id FROM `launch_seat` WHERE id=$seat";
if ($result = mysqli_query($link, $query1)) {
    /* fetch associative array */
    
    while ($row = mysqli_fetch_assoc($result)) {
       
        $content= $row['id']; // push value to array
    }
}

header('Content-type: application/json');
echo json_encode($content); // get all products in jsonformat.