

<?php
/*
1. Создать галерею изображений, состоящую из двух страниц:
просмотр всех фотографий (уменьшенных копий);
просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
 * */

$link = mysqli_connect('VH228.spaceweb.ru:3306', 'goldenroru_image', '1914War1918', 'goldenroru_image');

if(mysqli_connect_errno($link)) {
   echo "Не удалось подключиться к MySQL: " . mysqli_connect_error();
}




// функция создания элементов сетки изображений

function render($link) {
    $query = mysqli_query($link, "SELECT * FROM images");

    while($row = mysqli_fetch_assoc($query)){
        echo "<div class=\"catalog_item\">" . "<a href=\".{$row['url']}\" target=\"blank\" class=\"catalog_link\"
                data-id=\"{$row['id']}\">" . "<img src=\".{$row['url']}\" class=\"catalog_img\" 
                data-id=\"{$row['id']}\">" . "{$row['name']}" . "</a>" . "</div>";
    }
}


function openModal($link) {
    if(empty((int)$_GET['id'])) {
        return;
    }

}

