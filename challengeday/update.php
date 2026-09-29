<?php    
  include_once('config.php');


if(isset($_POST['submit'])){
    $car=$_POST['car'];
    $engine=$_POST['engine'];
    $year=$_POST['year'];
    $ps=$_POST['PS'];
    $id=$_POST['id'];


    
  

    $sql="UPDATE makina SET car='$car', engine=$engine, year=$year, ps=$ps WHERE id=$id";

      $prep=$conn->prepare($sql);
      // $prep->execute($sql);
      echo 'new record created succesfully!';

      header("Location:index.php");
}



?>