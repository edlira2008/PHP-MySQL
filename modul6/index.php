<?php
//  for loop

$mobile=["iphone","ipad","television","phone"];
 for($i=0; $i<count($mobile);$i++){
   echo $mobile[$i]."<br>";
 }

// foreach
 $ditet_e_javes= ["e hane", "e marte", "e merkure" , "e ejte"]
;
foreach($ditet_e_javes as $dita){
    echo $dita;
    echo "<hr>";
}


// file manipualtion osht msimi i ri  

// read plus
// w - e ka sshtu nese se ka gjet ni file
// r+ read and write
// a+ append 

$my_file=fopen("ds.txt","r+");
$all_text=fread($my_file,100);

// $my_text=$all_text."\n kujdes me karrige! \n";
// fwrite($my_file,$my_text);
// fclose($my_file);

for($i=1;$i<101;$i++){
    fwrite($my_file, "text text text text $i\n");
}
fclose($my_file);

?>