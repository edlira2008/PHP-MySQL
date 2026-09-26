<?php

$host='localhost';
$user='root';
$password="";
$dbname="lili";


try {
    $conn= new PDO("mysql:host=localostport=3306;dbname=lili", 'root', "");
   
    $sql= "CREATE DATABASE IF NOT EXISTS lili";
    $conn ->exec($sql);
    echo "database is created";
    

}catch(PDOException $error){
    echo "database isnt created" .$error->getMessage();
}

?>