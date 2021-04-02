<?php
include_once "form.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="./" method="post">
        <h3>Форма пользователя</h3>
        <input type="text" tabindex="1" name="name" placeholder="Имя" minlength="5" maxlength="30">
        <input type="text" tabindex="2" name="surname" placeholder="Фамилия" minlength="5" maxlength="30">
        <input type="text" tabindex="3" name="login" placeholder="Логин" minlength="5" maxlength="30">
        <input type="password" tabindex="4" name="pass" placeholder="Пароль" minlength="8" maxlength="30">
        <button type="submit" tabindex="5">Отправить</button>
    </form>
</body>
</html>

<?php
    $valid_post = valid($_POST);
?>