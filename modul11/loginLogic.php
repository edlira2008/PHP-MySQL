
<?php 

include_once("config.php");

if(isset($_POST['submit'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
 

    if(empty($username)||empty($password)){
        echo 'u need to fill all data';
        header("refresh:3; url=login.php");
    }else{
        $query="SELECT * from user_login WHERE username='$username'";
        $sql=$conn->prepare($query);
        $sql->execute();

        if($sql->rowCount()>0){
            $user=$sql->fetch();
            if(password_verify($password,$user['password'])){
                $_SESSION['username']=$user['username'];
                header("location: dashboard.php");
            }else{
                echo "password incorrect";
                header("refresh:3; url=login.php");
            }
        }else{
            echo "no user found with this username";
            header("refresh:3; url=login.php");
        }
    }
}


?>