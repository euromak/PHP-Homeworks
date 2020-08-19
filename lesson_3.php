<!--
1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка.
-->

<?php 

$i = 0;

while($i <= 100){

	if(($i % 3 == 0)||($i == 0)){
	echo $i . '</br>';
	}

	$i++;
}

?>

<!--
2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:
0 – ноль.
1 – нечетное число.
2 – четное число.
3 – нечетное число.
…
10 – четное число.
-->

<?php 

$i = 0;

do{
	if($i == 0) {
		echo $i . " - ноль. <br>";
	} elseif($i % 2 == 1) {
		echo $i . " - нечетное число. <br>";
	} elseif($i % 2 == 0) {
		echo $i . " - четное число. <br>";
	}
	
	$i++;
} while($i <= 10);

?>

<!--
3. Объявить массив, в котором в качестве ключей будут использоваться названия областей, а в качестве значений – массивы с названиями городов из соответствующей области. Вывести в цикле значения массива, чтобы результат был таким:
Московская область:
Москва, Зеленоград, Клин
Ленинградская область:
Санкт-Петербург, Всеволожск, Павловск, Кронштадт
Рязанская область … (названия городов можно найти на maps.yandex.ru)
-->

<?php 

$cities = [
	'Московская область' => [
		'Москва',
		'Зеленоград',
		'Клин',
	],
	'Ленинградская область' => [
		'Санкт-Петербург',
		'Кронштадт',
		'Всеволожск',
		'Павловск',
	],
	'Рязанская область' => [
		'Рязань',
		'Касимов',
		'Скопин',
		'Сасово',
		'Ряжск',
	]
];

foreach($cities as $key => $value) {
	echo $key . ": <br>";

	for($i = 0; $i < count($value); $i++) {
		echo $value[$i] . "<br>";
	}
}

?>

<!--
4. Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
Написать функцию транслитерации строк.
 -->

<?php 

	$alphabetArr = [
		'а' => 'a',
		'б' => 'b',
		'в' => 'v',
		'г' => 'g',
		'д' => 'd',
		'е' => 'e',
		'ё' => 'yo',
		'ж' => 'zh',
		'з' => 'z',
		'и' => 'i',
		'й' => 'yi',
		'к' => 'k',
		'л' => 'l',
		'м' => 'm',
		'н' => 'n',
		'о' => 'o',
		'п' => 'p',
		'р' => 'r',
		'с' => 's',
		'т' => 't',
		'у' => 'u',
		'ф' => 'f',
		'х' => 'kh',
		'ц' => 'ts',
		'ч' => 'ch',
		'ш' => 'sh',
		'щ' => 'shch',
		'ъ' => '\'',
		'ы' => 'y',
		'ь' => '\'',
		'э' => 'e',
		'ю' => 'yu',
		'я' => 'ya',

	];

	

	function translate($word, $dictionary) {
		$arrInputWord = str_split($word, 2);
		$arrOutputWord = [];
		$outputWord = "";

		for($i = 0; $i < count($arrInputWord); $i++) {
			echo $arrInputWord[$i] . "<br>";

			if(array_key_exists($arrInputWord[$i], $dictionary)) {
				foreach($dictionary as $key => $value) {

					if($arrInputWord[$i] == $key) {
						$arrOutputWord[] = $value;
						break;
					}
						
				}

			}

		}

		$outputWord = implode("", $arrOutputWord);

		return $outputWord . "<br>";
	}

	echo translate("мясорубка", $alphabetArr);

?>

<!--
5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
-->

<?php 
	$string = "Hello world! I am developer.";

	function replace($input) {
		$output = str_replace(" ", "_", $input);

		return $output . "<br>";
	}

	echo replace($string);
?>

<!--
6. В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. Необходимо представить пункты меню как элементы массива и вывести их циклом. Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.

СМОТРЕТЬ ПАПКУ TEMPLATES
-->

<!--
7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:
for (…){ // здесь пусто}
-->

<?php 

	for($i = 0; print $i, $i++ < 9;) {

	};

?>


</body>
</html>

