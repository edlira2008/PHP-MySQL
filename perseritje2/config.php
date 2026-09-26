<?php

$host='localost';
$user='root';
$password="";



try{
 $conn = new PDO("mysql:host=localhost", "root", "");
 $sql="CREATE DATABASE IF NOT EXISTS baza";
 $conn->exec  ($sql);

//  echo "database cretaed";
}catch(Exception $error){
    echo "not created " .$error->getMessage();
}
 
?>