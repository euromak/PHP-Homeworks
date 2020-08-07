<?php 
$a = 10;
$b = 5;

if($a && $b > 0) {
	echo $a - $b;	
} else if ($a && $b < 0) {
	echo $a * $b;	
} else {
	echo $a + $b;
}

?>
