<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn";


try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->query("SELECT * FROM prepare");
    while($row=$stmt->fetch()){
        echo "id:".$row["ID"]."</br>"."username: ".$row["Name"]."</br>"."Email:".$row["Email"] ."</br>";
    }
}
catch (PDOException $e){
    echo "Error: " . $e->getMessage();
}





?>