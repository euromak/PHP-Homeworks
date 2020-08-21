

<?php
/*
1. Создать галерею изображений, состоящую из двух страниц:
просмотр всех фотографий (уменьшенных копий);
просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
 * */

$mysql = mysqli_connect('VH228.spaceweb.ru:3306', 'goldenroru_image', '1914War1918', 'goldenroru_image');

if(mysqli_connect_errno($mysql)) {
   echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
}

echo $mysql->host_info;


$query = mysqli_query($mysql, "SELECT * FROM images");
$result = mysqli_fetch_array($query, MYSQLI_ASSOC);

foreach($result as $key => $value) {
    echo $key . "<br>" . $value. "<br>";
}

//var_dump($result);
//
//function render($imgArr) {
//
//    foreach($imgArr as $key => $value) {
//        if(strlen($value) > 2) {
//            echo '<div class="catalog_item">' . "<a href=\".$value\" target=\"blank\" class=\"catalog_link\">" .
//                "<img src=\".$value\" class=\"catalog_img\">" . $key . '</a>' . '</div>';
//        }
//    }
//}

