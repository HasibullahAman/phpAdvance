<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learn";


try{
    $conn =new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn-> prepare("INSERT INTO prepare(Name,Email,Password) VALUES(:Name,:Email,:Password)");
    $stmt->bindParam(':Name' , $Name);
    $stmt->bindParam(':Email' ,$Email);
    $stmt->bindParam(':Password',$Password);



    $Name = "Hasib";
    $Email = "hasib.aman7@gmail.com";
    $Password = "123456";
    $stmt->execute();


    $Name = "Milad";
    $Email = "milad.aman7@gmail.com";
    $Password = "123456";
    $stmt->execute();

    $Name = "sahil";
    $Email = "sahil.aman7@gmail.com";
    $Password = "123456";
    $stmt->execute();
    echo "Recard added";

}
catch(PDOException $e)
{
    echo "error message".$e->getMessage();
}


?>


















