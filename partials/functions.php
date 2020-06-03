<?php

//GET ALL RECORDS
function getAll($conn , $table){
    $sql = "SELECT * FROM `$table`";
    $result =$conn->query($sql);

    if($result && $result->num_rows > 0){
        $records = [];
        while($row = $result->fetch_assoc()){
        
        // echo "ID. {$row['id']} - Floor:  {$row['floor']} <br>";
        //popolo array rooms con le singole stanze
        $records[] = $row;
    }
    }elseif($result){
        $records[] = [];
    }else{
        $records[] = false;
    }
    return $records;

    //close db connection
    $conn->close();
}

//GET SINGLE RECORD BY ID

function getSingle($conn , $table , $id){
//query selected room
$sql ="SELECT * FROM `$table` WHERE `id` = $id";
$result= $conn->query($sql);

if($conn && $result->num_rows >0 ){
    $record=$result->fetch_assoc();
    // var_dump($room);
}elseif($result){
    $record =[];
}else{
    $record = false;
}
return $record;
// Close connection 
$conn->close();
 
}

//DELETE RECORD
function delete($conn , $table , $id , $url){
    $sql = "DELETE FROM `$table` WHERE `id` = $id";
    $result = $conn->query($sql);

    $affrows=  $conn->affected_rows;
    if($result && $affrows >0){
     header("Location: $url");

    }elseif($result){
     echo 'nessuna stanza trovata';
    }else{
     echo 'si è verificato un errore';
    }
}
?>