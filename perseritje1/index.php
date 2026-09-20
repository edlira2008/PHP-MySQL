<?php

echo' edlira kastratti';
?>
<br>
<?php
$numri = 20;
$numri1 = 25;

echo $numri + $numri1;
echo $numri % $numri1;



echo 'mbetja eshte'. $numri - $numri1;


?>
<br> 
<?php
$school ='digital school';
echo 'gjatesia e stringut ' . $school . strlen($school);



?>

<br>

<?php
$school = str_replace("digital", "Kastrati", $school);
echo $school;

echo strrev($school);
?>

<br>
<?php  function maximum($x,$y) {
    if ($x<$y) {
        return $y;
    }else{
        return $x;
    } 
    
}
$greatest = maximum(-50, 30);
echo  'the maximum number is:' .$greatest;

?>

<?php
function odd_even($nr){
if($nr%2==0){
    echo"odd";
}else{
    echo "even";
}
}

for($i=100; $i<105; $i++){
    echo "$i is:";
    odd_even($i);
    echo "<br>";
}


$cars = ['audi', 'bmw', 'mazda', 'benz', 'ford'];

for($i=0; $i<count($cars); $i++){
    echo $cars[$i]."<br>";
}


$dymdhetady = ['edlira', 'orgerta', 'klea', 'ylli', 'genti'];
for($i=0; $i<count($dymdhetady); $i++){
echo $dymdhetady[$i] ."<br>";
}


// $vjet = [ 3, 1, 51, 6, 16, 17, 79];
// for($i=0; $i<count($vjet); $i++){
//     echo $vjet[$i]."<br>";
// }


$tetx ="1";

 for($i=5; $i< 15; $i++){
   echo $tetx."<br>";
 }
 
 

 ?>


<?php

$students=array(
array('edlira', 'kastrati', 18),
array('edlira', 'kastrati', 18),
array('edlira', 'kastrati', 18),
array('edlira', 'kastrati', 18),
);

for($row=0; $row< count ($students); $row++){
     echo "<ul>";

for ($column=0; $column<count($students[$row]); $column++){

    echo "<br>"."<li>". $students[$row][$column]."</li"."</br>";  
      }
 echo "</ul>";


}

$fruits=array(
    array('molla', 'e kuqe', 2),
    array('molla', 'e kuqe', 2),
    array('molla', 'e kuqe', 2),
    array('molla', 'e kuqe', 2),
    array('molla', 'e kuqe', 2),
    array('molla', 'e kuqe', 2),
);

for($row=0; $row<count($fruits); $row++){
    echo "<ul>";

for($column=0; $column< count($fruits[$row]); $column++){
 echo "<li>" .$fruits[$row][$column]."</li>";
}echo "</ul>";
}

?>

<?php

$host="localhost";
$user="root"
$password="";
$db_name="baza";

#

try{
    $conn= new PDO("mysql:host:$host;dbname:$db_name:",$user, $password);
    $sql = "CREATE DATABASE baza";
    $conn->query($sql);

   $sql="CREATE TABLE users (id int(6) not null AUTO_INCREMENT PRIMARY KEY,
   USERNAME varchar(30) not null,
   password varchar(30) not null,
     age int(30))";
}