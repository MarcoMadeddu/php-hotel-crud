<?php
include_once __DIR__ . '/../database.php';

if(empty($_POST['id'])){
    die("id non trovato");
}

$id_room = $_POST['id'];
$room_number = $_POST['room_number'];
$beds = $_POST['beds'];
$floor = $_POST['floor'];
$updated_at = $_POST['updated_at'];

//query
$sql = "UPDATE `stanze`
SET `room_number` = ?, `beds` = ? , `floor`= ? , `updated_at` = NOW()
WHERE `id`= ?";
$stmt = $conn->prepare($sql);

$stmt->bind_param('iiii' ,$room_number,$beds,$floor,$id_room);
$stmt->execute();

$affrows=  $stmt->affected_rows;
if($stmt && $affrows >0){
    header("Location: $base_path/show.php?id=$id_room");

}elseif($result){
    echo 'nessuna stanza trovata';
}else{
    echo 'si è verificato un errore';
}

?>