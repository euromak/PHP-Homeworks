

<?php
/*
 * 1. Создать галерею фотографий. Она должна состоять всего из одной странички, на которой пользователь видит все
 * картинки в уменьшенном виде и форму для загрузки нового изображения. При клике на фотографию она должна открыться в
 * браузере в новой вкладке. Размер картинок можно ограничивать с помощью свойства width. При загрузке изображения
 * необходимо делать проверку на тип и размер файла.
 * */

$imgArr = [
    'bmw_2' => "/images/bmw_2.png",
    'bmw_3' => "/images/bmw_3.png",
    'bmw_4' => "/images/bmw_4.png",
    'bmw_5' => "/images/bmw_5.png",
    'bmw_6' => "/images/bmw_6.png",
    'bmw_7' => "/images/bmw_7.png",
    'bmw_8' => "/images/bmw_8.png",
    'bmw_x1' => "/images/bmw_x1.png",
    'bmw_x2' => "/images/bmw_x2.png",
    'bmw_x3' => "/images/bmw_x3.png",
    'bmw_x4' => "/images/bmw_x4.png",
    'bmw_x5' => "/images/bmw_x5.png",
    'bmw_x6' => "/images/bmw_x6.png",
    'bmw_x7' => "/images/bmw_x7.png",
    'bmw_z' => "/images/bmw_z.png",
    'bmw_i' => "/images/bmw_i.png",
];

function render($imgArr) {

    foreach($imgArr as $key => $value) {
        if(strlen($value) > 2) {
            echo '<div class="catalog_item">' . "<a href=\".$value\" target=\"blank\" class=\"catalog_link\">" .
                "<img src=\".$value\" class=\"catalog_img\">" . $key . '</a>' . '</div>';
        }
    }
}

/*
 * 2. *Строить фотогалерею, не указывая статичные ссылки к файлам, а просто передавая в функцию построения адрес папки
 * с изображениями. Функция сама должна считать список файлов и построить фотогалерею со ссылками в ней.
 * */

function renderFromDir() {
    $dir = './images';
    $list = scandir($dir);

    foreach($list as $key => $value) {
        if(strlen($value) > 2) {
            echo '<div class="catalog_item">' . "<a href=\"$dir/$value\" target=\"blank\" class=\"catalog_link\">" .
                "<img src=\"$dir/$value\" class=\"catalog_img\">" . '</a>' . '</div>';
        }
    }
}

/*
 * Дополнительно
1* - Создать функцию, которая будет при каждом запросе файла index.php сохранять в файл log.txt данные о времени запроса.
2* - Доработать логирование таким образом, чтобы после каждой 10 записи в файл log.txt, он пересохранялся с новым именем.
Например logX.txt (под Х понимаются числа от 0 до бесконечности). А новые записи снова записывались в файл log.txt.
    Таким образом должен формироваться архив логирований. В каждом файле не более 10 записей.
Подробности в записе урока)
3* - Написать функцию получения всех папок и файлов директории.
4* - Написать рекурсивную функцию для вывода меню из массива
*/

function logDAte() {

    file_put_contents('log.txt', date('l jS \of F Y h:i:s A') . "\n", FILE_APPEND);
    $arrDate = file('log.txt');

    if((count($arrDate) % 10 === 0) && (count($arrDate) !== 0)) {
        $countFile = count($arrDate) / 10;
        $fileName = "log" . $countFile . '.txt';

        file_put_contents($fileName, $arrDate);
    }




    print_r($arrDate) ;
    print_r("<br>" . count($arrDate) . "<br>") ;

}