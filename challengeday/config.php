<?php

$host= 'localhost';
$user='root';
$password="";
$dbname="tabel";

try{


$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
echo "conected";

$sql="CREATE TABLE tabel (id int() not null AUTO_INCREMENT PRIMARY KEY,
car varchar(30) not null,
engine varchar(30) not null,
year int(30)not null,
PS int(30))";



$sql = "INSERT INTO makina(car , engine , year , PS) VALUES('audi' ,2.0 , 2016 , 175)";//by default
//input forma, edhe me i marr
$conn->exec($sql);
echo "new row inserted"; 
}catch (PDOException $error){
    echo "not connected" .$error ->getMessage();

}


?>
