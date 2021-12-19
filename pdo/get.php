<?php

$dbname = "db_pdo";
$host = "localhost";
$username = "root";
$password = "";

// $conn = new PDO("mysql:dbname=db_pdo;host:localhost","root","");

$conn = new PDO("mysql:dbname=".$dbname.";host=".$host,$username,$password);

$id = 8;

$stmt =  $conn->prepare(" SELECT * FROM users WHERE id = :id ");


$stmt->bindParam(':id',$id);

$stmt->execute();

$results =  $stmt->fetchAll( PDO::FETCH_ASSOC );

// echo "<pre>";
// var_dump($results);



foreach ($results  as $row) {
   
    foreach ($row  as  $key => $value) {
       echo $key . ": " .$value . "<br>";
    }
   
}





?>


<style>
    body{
        font-family: 'Courier New', Courier, monospace;
        font-size: 25px;
    }
</style>