<?php

@include __DIR__ . '/../database.php';
//OTTIENI LISTA STANZE HOMEPAGE
$sql = "SELECT * FROM `stanze`";
$result =$conn->query($sql);

if($result && $result->num_rows > 0){
    $rooms = [];
    while($row = $result->fetch_assoc()){
        
        // echo "ID. {$row['id']} - Floor:  {$row['floor']} <br>";
        //popolo array rooms con le singole stanze
        $rooms[] = $row;
    }
}elseif($result){
    echo 'No results';
}else{
    echo 'Query error';
}

//close db connection
$conn->close();
?>