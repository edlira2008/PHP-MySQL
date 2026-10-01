<?php


$server='localhost';
$user="root";
$pass="";
$dbname="movie_project";

try{
    $conn = new PDO("mysql:host=$server;dbname=$dbname" , $user , $pass);
    echo "connected";
}catch(exception $e) {
    echo "error" .$e ->getMessage();

}


?>