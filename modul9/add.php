<?php
//  with this file we include the database conection
include_once("index.php");


if(isset($_POST['submit'])){
    $username=$_POST['uname'];
    $password=$_POST['passwordi'];
    $age=$_POST['age'];


    // qito t dhana mrena kllapaave tmewsme i kena marr tek input te name ne form.html
  


    // CRUD:
    // create - insert
    // read - select 
    // update - update users 
    // delete - me id 

// WE ENCRYPT THE PASSWORD TO HIDE DETAILS OF PASSSOWRD

    $hashed_password=password_hash($password, PASSWORD_BCRYPT);

    $sql="INSERT INTO users(username, password,age) VALUES ('$username' , '$password' , $age)";


      $conn->exec($sql);
      echo 'new record created succesfully!';
}



?>