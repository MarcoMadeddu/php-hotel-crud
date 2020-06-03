<?php
include_once __DIR__ .'/../database.php';
include_once __DIR__ .'/../functions.php';
//GET ROOM ID
if(empty($_POST['id'])){
    die('Id non corretto');
}

$id_room= $_POST['id'];
$room =$_POST['room_number'];
$url = "$base_path?del=$room";
delete($conn , 'stanze' , $id_room , $url);

//query
// $sql = "DELETE FROM `stanze` WHERE `id` = $id_room";
// $result = $conn->query($sql);

// $affrows=  $conn->affected_rows;
// if($result && $affrows >0){
//     header("Location: $base_path?del=$room");

// }elseif($result){
//     echo 'nessuna stanza trovata';
// }else{
//     echo 'si è verificato un errore';
// }
// Close connection 
$conn->close();
?>