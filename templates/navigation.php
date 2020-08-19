
<?php 
	// пункты меню
	$mainNav = [
		'ГЛАВНАЯ' => [],
		'НОВОСТИ' => [
			'Новости о политике',
			'Новости о спорте',
			'Новости о мире',
		],
		'КОНТАКТЫ' => [],
		'СПРАВКА' => [],
	];

	function render($data) {
		foreach($data as $key => $value) {

			if(count($value) > 0) {

				for($i = 0; $i < count($value); $i++) {
					echo "<div><a><span>" . $key . "</span></a>" . "<div><a>" . $value[$i] . "</a></div>" . "</div>";
				}

				continue;
			}

			echo "<div><a><span>" . $key . "</span></a></div>";
			

		}
	}


?>