<?php

// creating tables . deletng , inserting rows using

// primary key run sene uniike
// databaz relacionare nderlidhen informata mes  veti 
// data type osht string , integer , float, booleann  etj
// PDO - e krijon lidhjen mes serverit dhe database 
// AUTO INCREMENET E RIT NI SEN 
// structure query languafe SQL

$host="localhost";
$user="root";
$password="";
$db_name="testdb";


try{
 $conn=new PDO("mysql:host=$host;dbname=$db_name", $user, $password);
//  $sql="create database testdb"; na nevojitet vetem ni her kur e krijojme dataase e re
 

// $sql="CREATE TABLE users (id int(6) not null AUTO_INCREMENT PRIMARY KEY,
// USERNAME varchar(30) not null,
// password varchar(30) not null,
// age int(30))";

$sql="INSERT INTO users (username, password, age) VALUES ('edlira.kastrati', 'genius1fs23!' , 17);";
$conn -> exec($sql);
 echo "new row is inserted succcesfully!";
 }catch(Exception $e){
    echo "something went wrong ";
}





?>

