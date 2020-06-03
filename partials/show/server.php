<?php
// Connect to db

include __DIR__ . '/../database.php';
include __DIR__ . '/../functions.php';

$id_room= $_GET['id'];
$room= getSingle($conn , 'stanze' , $id_room);



// //query selected room
// $sql ="SELECT * FROM `stanze` WHERE `id` = $id_room";
// $result= $conn->query($sql);

// if($conn && $result->num_rows >0 ){
//     $room=$result->fetch_assoc();
//     // var_dump($room);
// }elseif($result){
//     echo 'no result';
// }else{
//     echo 'Query error';
// }
// // Close connection 
// $conn->close();
?>