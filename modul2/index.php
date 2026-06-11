


<?php
   $school= "Digital School";

   echo "i love $school";
 $numri1 =120;
 $numri2=5;



 echo $numri1 + $numri2

   ?>
   <br>
   <?php echo $numri2 - $numri1; ?>
   <br>
   <?php echo $numri1 *$numri2?>
   <br>

<!-- modulimi dmth nr me mbetje kur met ne fund e bojna me % te pjestimi qe met nr me mbeteje 
 ne fund --> 
<?php 
   $x=20;
   $y=8;
//    per me bo bashkimin e string edhe int e bojna permespikes (.) 
    echo 'mbetja: '. $x % $y ?>
    <br>

<?php
    $a= "first";
    $b= "plane";
    
     $c=$a.$b." was departed in 1995";
    // \n osht new line qe del dmth ni vi tjeter ma posht
    // \t new tab
    echo $c;
?>
<br>
<?php

 $school ="digital school";
    echo "gjatesia  e stringut: ".$school. " eshte " .strlen($school);
   
    ?>
<br>
<?php 
echo "$c:".str_word_count($c);
?>
<br>
<?php
$new_string = str_replace("School", "Academy", $school);
echo $new_string;
?>
<br>
<?php
echo strrev($school);
?>



