<?php

$dbname = "db_pdo";
$host = "localhost";
$username = "root";
$password = "";

// $conn = new PDO("mysql:dbname=db_pdo;host:localhost","root","");

$conn = new PDO("mysql:dbname=".$dbname.";host=".$host,$username,$password);

$stmt =  $conn->prepare("SELECT * FROM users ORDER BY id DESC ");

$stmt->execute();

$results =  $stmt->fetchAll( PDO::FETCH_ASSOC );

// echo "<pre>";
// var_dump($results);

foreach ($results  as $row) {
   
    foreach ($row  as  $key => $value) {
       echo $key . ": " .$value . "<br>";
    }
    echo "<br>";
    echo "***********";
    echo "<br><br>";
}





?>