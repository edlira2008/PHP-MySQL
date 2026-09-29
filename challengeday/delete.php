<?php
include_once("config.php");



 $id=$_GET['id'];

$sql_statement="DELETE FROM makina WHERE id=:id";
$deleteMakina= $conn->prepare($sql_statement);

$deleteMakina-> bindParam(':id', $id);
$deleteMakina-> execute();







?>