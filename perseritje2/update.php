<?php
include_once('config.php');


if(isset($_POST['submit'])){
   $name=$_POST['name'];
    $username=$_POST['username'];
    $surname=$_POST['surname'];
    $id=$_POST['id'];
    $password=$_POST['password'];

    $hashed_password=password_hash($password, PASSWORD_BCRYPT);


    $sql= "UPDATE klienta SET username='$username',name='$name' surname='$surname', password='$password' WHERE id=$id";

    $prep=$conn->prepare($sql);
    // $prep->execute();
    echo "is updated";

  
}
?>