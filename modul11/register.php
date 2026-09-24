<?php
include_once("config.php");
if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $hashed_password=password_hash($password,PASSWORD_BCRYPT);

    if(empty($name)||
    empty($username)||
    empty($email)||
    empty($password)){
        echo "U NEED TO FILL ALL DATA";
    }else{
        $sql="SELECT * FROM user_login where email='$email' OR username='$username'";
        $tempSQL=$conn->prepare($sql) ;
        $tempSQL->execute();
        

        if($tempSQL->rowCount()>0){
            echo"thus username or email already ecxists";
            header("refresh:2", 'signup.php');

        }

        else{
            $sql="INSERT INTO user_login(id,name,username,email,password) VALUES(15,'$name','$username','$email','$hashed_password')";

            $insertSql=$conn->prepare($sql);
            $insertSql->execute();

            echo "new user is created succesfully";
            header("refresh:2; url=login.php");
        }

}}

?>