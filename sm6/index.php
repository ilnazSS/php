<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <?php
        
        if ($_SESSION['isLogged']) { ?>
            <h2>Личный кабинет</h2>
            <form action="vendor/logout.php">
                <button style="width: fit-content">Выйти</button>
            </form>
        <? } else { ?>
            <h2>Авторизация</h2>
            <form action="vendor/login.php" method="post">
                <label for="email">
                    Email
                    <input type="text" name="email" id="email" placeholder="Email">
                </label>

                <label for="password">
                    Password
                    <input type="password" name="password" id="password" placeholder="Password">
                </label>

                <button>Авторизоваться</button>
            </form>
        <? }

        if (isset($_SESSION['message']) && !$_SESSION['isLogged']) { ?>
            <p class="error">Неверный логин или пароль</p>
        <? }

        unset($_SESSION['message']);
        ?>

    </div>
</body>

</html>