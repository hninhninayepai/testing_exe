<?php
$x = array(1, 2, 3, 4, 5);
 var_dump($x);
 echo "<hr>";
 unset($x[2]);
 $x = array_values($x);
 echo '';
var_dump($x);
?>