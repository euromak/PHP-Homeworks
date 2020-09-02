
<?php 
	// пункты меню
	$mainNav = [
		'ГЛАВНАЯ',
		'НОВОСТИ' => [
			'Новости о политике',
			'Новости о спорте',
			'Новости о мире',
		],
		'КОНТАКТЫ',
		'СПРАВКА',
	];

	function render($data) {

        foreach($data as $key => $value) {

            if(is_array($value)){
                echo "<div class='menu_item'><a href='#'><span>$key</span></a><div>";
                foreach($value as $sub => $val) {
                    echo "<a href='#'>$val</a>";
                }
                echo "</div></div>";
            } else {
                echo "<div class='menu_item'><a href='#'><span>$value</span></a></div>";
            }

            continue;

		}
	}
