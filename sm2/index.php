<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SM2_PHP</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <div class="container">
    <form method="POST" class="form">
        <input type="text" class="input_class" name="name" value="<?if(isset($name)) echo $name?>" placeholder="Введите имя">
        <input type="email" class="input_class" name="email" value="<?if(isset($email)) echo $email?>" placeholder="Введите почту">
        <input type="number" class="input_class" name="phone" value="<?if(isset($phone)) echo $phone?>" placeholder="Введите номер телефона">

        <input type="submit" class="input_btn" name="send" value="Отправить">

        <?php
        if (isset($_POST['send'])) {
            // Получение данных из формы
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];


            // Функция для валидации имени

            function validateName($name)
            {
                if (empty($name)) {
                    return '<p class="error">Имя не может быть пустым</p>';
                }
                if (strlen($name) < 3 || strlen($name) > 20) {
                    return '<p class="error">Неверная длина имени (не менее 3 символов)</p>';
                }
                return "";
            }

            // Функция для валидации email
            function validateEmail($email)
            {
                if (empty($email)) {
                    return '<p class="error">Email не может быть пустым</p>';
                }
                if (strlen($email) < 3 || strlen($email) > 50) {
                    return '<p class="error">Неверная длина email</p>';
                }
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    return '<p class="error">Неверный формат email</p>';
                }
                return "";
            }

            // Функция для валидации номера телефона
            function validatePhone($phone)
            {
                if (empty($phone)) {
                    return  '<p class="error">Номер телефона не может быть пустым</p>';
                }
                if (strlen($phone) != 11) {
                    return  '<p class="error">Неверное количество символов в номере телефона</p>';
                }
                return "";
            }
            // Проверка валидности полей
            $error = validateName($name);
            if (!empty($error)) {
                echo $error;
                return;
            }

            $error = validateEmail($email);
            if (!empty($error)) {
                echo $error;
                return;
            }

            $error = validatePhone($phone);
            if (!empty($error)) {
                echo $error;
                return;
            }
            echo '<p class="noerror">Форма успешно отправлена';
        }
        ?>
    </form>
    </div>
</body>


</html>