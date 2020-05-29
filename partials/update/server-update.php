<?php
include_once __DIR__ . '/../database.php';

if(empty($_POST['id'])){
    die("id non trovato");
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];

//query
$sql = "UPDATE `stanze`
SET `room_number` = $room_number, `beds` = $beds , `floor`= $floor
WHERE `id`= $id_room";
$result = $conn->query($sql);

$affrows=  $conn->affected_rows;
if($result && $affrows >0){
    header("Location: $base_path/show.php?id=$id_room");

}elseif($result){
    echo 'nessuna stanza trovata';
}else{
    echo 'si è verificato un errore';
}

?>