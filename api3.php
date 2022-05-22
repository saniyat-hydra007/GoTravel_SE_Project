<?php
// $l_id = $_GET['l_id'];
  $l_id = $_GET['l_id'];
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
$queryw = "UPDATE `launch_seat` SET pay='paid' WHERE  `userr`='sooha' and `pass`=123 and l_id=$l_id ";
$query_run = (mysqli_query($link, $queryw));

$query1 = "SELECT pay FROM `launch_seat`  WHERE l_id=$l_id and `userr`='sooha' and pay='paid'";
if ($result = mysqli_query($link, $query1)) {
    /* fetch associative array */
    
    while ($row = mysqli_fetch_assoc($result)) {
       
        $content= $row['pay']; // push value to array
    }
}

header('Content-type: application/json');
echo json_encode($content); // get all products in jsonformat.