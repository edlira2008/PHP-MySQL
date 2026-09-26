<?php

$conn = new PDO("mysql:host=localhost;port=3306;dbname=baza", "root", "");
// $id=$_GET['id'];


$sql_statement= "DELETE FROM klienta WHERE id=:id";
$klienta= $conn->prepare($sql_statement);
$klienta-> bindParam(':id' ,  $id);




?>