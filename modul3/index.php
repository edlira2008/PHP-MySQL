<?php  function maximum($x,$y) {
    if ($x<$y) {
        return $y;
    }else{
        return $x;
    }
    
}
// asociative key value shembullli me land moduli 5 kqyre ne fund
// vargu multidimensionl ni varg qe e mban ni array tjt tjeter 
// sintaks e shkruar 
// interimi me shku elementper element 

$greatest = maximum(-50, 30);
echo "<br><h1>The maximum number is: $greatest </h1> <br>";



 function odd_even($nr){
 if($nr%2==0){
    echo "even";

 }else{
    echo 'odd';
 }

 }
 for($i=100;$i<105;$i++){
    echo "$i is: ";
    odd_even($i);
    echo "<br>";
 }

 $fruits=["banana", "apple", "mango", "orange", "pear"];
 for($i=0;$i< count($fruits);$i++){
    echo $fruits[$i]."<br>";
 }



 $mobile=["iphone","ipad","television","phone"];
 for($i=0; $i<count($mobile);$i++){
   echo $mobile[$i]."<br>";
 }