<!doctype html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&family=Open+Sans:wght@400;600;700&display=swap"
          rel="stylesheet">
    <link rel="stylesheet" href="css/contacts.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="shortcut icon" href="img/logo.png" type="image/png">
    <title>Контакти</title>
</head>
<body>
<?php
session_start();
require_once "header.php";
?>
<section class="title">
    <div class="inner_container">
        <div class="title-text">
            <h1>Контакти</h1>
        </div>
    </div>
</section>
<main>
    <div class="inner_container">
        <div class="text-block">
            <h2>Електронна пошта:</h2>
            <p>shzosh1@i.ua</p>
            <p>&nbsp;</p>
            <h2>Телефони:</h2>
            <p>директор 4-10-11<br>
                секретар 4-10-11<br>
                заступники 4-06-79<br>
                початкова школа 5-82-00</p>
            <p>&nbsp;</p>
            <h2>Адреса:</h2>
            <p>вул. Островського, 3,<br>
                Шепетівка, 30405
            </p>
        </div>
        <div class="map-block">
            <h2>Ми на карті:</h2>
            <div class="map">
                <iframe width=100% height=100%
                        src="https://maps.google.com/maps?hl=en&amp;q=%D1%88%D0%B5%D0%BF%D0%B5%D1%82%D1%96%D0%B2%D1%81%D1%8C%D0%BA%D0%B0%20%D0%97%D0%BE%D1%88%201+(%D0%9D%D0%B0%D0%B7%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5)&amp;ie=UTF8&amp;t=&amp;z=16&amp;iwloc=B&amp;output=embed"
                        frameborder="0" scrolling="no"></iframe>
            </div>
            <!--            https://embedgooglemaps.com/ru/-->
        </div>
    </div>
</main>
<a name="forma" ></a>
<form action="formcheck.php" method="post">
    <h3>Звернутися до адміністрації школи з питань навчального процесу:</h3>
    <div class="question_block">
        <input type="text" name="name" value="<?= $_SESSION['name'] ?>" placeholder="Введіть ім’я" class="name_and_email">
        <div class="warning"><?= $_SESSION['nameErr'] ?></div>
        <input type="email" name="email" value="<?= $_SESSION['email'] ?>" placeholder="Введіть e-mail" class="name_and_email">
        <div class="warning"><?= $_SESSION['emailErr'] ?></div>
        <textarea name="message" placeholder="Введіть повідомлення"><?= $_SESSION['message'] ?></textarea>
        <div class="warning"><?= $_SESSION['messageErr'] ?></div>
    </div>
    <button type="submit">Надіслати</button>
    <div class="success_message"><?= $_SESSION['successMessage'] ?></div>
</form>
<?php
include_once "footer.php";
?>
</body>