<?php

// creating tables . deletng , inserting rows using

// primary key run sene unike
// databaza relacionare nderlidhen informata mes  veti 
// data type osht string , integer , float, boolean  etj
// PDO - e krijon lidhjen mes serverit dhe database 
// AUTO INCREMENET E rrit ni sen 
// structure query language SQL
// crud - create read update delete


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
 }catch(Exception $msg){
    echo "something went wrong $msg";  
    // qikjo exception  msg osht variabla qe nese shkn keq diqka te kodi ajo automatikisht  ttregon se pse fal saj 
    }





?>

