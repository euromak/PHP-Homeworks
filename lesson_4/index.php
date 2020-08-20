<?php include_once('catalog.php'); ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homework 4</title>
    <style>
        .catalog {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            width: 60%;
            margin: 50px auto;
        }
        .catalog_item a {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        img {
            width: 300px;
        }
    </style>
</head>
<body>
    <div class="catalog">
        <?php echo render();
            echo __DIR__;
        ?>

    </div>

</body>
</html>