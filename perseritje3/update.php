<?php
include_once("config.php");

if(isset($_POST['submit'])){
    $username=['username'];
    $name=['name'];
    $surname=['surname'];
    $email=['email'];
    $id=['id']

}

$sql ="UPDATE info SET username='$username', name='$name' , surname='$surname', email='$email' , WHERE   id=$id";
$prep=$conn->prepare($sql);
echo "is updated";


?>