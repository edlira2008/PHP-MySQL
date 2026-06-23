<?php 
$students=array(
    array("drini", "prishtine" , 13),
    array('syari',"prishtine" ,16),
    array('edlira',"kastriot" ,17),
    array('patris',"prishtine" ,16),
);

for ($row=0; $row<count($students);$row++){
    echo "<ul>";
for($column=0;$column<count($students[$row]);$column++){
    echo "<li>".$students[$row][$columnm]."</li>"
}
 echo "</ul>";
}



?>
