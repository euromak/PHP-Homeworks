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
        echo "<div class=\"catalog_item\">" . "<a href=\".?id={$row['id']}\" target=\"blank\" class=\"catalog_link\"
                data-id=\"{$row['id']}\">" . "<img src=\"./{$row['url']}\" class=\"catalog_img\" 
                data-id=\"{$row['id']}\">" . "{$row['name']}" . "</a>" . "</div>";
    }

}


function openModal($link) {
    if (empty((int)$_GET['id'])) {
        return;
    }

    $id = (int)$_GET['id'];
    $request = mysqli_query($link, "SELECT * FROM images WHERE id = {$id}");

    while($a = mysqli_fetch_assoc($request)){
        $b = $a['url'];
        header('Location: ./' . $b);
    }

}
openModal($link);

// добавление машин в бд
function addImg($link) {
    $request = mysqli_query($link, 'SELECT name FROM images WHERE name IN("bmw_i", "bmw_z")');
    if($request === false) {
        echo 'dsd';
    }

    while($result = mysqli_fetch_assoc($request)) {
        if($result === TRUE) {
            echo var_dump($result);
        }

        $query = mysqli_query($link, "INSERT INTO images(name, url, size) VALUES('bmw_i', 'images/bmw_i.png', '108982'), ('bmw_z', 'images/bmw_z.png', '226310');");
    };
}



addImg($link);