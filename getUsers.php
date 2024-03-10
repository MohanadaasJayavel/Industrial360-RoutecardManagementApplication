<?php
include('middleware.php');
include('./db_connection.php');


$departid = $_POST['depart'];   

$sql = "SELECT id,dia_code FROM mst_diagram WHERE id=".$departid;

$result = mysqli_query($con,$sql);

$users_arr = array();

while( $row = mysqli_fetch_array($result) ){
    $userid = $row['id'];
    $dia_n = $row['dia_code'];
    
    $users_arr[] = array("id" => $userid, "dia_code" => $dia_n);
}


echo json_encode($users_arr);

include('./header.php'); 
?>