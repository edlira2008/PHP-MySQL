<?php
include_once("config.php");



 $id=$_GET['id'];

$sql_statement="DELETE FROM users WHERE id=:id";
$deleteUsers= $conn->prepare($sql_statement);

$deleteUsers-> bindParam(':id', $id);
$deleteUsers-> execute();







?>