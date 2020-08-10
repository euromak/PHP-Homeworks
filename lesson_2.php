<!-- 1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
 -->

<?php

	$a = 10;
	$b = 5;

	if(($a && $b) >= 0) {
		echo $a - $b;	
	} else if (($a && $b) < 0) {
		echo $a * $b;	
	} else {
		echo $a + $b;
	}

	echo "<br>";
?>

<!--2. Присвоить переменной $a значение в промежутке [0..15]. 
	С помощью оператора switch организовать вывод чисел от $a до 15.-->

<?php

	$a = 1;

	switch($a) {
		case 0: echo 0 . "<br>";
		case 1: echo 1 . "<br>";
		case 2: echo 2 . "<br>";
		case 3: echo 3 . "<br>";
		case 4: echo 4 . "<br>";
		case 5: echo 5 . "<br>";
		case 6: echo 6 . "<br>";
		case 7: echo 7 . "<br>";
		case 8: echo 8 . "<br>";
		case 9: echo 9 . "<br>";
		case 10: echo 10 . "<br>";
		case 11: echo 11 . "<br>";
		case 12: echo 12 . "<br>";
		case 13: echo 13 . "<br>";
		case 14: echo 14 . "<br>";
		case 15: echo 15 . "<br>";
		default: echo "Число не входит в промежуток от 0 до 15";
	}
?>

<!-- 3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
Обязательно использовать оператор return. -->

<?php

	function addition($a, $b) {
		return $a + $b;
	}

	function subtraction($a, $b) {
		return $a - $b;b
	}

	function multiplication($a, $b) {
		return $a * $b;
	}

	function division($a, $b) {
		return $a / $b;
	}
	
	addition(10,7);
	subtraction(15,8);
	multiplication(2,4);
	division(12,6);
?>

