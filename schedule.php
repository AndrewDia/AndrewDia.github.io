<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Open+Sans:wght@400;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/schedule.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <title>Контакти</title>
</head>
<body>
<?php
require_once "header.php";
?>
<section class="title">
    <div class="inner_container">
        <div class="title-text">
            <h1>Розклад уроків</h1>
        </div>
    </div>
</section>
<main>
    <div class="inner_container">
        <div class="center_block">
            <form method="get">
                <label>Твій клас:<input type="text" name="class"></label>
                <button type="submit"></button>
            </form>
            <?php
            $class = str_replace(' ', '', mb_strtoupper(htmlspecialchars(trim($_GET['class']))));
            switch ($class) {
                case "" :
                    break;
                case "5-А":
                    echo "$class";
                    echo "<img src='../school/img/5schedule.jpg' alt='hsh'/>";
                    break;
                case "6-А":
                    echo "$class";
                    echo "<img src='../school/img/6schedule.jpg' alt='hsh'/>";
                    break;
                case "7-А":
                    echo "$class";
                    echo "<img src='../school/img/7schedule.jpg' alt='hsh'/>";
                    break;
                case "8-А":
                    echo "$class";
                    echo "<img src='../school/img/8schedule.jpg' alt='hsh'/>";
                    break;
                case "9-А":
                    echo "$class";
                    echo "<img src='../school/img/9schedule.jpg' alt='hsh'/>";
                    break;
                default:
                    echo "Такого класу немає. Перевірте введені дані та вибрану мову";
            }
            ?>
        </div>
    </div>
</main>
<?php
include_once "footer.php";
?>
</body>
