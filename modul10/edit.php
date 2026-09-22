<?php

 include_once('config.php');


 $id = $_GET['id'];

  $sql="SELECT * FROM users WHERE id=:id";
  $prep=$conn->prepare($sql);
  $prep->bindParam(":id",$id);
  $prep->execute();


  $user=$prep->fetch();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page <?php  echo $user['id'] ?></title>
</head>
<body>
     <form action="update.php" method="post">

       <input type="hidden"  name="id" value="<?php echo $user['id']?>"><br>
        <input type="text" name="uname" placeholder="Username" value="<?php echo $user['USERNAME']?>"><br>
        <input type="password" name="passwordi" placeholder="Password" value="<?php echo $user['password']?>"><br>
        <input type="number" name="age" placeholder="age" value="<?php echo $user['age']?>"><br>
        <button type="submit" name="submit" placeholder="submit"> Add </button>


</form>
</body>
</html>