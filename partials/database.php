<?php

@include __DIR__ . '/../env.php';
//CONNESSIONE
$conn = new mysqli($server_name,$username,$password,$db_name);

//CHECK CONNESSIONE
if($conn && $conn->connect_error){
    die('si è verificato un errore');
}

