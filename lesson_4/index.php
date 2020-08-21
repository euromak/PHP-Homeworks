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
        body {
            margin: 0;
        }
        .catalog {
            position: inherit;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 50px auto;
        }
        .catalog_item {
            flex: 1 1 auto;
        }
        .catalog_link {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .catalog_img {
            width: 300px;
        }
        .modal {
            position: fixed;
            text-align: center;
            top: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0,0,0, .4);
            z-index: 1000;
        }
        .modal_img {
            width: 100%;
            max-width: 1000px;
        }
        .hidden {
            display: none;
        }
        .btn_close {
            position: inherit;
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            top: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background-color: black;
        }
        .one {
            position: absolute;
            display: flex;
            width: 10px;
            height: 40px;
            background: white;
            transform: rotate(45deg);
        }
        .two {
            position: absolute;
            display: flex;
            width: 10px;
            height: 40px;
            background: white;
            transform: rotate(-45deg);
        }
    </style>
</head>
<body>
    <div class="catalog">
        <?php echo render($imgArr); ?>
    </div>
    <div class="catalog">
        <?php echo renderFromDir(); ?>
    </div>
    <div class="catalog">
        <?php echo renderFromDir(); ?>
    </div>
    <?php logDate();?>
    <script src="./js/main.js"></script>
</body>
</html>