<?php
    session_start();

    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['message']);

    unset($_SESSION['nameErr']);
    unset($_SESSION['emailErr']);
    unset($_SESSION['messageErr']);
    unset($_SESSION['successMessage']);

    function redirect()
    {
        header('Location: contacts.php#forma');
        exit();
    }

    $name = htmlspecialchars(trim($_POST['name']));
    $from = htmlspecialchars(trim($_POST['email']));
    $message = htmlspecialchars(trim($_POST['message']));

    $_SESSION['name'] = $name;
    $_SESSION['email'] = $from;
    $_SESSION['message'] = $message;

    if (empty(strlen($name)) && empty(strlen($from)) && empty(strlen($message))) {
        redirect();
    }
    else if (strlen($name) <= 1) {
        $_SESSION['nameErr'] = "Введіть коректне ім'я";
        redirect();
    } else if (!filter_var($from, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['emailErr'] = "Введіть e-mail";
        redirect();
    } else if (strlen($message) <= 15) {
        $_SESSION['messageErr'] = "Повідомлення повинне бути не менше 15 символів";
        redirect();
    } else {
        $subject = "=?utf-8?B?" . base64_encode("Зворотній зв'язок") . "?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
        mail("andrewdiac@gmail.com", $subject, $message, $headers);
        $_SESSION['successMessage'] = "Ви успішно відправили листа. Очікуйте на відповідь!";
        unset($_SESSION['name']);
        unset($_SESSION['email']);
        unset($_SESSION['message']);
        redirect();
    }