<!-- HOMEWORK #1 -->

<?php 
$title = "Main Page";
$heading = "Заголовок";
$a = 05;
$b = '05';
$c = 4;
$d = 8;
define('PI', '3.1415926535');
?>

<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title><?php echo $title; ?></title>
</head>
<body>
	<h1><?php echo $heading; ?></h1>
	<p>
		<?php 
			echo $a + $b . "<br>"; 
			echo $a - $b . "<br>";
			echo $a * $b . "<br>";
			echo $a / $b . "<br>";
			echo $a ** 2 . "<br>";
			echo $a % 2 . '<br>';
			echo $a++ . '<br>';
			echo $a-- . '<br>';
			echo $a . '<br>';
			echo ++$a . '<br>';
			echo --$a . '<br>';
			echo $a += $b;
		?>
	</p>
	<p>
		<?php 
			echo "<p>Hello world!</p><br>";
			echo "My name is.." . '<br>';
			var_dump($a==$b); //true
			echo '<br>';
			$c = $c + $d - ($d=$c);
			echo $c . '<br>';
			echo $d;
			echo "<br>";
			echo "Число ПИ = " . PI . "<br>";
		?>
	</p>
	<p>
		<?php
			$int10 = 42;
			$int2 = 0b101010;
			$int8 = 052;
			$int16 = 0x2A;
			echo "Десятеричная система $int10 <br>";
			echo "Двоичная система $int2 <br>";
			echo "Восьмеричная система $int8 <br>";
			echo "Шестнадцатеричная система $int16 <br>";
		?>
	</p>
	<p>
		<?php
    		$a = 5;
    		$b = '05';
    		var_dump($a == $b); // Почему true? В данном случае сравнение идет по значениям и строка в переменной b преобразуется в число. В результете 5 == 5
    		var_dump((int)'012345');     // Почему 12345? Явное преобразование значения в числовой тип.
    		var_dump((float)123.0 === (int)123.0); // Почему false? В этом случае сравнение проиходит по типам данных. Типы данных отличаются и соответственно не равны. 
    		var_dump((int)0 === (int)'hello, world'); // Почему true? В строке нет цифр и поэтому при преобразовании в целое число получается 0.

		?>

	</p>
</body>
</html>